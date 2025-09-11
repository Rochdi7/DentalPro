<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session('cart', []); // array keyed by product_id

        // Load all product IDs at once
        $productIds = array_keys($cartItems);
        $products   = Product::with('media')->whereIn('id', $productIds)->get()->keyBy('id');

        // Build detailed cart items
        $cart  = [];
        $total = 0;

        foreach ($cartItems as $productId => $item) {
            $quantity = $item['quantity'] ?? 1;

            if ($products->has($productId)) {
                $product  = $products[$productId];
                $price    = (float) $product->price;
                $subtotal = $price * $quantity;
                $total   += $subtotal;

                $cart[] = [
                    'product'  => $product,
                    'quantity' => $quantity,
                    'subtotal' => $subtotal,
                ];
            }
        }

        return view('frontoffice.cart.index', [
            'cart'  => $cart,
            'total' => $total,
        ]);
    }

    public function addToCart(Request $request)
    {
        $validated = $request->validate([
            'product_id' => ['required', 'integer', 'exists:products,id'],
            'quantity'   => ['nullable', 'integer', 'min:1'],
        ]);

        $productId = (int) $validated['product_id'];
        $qty       = (int) ($validated['quantity'] ?? 1);

        // Pull session cart (assoc: [id => ['quantity'=>..]])
        $cart = session()->get('cart', []);

        // Merge quantities
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $qty;
        } else {
            $cart[$productId] = [
                'product_id' => $productId,
                'quantity'   => $qty,
            ];
        }

        // Persist
        session()->put('cart', $cart);

        // Build JSON payload efficiently
        $ids      = array_keys($cart);
        $products = Product::with('media')->whereIn('id', $ids)->get()->keyBy('id');

        $items = [];
        $total = 0;
        $count = 0;

        foreach ($cart as $rowProductId => $row) {
            $product = $products->get($rowProductId);
            if (!$product) continue;

            $rowQty   = (int) $row['quantity'];
            $price    = (float) $product->price;
            $subtotal = $price * $rowQty;

            $items[] = [
                'id'       => $product->id,
                'name'     => $product->title,
                'price'    => $price,
                'quantity' => $rowQty,
                'image'    => $product->getFirstMediaUrl('main_image') ?: asset('img/default-product.jpg'),
                'url'      => route('product.show', $product->slug),
            ];

            $total += $subtotal;
            $count += $rowQty;
        }

        return response()->json([
            'message' => 'Produit ajouté au panier',
            'count'   => $count,
            'items'   => $items,
            'total'   => number_format($total, 2, '.', ' ') . ' MAD',
        ]);
    }

    public function removeFromCart(Request $request)
    {
        $request->validate([
            'product_id' => ['required', 'integer', 'exists:products,id'],
        ]);

        $productId = (int) $request->product_id;

        $cart = session()->get('cart', []);
        unset($cart[$productId]);
        session()->put('cart', $cart);

        // Rebuild summary
        if (empty($cart)) {
            return response()->json([
                'message' => 'Produit supprimé',
                'count'   => 0,
                'items'   => [],
                'total'   => number_format(0, 2, '.', ' ') . ' MAD',
            ]);
        }

        $ids      = array_keys($cart);
        $products = Product::with('media')->whereIn('id', $ids)->get()->keyBy('id');

        $items = [];
        $total = 0;
        $count = 0;

        foreach ($cart as $rowProductId => $row) {
            $product = $products->get($rowProductId);
            if (!$product) continue;

            $rowQty   = (int) $row['quantity'];
            $price    = (float) $product->price;
            $subtotal = $price * $rowQty;

            $items[] = [
                'id'       => $product->id,
                'name'     => $product->title,
                'price'    => $price,
                'quantity' => $rowQty,
                'image'    => $product->getFirstMediaUrl('main_image') ?: asset('img/default-product.jpg'),
                'url'      => route('product.show', $product->slug),
            ];

            $total += $subtotal;
            $count += $rowQty;
        }

        return response()->json([
            'message' => 'Produit supprimé',
            'count'   => $count,
            'items'   => $items,
            'total'   => number_format($total, 2, '.', ' ') . ' MAD',
        ]);
    }

    public function getMiniCartHtml()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return response()->json([
                'html'  => '<li class="ps-cart__item text-center"><span>Votre panier est vide.</span></li>',
                'total' => number_format(0, 2, '.', ' ') . ' MAD',
                'count' => 0,
            ]);
        }

        $ids      = array_keys($cart);
        $products = Product::with('media')->whereIn('id', $ids)->get()->keyBy('id');

        $itemsHtml = '';
        $total     = 0;
        $count     = 0;

        foreach ($cart as $productId => $row) {
            $product = $products->get($productId);
            if (!$product) continue;

            $qty   = (int) ($row['quantity'] ?? 1);
            $price = (float) $product->price;

            $total += $price * $qty;
            $count += $qty;

            $itemsHtml .= view('frontoffice.partials.mini_cart_item', [
                'product' => $product,
                'item'    => ['quantity' => $qty],
            ])->render();
        }

        return response()->json([
            'html'  => $itemsHtml,
            'total' => number_format($total, 2, '.', ' ') . ' MAD',
            'count' => $count,
        ]);
    }

    public function clear(Request $request)
    {
        session()->forget('cart');
        return redirect()->route('cart.index')->with('success', 'Le panier a été vidé.');
    }

    public function update(Request $request)
    {
        $quantities = $request->input('quantities', []);
        $cart       = session('cart', []);

        foreach ($quantities as $productId => $qty) {
            if (isset($cart[$productId])) {
                $cart[$productId]['quantity'] = max((int) $qty, 1); // prevent 0 or negative
            }
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Quantités mises à jour.');
    }
}

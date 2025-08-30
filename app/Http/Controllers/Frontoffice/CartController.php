<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session('cart', []); // array of ['product_id' => ..., 'quantity' => ...]

        // Load all product IDs at once
        $productIds = collect($cartItems)->pluck('product_id')->unique()->toArray();
        $products = \App\Models\Product::with('media')->whereIn('id', $productIds)->get()->keyBy('id');

        // Build detailed cart items: each with product + quantity
        $cart = [];
        $total = 0;

        foreach ($cartItems as $item) {
            $productId = $item['product_id'] ?? null;
            $quantity = $item['quantity'] ?? 1;

            if ($productId && $products->has($productId)) {
                $product = $products[$productId];
                $price = is_array($product->price) ? 0 : (float) $product->price;
                $subtotal = $price * $quantity;
                $total += $subtotal;

                $cart[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'subtotal' => $subtotal,
                ];
            }
        }

        return view('frontoffice.cart.index', [
            'cart' => $cart,
            'total' => $total,
        ]);
    }


    public function addToCart(Request $request)
    {
        $productId = $request->product_id;

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'product_id' => $productId,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        $items = [];
        $total = 0;

        foreach ($cart as $item) {
            $product = Product::find($item['product_id']);
            if ($product) {
                $items[] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $item['quantity'],
                    'image' => $product->getFirstMediaUrl('images') ?: asset('img/default-product.jpg'),
                    'url' => route('product.show', $product->slug),
                ];
                $total += $product->price * $item['quantity'];
            }
        }

        return response()->json([
            'message' => 'Produit ajouté au panier',
            'count' => collect($cart)->sum('quantity'),
            'items' => $items,
            'total' => number_format($total, 2) . ' DH'
        ]);
    }

    public function removeFromCart(Request $request)
    {
        $productId = $request->product_id;

        $cart = session()->get('cart', []);
        unset($cart[$productId]);
        session()->put('cart', $cart);

        $items = [];
        $total = 0;

        foreach ($cart as $item) {
            $product = Product::find($item['product_id']);
            if ($product) {
                $items[] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => (float) $product->price,
                    'quantity' => $item['quantity'],
                    'image' => $product->getFirstMediaUrl('images') ?: asset('img/default-product.jpg'),
                    'url' => route('product.show', $product->slug)
                ];
                $total += $product->price * $item['quantity'];
            }
        }

        return response()->json([
            'message' => 'Produit supprimé',
            'count' => collect($cart)->sum('quantity'),
            'items' => $items,
            'total' => number_format($total, 2) . ' DH'
        ]);
    }

    public function getMiniCartHtml()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return response()->json([
                'html'  => '<li class="ps-cart__item text-center"><span>Votre panier est vide.</span></li>',
                'total' => number_format(0, 2) . ' DH',
                'count' => 0,
            ]);
        }

        $ids = array_column($cart, 'product_id');
        $products = Product::whereIn('id', $ids)->get()->keyBy('id');

        $itemsHtml = '';
        $total = 0;
        $count = 0;

        foreach ($cart as $row) {
            $product = $products->get($row['product_id']);
            if (!$product) continue;

            $qty = (int) ($row['quantity'] ?? 1);
            $total += $product->price * $qty;
            $count += $qty;

            $itemsHtml .= view('frontoffice.partials.mini_cart_item', [
                'product' => $product,
                'item'    => ['quantity' => $qty],
            ])->render();
        }

        return response()->json([
            'html'  => $itemsHtml,
            'total' => number_format($total, 2) . ' DH',
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
    $cart = session('cart', []);

    foreach ($quantities as $productId => $qty) {
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = max((int) $qty, 1); // prevent 0 or negative
        }
    }

    session()->put('cart', $cart);

    return redirect()->route('cart.index')->with('success', 'Quantités mises à jour.');
}


}

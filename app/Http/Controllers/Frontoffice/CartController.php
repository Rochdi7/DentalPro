<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    private function calculateCartSummary(array $cartItems)
    {
        $productIds = array_keys($cartItems);
        $products   = Product::with('media')->whereIn('id', $productIds)->get()->keyBy('id');

        $cart = [];
        $total = 0;
        $count = 0;
        $items_for_json = [];

        foreach ($cartItems as $productId => $item) {
            $quantity = $item['quantity'] ?? 1;

            if ($products->has($productId)) {
                $product  = $products[$productId];
                $price    = is_array($product->price) ? 0 : (float) $product->price;
                $subtotal = $price * $quantity;
                
                $cart[] = [
                    'product'  => $product,
                    'quantity' => $quantity,
                    'subtotal' => $subtotal,
                ];
                
                $items_for_json[] = [
                    'id'       => $product->id,
                    'name'     => $product->title,
                    'price'    => $price,
                    'quantity' => $quantity,
                    'subtotal' => $subtotal,
                    'image'    => $product->getFirstMediaUrl('main_image') ?: asset('img/default-product.jpg'),
                    'url'      => route('product.show', $product->slug),
                ];

                $total += $subtotal;
                $count += $quantity;
            }
        }

        return [
            'cart' => $cart, 
            'total' => $total, 
            'count' => $count, 
            'items_for_json' => $items_for_json
        ];
    }

    public function index()
    {
        $cartItems = session('cart', []);
        $summary = $this->calculateCartSummary($cartItems);

        return view('frontoffice.cart.index', [
            'cart'  => $summary['cart'],
            'total' => $summary['total'],
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

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $qty;
        } else {
            $cart[$productId] = [
                'product_id' => $productId,
                'quantity'   => $qty,
            ];
        }

        session()->put('cart', $cart);
        $summary = $this->calculateCartSummary($cart);

        return response()->json([
            'message' => 'Produit ajouté au panier',
            'count'   => $summary['count'],
            'items'   => $summary['items_for_json'],
            'total'   => number_format($summary['total'], 2, '.', ' ') . ' MAD',
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

        $summary = $this->calculateCartSummary($cart);

        return response()->json([
            'message' => 'Produit supprimé',
            'count'   => $summary['count'],
            'items'   => $summary['items_for_json'],
            'total'   => number_format($summary['total'], 2, '.', ' ') . ' MAD',
        ]);
    }

    public function getMiniCartHtml()
    {
        $cart = session()->get('cart', []);
        $summary = $this->calculateCartSummary($cart);

        if (empty($cart)) {
            return response()->json([
                'html'  => '<li class="ps-cart__item text-center"><span>Votre panier est vide.</span></li>',
                'total' => number_format(0, 2, '.', ' ') . ' MAD',
                'count' => 0,
            ]);
        }

        $itemsHtml = '';
        foreach ($summary['cart'] as $item) {
             $itemsHtml .= view('frontoffice.partials.mini_cart_item', [
                 'product' => $item['product'],
                 'item'    => $item,
             ])->render();
        }

        return response()->json([
            'html'  => $itemsHtml,
            'total' => number_format($summary['total'], 2, '.', ' ') . ' MAD',
            'count' => $summary['count'],
        ]);
    }

    public function clear(Request $request)
    {
        session()->forget('cart');
        
        return response()->json([
            'message' => 'Le panier a été vidé.',
            'count'   => 0,
            'items'   => [],
            'total'   => number_format(0, 2, '.', ' ') . ' MAD',
        ]);
    }

    public function update(Request $request)
    {
        // Force JSON response if ajax parameter is present
        if ($request->has('ajax') || $request->ajax() || $request->wantsJson() || $request->expectsJson()) {
            $quantities = $request->input('quantities', []);
            
            // Handle single product update (from quantity input change)
            if ($request->has('product_id') && $request->has('quantity')) {
                $productId = (int) $request->input('product_id');
                $quantity = max(1, (int) $request->input('quantity'));
                $quantities = [$productId => $quantity];
            }

            $cart = session('cart', []);

            // Update quantities
            foreach ($quantities as $productId => $qty) {
                if (isset($cart[$productId])) {
                    $cart[$productId]['quantity'] = max((int) $qty, 1);
                }
            }
            
            session()->put('cart', $cart);
            $summary = $this->calculateCartSummary($cart);

            return response()->json([
                'message' => 'Quantités mises à jour.',
                'count'   => $summary['count'],
                'items'   => $summary['items_for_json'],
                'total'   => number_format($summary['total'], 2, '.', ' ') . ' MAD',
            ], 200, [
                'Content-Type' => 'application/json',
                'Cache-Control' => 'no-cache, no-store, must-revalidate'
            ]);
        }

        // Fallback for regular form submission (should not happen with our JS)
        return redirect()->route('cart.index')->with('success', 'Quantités mises à jour.');
    }
}
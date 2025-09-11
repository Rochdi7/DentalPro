<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Mail\OrderPlacedMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    /**
     * Show checkout page
     */
    public function index()
    {
        $cartItems = session('cart', []);
        $productIds = collect($cartItems)->pluck('product_id')->unique()->toArray();

        $products = Product::with('media')
            ->whereIn('id', $productIds)
            ->get()
            ->keyBy('id');

        $cart = [];
        $total = 0;

        foreach ($cartItems as $item) {
            $productId = $item['product_id'] ?? null;
            $quantity  = $item['quantity'] ?? 1;

            if ($productId && $products->has($productId)) {
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

        return view('frontoffice.checkout.index', compact('cart', 'total'));
    }

    /**
     * Handle checkout form submission
     */
    public function store(Request $request)
    {
        // ✅ Validation stricte
        $validated = $request->validate([
            'email'         => 'required|email|max:150',
            'first_name'    => 'required|string|max:100',
            'last_name'     => 'required|string|max:100',
            'company'       => 'nullable|string|max:150',
            'address_line1' => 'required|string|max:255',
            'address_line2' => 'nullable|string|max:255',
            'city'          => 'required|string|max:100',
            'postal_code'   => 'required|string|max:20',
            'phone'         => 'required|string|max:30',
            'order_notes'   => 'nullable|string|max:1000',
            'shipping'      => 'nullable|string|in:free,none',
            'payment'       => 'required|string|in:cod',
        ]);

        $cartItems = session('cart', []);
        if (empty($cartItems)) {
            return back()->withErrors(['cart' => 'Votre panier est vide.'])->withInput();
        }

        $productIds = collect($cartItems)->pluck('product_id')->unique()->toArray();
        $products   = Product::whereIn('id', $productIds)->get()->keyBy('id');

        $cart  = [];
        $total = 0;

        foreach ($cartItems as $item) {
            $productId = $item['product_id'] ?? null;
            $quantity  = $item['quantity'] ?? 1;

            if ($productId && $products->has($productId)) {
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

        if ($total <= 0) {
            return back()->withErrors(['cart' => 'Le montant total doit être supérieur à 0.'])->withInput();
        }

        // ✅ Préparation des données de commande
        $orderData = array_merge($validated, [
            'cart'     => $cart,
            'total'    => $total,
            'shipping' => $request->input('shipping', 'none'),
        ]);

        // ✅ Envoi de l’email
        try {
            Mail::to('rochdi.karouali1234@gmail.com')
                ->send(new OrderPlacedMail($orderData));

            Log::info('✅ Order email sent successfully', ['to' => 'rochdi.karouali1234@gmail.com']);
        } catch (\Exception $e) {
            Log::error('❌ Order email failed', ['error' => $e->getMessage()]);
            return back()->withErrors(['mail' => 'Erreur lors de l’envoi du mail : ' . $e->getMessage()]);
        }

        // ✅ Vider le panier après succès
        session()->forget('cart');

        return redirect()
            ->route('frontoffice.home')
            ->with('success', 'Votre commande a été enregistrée avec succès ✅');
    }
}

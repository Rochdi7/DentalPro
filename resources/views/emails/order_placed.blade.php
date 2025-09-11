<h2>Nouvelle commande reçue</h2>

<p><strong>Nom:</strong> {{ $orderData['first_name'] }} {{ $orderData['last_name'] }}</p>
<p><strong>Email:</strong> {{ $orderData['email'] }}</p>
<p><strong>Téléphone:</strong> {{ $orderData['phone'] }}</p>
<p><strong>Adresse:</strong> {{ $orderData['address_line1'] }}, {{ $orderData['city'] }} {{ $orderData['postal_code'] }}</p>

@if(!empty($orderData['company']))
    <p><strong>Société:</strong> {{ $orderData['company'] }}</p>
@endif

@if(!empty($orderData['order_notes']))
    <p><strong>Notes:</strong> {{ $orderData['order_notes'] }}</p>
@endif

<h3>Détails de la commande :</h3>
<ul>
    @foreach ($orderData['cart'] as $item)
        <li>
            {{ $item['product']->title }}  
            x {{ $item['quantity'] }} —  
            {{ number_format($item['subtotal'], 2, ',', ' ') }} MAD
        </li>
    @endforeach
</ul>

<p><strong>Total :</strong> {{ number_format($orderData['total'], 2, ',', ' ') }} MAD</p>

{{-- 🚚 Livraison --}}
@if(!empty($orderData['shipping']) && $orderData['shipping'] === 'free' && $orderData['total'] >= 1000)
    <p><strong>Livraison :</strong> Gratuite (commande ≥ 1000 MAD)</p>
@else
    <p><strong>Livraison :</strong> À préciser</p>
@endif


{{-- 💳 Paiement --}}
<p><strong>Méthode de paiement :</strong> 
    @if($orderData['payment'] === 'cod')
        Paiement à la livraison
    @else
        {{ ucfirst($orderData['payment']) }}
    @endif
</p>

@extends('layouts.mail')
@section('content')

<div class="email-section">

    <h1 style="text-align: center">Achat de produit</h1>
    <div class="sender-infos" style="margin-bottom: 15px; text-align: justify;">
        <p><b>Date :</b>{{getFormattedDate($order->created_at) }}</p>
        <p><b>Nom et prénoms : </b>{{ $order->customer->fullname }}</p>
        <p><b>Produit concerné :</b>{{$order->product_name}}</p>
        <p><b>Prix unitaire :</b>{{$order->product->price}} FCFA</p>
        <p><b>Quantité :</b>{{ $order->quantity }}</p>
        <p><b>Département :</b>{{ $order->delivery_department }}</p>
        <p><b>Addresse de livraison :</b>{{ $order->delivery_address }}</p>
        <p><b>Frais de livraison :</b>{{ $order->delivery_fees }} FCFA</p>
        <p><b>Prix total :</b>{{ $order->total_price }}</p>
        <p><b>Type :</b>{{ $order->type }}</p>

        <a href="{{ $order->invoice_url }}" class="btn"
           style="    color: #fff; background-color: #1f7300; border-color: #1f7300; font-size: 0.8rem; font-weight: 500; text-decoration: none; padding: 0.5rem 1rem; line-height: 1.5; border-radius: 0.3rem">Télecharger
            la facture</a>
    </div>
</div>

@endsection
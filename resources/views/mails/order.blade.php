@extends('layouts.mail')
@section('content')

<div class="email-section">

    <h1 style="text-align: center">Commande de produit</h1>
    <div class="sender-infos" style="margin-bottom: 15px; text-align: justify;">
        <p><b>Date :</b>{{$datas['order']->date }}</p>
        <p><b>Nom et prénoms : </b>{{ $datas['customer']->fullname }}</p>
        <p><b>Email: </b>{{ $datas['customer']->email }}</p>
        <p><b>Produit concerné :</b>{{$datas['order']->product_name}}</p>
        <p><b>Prix unitaire :</b>{{$datas['order']->product->price}} FCFA</p>
        <p><b>Quantité :</b>{{ $datas['order']->quantity }}</p>
        <p><b>Département :</b>{{ $datas['order']->delivery_department }}</p>
        <p><b>Addresse de livraison :</b>{{ $datas['order']->delivery_address }}</p>
        <p><b>Frais de livraison :</b>{{ $datas['order']->delivery_fees }} FCFA</p>
        <p><b>Prix total :</b>{{ $datas['order']->total_price }}</p>
        <p><b>Type :</b>{{ $datas['order']->type }}</p>
    </div>
</div>

@endsection
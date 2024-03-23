@extends('layouts.mail')
@section('content')

<div class="email-section">

    <h1 style="text-align: center">Achat de tickets VAL BEAUTÉ</h1>
    <div class="sender-infos" style="margin-bottom: 15px; text-align: justify;">
        <p>Votre paiement a été effectué avec succès.</p>
        <p>Téléchargez votre facture en cliquant sur le boutton çi dessous</p>
        <a href="{{ $reservation->invoice }}" class="btn"
           style="    color: #fff; background-color: #1f7300; border-color: #1f7300; font-size: 0.8rem; font-weight: 500; text-decoration: none; padding: 0.5rem 1rem; line-height: 1.5; border-radius: 0.3rem">Télecharger
            la facture</a>
    </div>
</div>

@endsection
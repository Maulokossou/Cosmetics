@extends('layouts.mail')
@section('content')

<div class="email-section">

    <h1 style="text-align: center">Vous avez reçu un nouveau message</h1>
    <div class="sender-infos" style="margin-bottom: 15px; text-align: justify;">
        <p><b>Nom et prénoms : </b>{{$datas['fullname']}}</p>
        <p><b>Email: </b>{{$datas['email']}}</p>
        <p><b>Téléphone :</b>{{$datas['phone']}}</p>
        <p><b>Objet :</b>{{$datas['subject']}}</p>
        <div class="message-content">
            <p style="font-size: 15px; text-align: justify"> <b style="text-align: center">Message :
                </b><br>{{$datas["message"]}}</p>
        </div>
    </div>

</div>

@endsection
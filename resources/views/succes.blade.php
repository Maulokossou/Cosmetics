@extends('layout.layout')
@section('content')
    <div class="container">
            <div class="flex items-center justify-center margin-auto p-4">
                <div class="border-2 border-solid border-primary-blue shadow-xl shadow-primary-one w-64 h-auto p-3">
                    <h1 class="text-primary-one font-bold text-5xl text-center">Validé</h1>
                </div>
            </div>
            <div class="flex justify-center my-5">
                <img src="{{ asset('assets/images/succes.png') }}" class="w-80" alt="">
            </div>

            <h1 class="text-center title text-xl font-bold text-primary-dark my-0">Les billets ont été envoyés à:</h1>
            <h1 class="text-center title text-lg">exemple@gmail.com</h1>

            <h1 class="text-center text-lg py-2">Vous n'avez pas encore reçu de billets?</h1>

            <div class="flex justify-center my-4">
                <button class=" border-primary-blue text-primary-one border border-solid rounded-lg py-2 px-3"> Renvoyez des
                    billets</button>
            </div>

            <h1 class="text-center text-lg py-4">Vous avez du mal à recevoir les billets?</h1>

            <div class="grid md:grid-cols-2 text-center py-2">
                <h1 class="text-center title text-lg flex items-center justify-center text-primary-one"> <span
                        class="material-symbols-outlined">
                        phone_in_talk
                    </span>+229 54 00 00 00</h1>
                <h1 class="text-center title text-lg flex items-center justify-center text-primary-one"> <span
                        class="material-symbols-outlined">
                        mail
                    </span>val@beauté.com</h1>
            </div>
    </div>
@endsection

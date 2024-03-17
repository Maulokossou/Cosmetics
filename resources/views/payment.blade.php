@extends('layout.layout')
@section('content')
    <section class="container p-10">
        <h1 class="font-bold text-2xl">Coordonnées de l'acheteur</h1>
        <div class="grid md:grid-cols-2 gap-5">
            <div class="m-0 p-0 my-5">
                <div class=" bg-primary-one/50 text-primary-blue text-md rounded-md p-3">
                    Les billets éléctroniques seront envoyés à votre adresse e-mail, veuillez vous assurer que votre adresse
                    e-mail est correcte.
                </div>

                <form action="" method="post" class="my-5">
                    <div class="grid md:grid-cols-2 gap-5">

                        <div class="my-2">
                            <label for="" class="block mb-3">Nom de famille </label>
                            <input name="name" class="rounded-lg border-2 border-solid" placeholder="MARTINS"></input>
                        </div>
                        <div class="my-2">
                            <label for="" class="block mb-3">Prénom </label>
                            <input name="surname" class="rounded-lg border-2 border-solid" placeholder="Marcus"></input>
                        </div>
                        <div class="my-2">
                            <label for="" class="block mb-3"> Adresse email</label>
                            <input name="email" class="rounded-lg border-2 border-solid"
                                placeholder="exemple@gmail.com"></input>
                        </div>

                        <div class="my-2">
                            <label for="" class="block mb-3"> Confirmer votre adresse email</label>
                            <input name="confirmemail" class="rounded-lg border-2 border-solid"
                                placeholder="exemple@gmail.com"></input>
                        </div>
                        <div class="my-2">
                            <label for="" class="block mb-3"> Numéro de téléphone </label>
                            <input name="phone" class="rounded-lg border-2 border-solid"
                                placeholder="22950000000"></input>
                        </div>
                    </div>
                </form>
            </div>
            <div class="">
                <h1 class=" font-bold my-5 text-xl">Les détails de l'évènement</h1>

                <div class="grid md:grid-cols-2 gap-5">
                    <div class="object-contain shrink-0">
                        <img src="{{ asset('assets/images/event1.jpeg') }}" class="w-full h-auto rounded-lg" alt="">
                    </div>
                    <div class="">
                        <h1 class="my-2 font-semibold text-lg">
                            Je suis photogénique
                        </h1>
                        <p class="text-md flex items-start"><span class="mx-2 material-symbols-outlined">
                                location_on
                            </span>Cadjèhoun, Cotonou
                        </p>
                        <p class="text-md flex items-start""><span class="mx-2 material-symbols-outlined">
                                calendar_month
                            </span> 29 & 30 Mars, 2024 </p>
                    </div>
                </div>
                <hr class="border border-dashed my-5">
                <h1 class="my-2 font-semibold text-lg">
                    Récapitulatif de la commande
                </h1>
                <div class="grid md:grid-cols-2 gap-2 my-3">
                    <p class="text-md"> Type de billet</p>
                    <p class="text-md text-right">2 x Packet VIP</p>
                </div>
                <hr class="border border-dashed my-2">
                <div class="grid md:grid-cols-2 gap-2 my-3" style="padding-bottom:25px">
                    <p class="text-md"> Le prix du ticket</p>
                    <p class="text-md text-right">2 X 30.000</p>
                </div>

                <hr class="border border-dashed my-2">
                <div class="grid md:grid-cols-2 gap- my-3">
                    <p class="text-md">Total</p>
                    <p class="text-md text-right">60.000</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center py-4">
            <button class=" bg-primary-one text-white rounded-lg py-2 px-3"> Continuer vers le paiement</button>
        </div>
    </section>

    <style>
        input{
            border:none;
            border:1px solid rgb(190, 187, 187);
            padding: 8px;
            outline: none;
        }
    </style>
@endsection

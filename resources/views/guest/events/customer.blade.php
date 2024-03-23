<x-guest-layout>
    <section class="container p-10 mx-auto">
        <h1 class="font-bold text-2xl text-center">Coordonnées de l'acheteur</h1>
        <hr>
        <div class="w-fit mx-auto">
            <div class=" gap-10 ">
                <div class="m-0 p-0 my-5">
                    <div class=" bg-primary-one/50 text-primary-blue text-md rounded-md p-3">
                        Les billets éléctroniques seront envoyés à votre adresse e-mail, veuillez vous assurer que votre adresse e-mail est correcte.
                    </div>
                    @if ($errors->has('messages'))
                        <div class="bg-red-300 text-red-700 rounded-md p-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                    
                        </div>
                    @endif
    
                    <form action="{{ route('guest.event.customer.store', ['slug' => $event->slug, 'ticket' => $ticket->id]) }}" method="post" class="my-5">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="my-2 md:col-span-2">
                                <label for="" class="block mb-3">Nom et prénoms </label>
                                <input name="customer_fullname" class="rounded-lg border-2 border-solid w-full"
                                       placeholder="MARTINS"></input>
                            </div>
                            <div class="my-2">
                                <label for="" class="block mb-3"> Adresse email</label>
                                <input name="customer_email" class="rounded-lg border-2 border-solid w-full"
                                       placeholder="exemple@gmail.com"></input>
                            </div>
    
                            <div class="my-2">
                                <label for="" class="block mb-3"> Numéro de téléphone </label>
                                <input name="customer_phone" class="rounded-lg border-2 border-solid w-full"
                                       placeholder="22950000000"></input>
                            </div>
                        </div>
                        <div class="flex justify-center py-4">
                            <button type="submit" class=" bg-primary-one text-white rounded-lg py-2 px-3 hover:opacity-70 transition-all" href="{{ route('guest.event.payment', ['slug' => $event->slug, 'ticket' => $ticket->id]) }}" > Continuer vers le paiement</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>


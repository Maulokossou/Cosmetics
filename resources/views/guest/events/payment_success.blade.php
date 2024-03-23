<x-guest-layout>
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
            <h1 class="text-center title text-lg">{{ $reservation->customer_email }}</h1>

            <h1 class="text-center text-lg py-2">Vous n'avez pas encore reçu de billets?</h1>

            <a href="{{ $reservation->invoice }}" class="flex items-center justify-center my-4 border-primary-blue  border border-solid rounded-lg py-2 px-3 w-fit mx-auto bg-green-800 text-white gap-4" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                  </svg>
                <span class=" "> Télécharger</span>
            </a>

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
</x-guest-layout>

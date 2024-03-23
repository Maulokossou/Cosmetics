<x-app-layout>

    @slot('title')
    Contrats 
    @endslot

    <x-slot name="contentHeading">
        <div class="flex justify-between items-center">
            <h2 class="dash-page-title text-center">
                Paiement de tickets - {{ $reservation->ticket_infos }}
            </h2>
        </div>
    </x-slot>
    <hr>

    <div class="flex justify-center items-center">
        <a href="{{ $reservation->invoice }}" class="btn btn-main flex items-center gap-2 mt-4" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.k638 0-8.573-3.007-9.963-7.178Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>
              
              <span>Voir le document</span>
        </a>
    </div>

</x-app-layout>
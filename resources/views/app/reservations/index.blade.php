<x-app-layout>
    <x-slot name="contentHeading">
        <div class="flex justify-between items-center">
            <h2 class="dash-page-title">
                Liste des réservations
            </h2>
        </div>
    </x-slot>

    <div class="w-full py-5 mb-10 md:mb-0">
        <div class="">
            <x-elements.table :resources="$reservations" :mattributes="$my_attributes" :mactions="$my_actions" type="reservation" />
        </div>
    </div>
</x-app-layout>

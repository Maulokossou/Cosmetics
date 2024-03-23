<x-app-layout>
    <x-slot name="contentHeading">
        <div class="flex justify-between items-center">
            <h2 class="dash-page-title">
                Liste des évenements
            </h2>
            <x-buttons.new text="Ajouter un évenement" href="{{ route('events.create') }}"></x-buttons.new>
        </div>
    </x-slot>

    <div class="w-full py-5 mb-10 md:mb-0">
        <div class="">
            <x-elements.table :resources="$events" :mattributes="$my_attributes" :mactions="$my_actions" type="event" />
        </div>
    </div>
</x-app-layout>

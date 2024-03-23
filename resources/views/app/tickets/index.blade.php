<x-app-layout>
    <x-slot name="contentHeading">
        <div class="flex justify-between items-center">
            <h2 class="dash-page-title">
                Liste des TIckets
            </h2>

        </div>
    </x-slot>


    <div class="w-full flex flex-col md:grid md:grid-cols-7 gap-5 py-5 mb-10 md:mb-0">
        <div class="md:col-span-5">
            <x-elements.table :resources="$event_tickets" :mattributes="$my_attributes" :mactions="$my_actions" type="event_ticket" />
        </div>
        <div class="md:col-span-2">
            <div class="border overflow-hidden rounded-lg shadow-xs p-2 flex flex-col gap-4 bg-white">
                <h2 class="font-bold text-gray-500 text-lg border-b border-gray-300">Créer</h2>
                <x-forms.create :fields="$my_fields" type="event_ticket" />
            </div>
        </div>
    </div>

    @slot('scripts')
        <script>
            $(document).ready(function() {
                $('.simple-select').select2();
            });
        </script>
    @endslot


</x-app-layout>



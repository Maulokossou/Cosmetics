<x-app-layout>
    <x-slot name="contentHeading">
        <h2 class="dash-page-title">
            Modifier le ticket <span class="font-bold capitalize">#{{$ticket->name}}</span>
        </h2>
    </x-slot>

    <div class="max-w-lg">
        <x-forms.edit :item="$ticket" :fields="$my_fields" type="event_ticket" />
    </div>
</x-app-layout>

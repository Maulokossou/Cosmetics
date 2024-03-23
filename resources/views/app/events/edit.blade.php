<x-app-layout>
    <x-slot name="contentHeading">
        <h2 class="dash-page-title">
            Modifier les informations</span>
        </h2>
    </x-slot>

    <div class="max-w-3xl">
        <x-forms.edit :item="$event" :fields="$my_fields" type="event" />
    </div>

    @slot('scripts')
        <script>
            CKEDITOR.replace('description', {
                    uiColor: '#CCEAEE',
                    removeButtons: 'PasteFromWord'
                });
        </script>
        
        <script src="{{ asset('assets/js/preview-file.js') }}"></script>
    @endslot
</x-app-layout>
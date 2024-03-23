<x-app-layout>
    <x-slot name="contentHeading">
        <h2 class="dash-page-title">
            Créer un nouvel évenement
        </h2>
    </x-slot>

    <div class="max-w-3xl form-container">
        <x-forms.create :fields="$my_fields" :single_page="true" type="event"  />
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
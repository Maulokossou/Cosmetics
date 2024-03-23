@props(['errors', 'display_errors' => true])

@if ($errors->any())
<div {{ $attributes }}>
    <div class="font-medium text-red-600">
        {{ __('Whoops! Erreur de validation.') }}
    </div>

    @if ($display_errors === true)
        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <p class="text-sm mt-3 text-red-600">
        Veuillez remplir les champs en respectant les règles de validation
    </p>
    
</div>
@endif
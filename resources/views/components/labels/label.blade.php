@props(['value'])

<label {{ $attributes->merge(['class' => 'block mb-2 font-medium text-gray-900']) }}>
    {!! $value !!}
</label>


{{-- <div class="block mb-4 text-sm">
    <label class="text-gray-700 dark:text-gray-400">{{$label}}</label>
</div> --}}
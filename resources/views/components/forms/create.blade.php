<div @class(['w-full p-2 overflow-hidden' ])>
    <x-errors.validation :errors="$errors" class="mb-6" :display_errors="false" />
    <form action="{{ route(Str::plural($type) . '.store') }}" method="post" enctype="multipart/form-data"  name="demoform" id="demoform" method="POST" class="dropzone">
        @csrf
        @foreach ($fields as $attr => $value)
            <div @class(['mb-6', 'form-group', 'required' => (isset($value['required']) )])>
                <?php
                    $component = 'inputs.' . $value['field'];
                ?>
                @if ($value['field'] === 'model')
                    <x-labels.label for="{{ $attr }}"
                        value=" {!! $value['title'] !!}" class="mb-1 block">
                    </x-labels.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        class="block w-full capitalize text-gray-500">
                        <option value="">Cliquer pour sélectionner</option>
                        @foreach ($value['options'] as $item)
                            <option value="{{ $item->id }}" @selected(old($attr))>{{ $item->name ?? $item->title ?? $item->fullname }}</option>
                        @endforeach
                    </x-dynamic-component>
                    @error($attr)
                        <p class="text-red-500 text-sm pl-2 pt-2">
                            {{ $message }}
                        </p>
                    @enderror
                @elseif ($value['field'] === 'select')
                    <x-labels.label for="{{ $attr }}"
                        value="{{ $value['title'] }}" class="mb-1 block">
                    </x-labels.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        class="block w-full capitalize text-gray-500">
                        <option value="">Cliquer pour sélectionner</option>
                        @foreach ($value['options'] as $key=>$value)
                            <option value="{{ $key }}" @selected(old($attr))> {{ $value }} </option>
                        @endforeach
                    </x-dynamic-component>
                    @error($attr)
                        <p class="text-red-500 text-sm pl-2 pt-2">
                            {{ $message }}
                        </p>
                    @enderror
                @elseif ($value['field'] === 'multiple-select')
                    <x-labels.label for="{{ $attr }}"
                        value="Cliquer pour sélectionner" class="mb-1 block">
                    </x-labels.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}[]"
                        class="block w-full capitalize">
                        @foreach ($value['options'] as $item)
                            <option value="{{ $item->id }}" @selected(old($attr))>
                                {{ $item->name ?? $item->title }}</option>
                        @endforeach
                    </x-dynamic-component>
                    @error($attr)
                        <p class="text-red-500 text-sm pl-2 pt-2">
                            {{ $message }}
                        </p>
                    @enderror
                @elseif ($value['field'] === 'textarea' || $value['field'] === 'richtext')
                    <x-labels.label for="{{ $attr }}" value="{{ $value['title'] }}" class="mb-1 block">
                    </x-labels.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        type="{{ $value['field'] }}" placeholder="{{ $value['placeholder'] ?? ''}}" class="block w-full">
                        {{ old($attr) }}</x-dynamic-component>
                    @error($attr)
                        <p class="text-red-500 text-sm pl-2 pt-2">
                            {{ $message }}
                        </p>
                    @enderror
                @elseif ($value['field'] === 'file')
                    <div class="input-image">
                        <x-labels.label for="{{ $attr }}" value=" {{ $value['title'] }}" class="mb-1 block">
                        </x-labels.label>
                        <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}" type="{{ $value['field'] }}"
                            class="file-input block w-full" />
                        @error($attr)
                            <p class="text-red-500 text-sm pl-2 pt-2">
                                {{ $message }}
                            </p>
                        @enderror
                        <div class="preload mt-3"></div>
                    </div>
                @elseif ($value['field'] === 'nested')
                    @livewire('nested', ['item' => $value, 'title' => $value['title'], 'attr' => $attr])
                @elseif($value['field'] === 'parent-select')
                    @livewire('forms.child-select', ['attr' => $attr, 'element' => $value])
                @elseif ($value['field'] === 'checkbox')
                    <div class="flex items-center">
                        <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}" type="{{ $value['field'] }}" />
                        <x-labels.label for="{{ $attr }}" value="{{ $value['title'] }}" class="ml-3">
                        </x-labels.label>
                    </div>
                @elseif ($value['field'] === 'number')
                    <x-labels.label for="{{ $attr }}" value="{{ $value['title'] }}" class="mb-1 block">
                    </x-labels.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        type="{{ $value['field'] }}" placeholder="{{ $value['placeholder'] ?? '' }}"
                        value="{{ old($attr) }}" step="{{ $value['step'] ?? 1 }}" />
                    @error($attr)
                        <p class="text-red-500 text-sm pl-2 pt-2">
                            {{ $message }}
                        </p>
                    @enderror
                @else
                    <x-labels.label for="{{ $attr }}" value="{{ $value['title'] }}" class="mb-1 block">
                    </x-labels.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        type="{{ $value['field'] }}" placeholder="{{ $value['placeholder'] ?? '' }}"
                        value="{{ old($attr) }}" />
                    @error($attr)
                        <p class="text-red-500 text-sm pl-2 pt-2">
                            {{ $message }}
                        </p>
                    @enderror
                @endif
            </div>
        @endforeach

        <x-buttons.button type="submit" text="Enregistrer" />
    </form>
</div>
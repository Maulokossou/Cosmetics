<div class="w-full overflow-hidden dark:border-gray-700 form-container">
    <x-errors.validation :errors="$errors" class="mb-6" :displat_errors="false" />
    <form action="{{ route(Str::plural($type) . '.update', [$type => $item]) }}" method="POST"
        enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @foreach ($fields as $attr => $value)
            <div @class(['mb-6', 'form-group', 'required' => isset($value['required_on_edit']) ])>
                <?php
                    $component = 'inputs.' . $value['field'];
                    $fill = $item->{$attr};
                ?>
                @if ($value['field'] === 'model')
                    <x-labels.label for="{{ $attr }}" value=" {{ $value['title'] }}"
                        class="mb-1 block">
                    </x-labels.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        class="block w-full capitalize text-gray-500">
                        <option value="">Sélectionner {{ Str::lower($value['title']) }}</option>
                        @foreach ($value['options'] as $data)
                            <option value="{{ $data->id }}" @selected(old($attr) ?? $fill->id === $data->id)>
                                {{ $data->name ?? $data->title ?? $data->fullname }}</option>
                        @endforeach
                    </x-dynamic-component>
                    @error($attr)
                        <p class="text-red-500 text-sm pl-2 pt-2">
                            {{ $message }}
                        </p>
                    @enderror 
                @elseif ($value['field'] === 'select')
                    <x-labels.label for="{{ $attr }}" value=" {{ $value['title'] }}"
                        class="mb-1 block">
                    </x-labels.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        class="block w-full capitalize text-gray-500">
                        <option value="">Sélectionner</option>
                        @foreach ($value['options'] as $key => $value)
                            <option value="{{ $key }}" @selected(old($attr) ? old($attr) === $key : ($fill == $key) )> {{ $value }}
                            </option>
                        @endforeach
                    </x-dynamic-component>
                    @error($attr)
                        <p class="text-red-500 text-sm pl-2 pt-2">
                            {{ $message }}
                        </p>
                    @enderror
                @elseif ($value['field'] === 'multiple-select')
                    <x-labels.label for="{{ $attr }}" value="Choix {{ $value['title'] }}"
                        class="mb-1 block">
                    </x-labels.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}[]"
                        class="block w-full capitalize">
                        @foreach ($value['options'] as $data)
                            <option value="{{ $data->id }}" @selected(old($attr) ?? $fill->id === $data->id)>
                                {{ $data->name ?? $data->title }}</option>
                        @endforeach
                    </x-dynamic-component>
                    @error($attr)
                        <p class="text-red-500 text-sm pl-2 pt-2">
                            {{ $message }}
                        </p>
                    @enderror
                @elseif ($value['field'] === 'textarea' || $value['field'] === 'richtext')
                    <x-labels.label for="{{ $attr }}"
                        value="{{ $value['title'] }}" class="mb-1 block">
                    </x-labels.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        type="{{ $value['field'] }}" placeholder="{{ $value['title'] }}" class="block w-full">
                        {{ old($attr) ?? $fill }}</x-dynamic-component>
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
                    @livewire('nested', ['item' => $value, 'title' => $value['title'], 'attr' => $attr, 'model' => $item])
                @elseif($value['field'] === 'parent-select')
                    @livewire('forms.child-select', ['attr' => $attr, 'element' => $value, 'action' => 'edit', 'edit_elt' => $item])
                @elseif ($value['field'] === 'checkbox')
                    <div class="flex items-center">
                        <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}" type="{{ $value['field'] }}" />
                        <x-labels.label for="{{ $attr }}" value="{{ $value['title'] }}" class="ml-3">
                        </x-labels.label>
                    </div>
                @else
                    <x-labels.label for="{{ $attr }}" value="{{ $value['title'] }}" class="mb-1 block">
                    </x-labels.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        type="{{ $value['field'] }}" placeholder="{{ $value['placeholder'] ?? '' }}"
                        class="" value="{{ old($attr) ?? $fill }}" />
                    @error($attr)
                        <p class="text-red-500 text-sm pl-2 pt-2">
                            {{ $message }}
                        </p>
                    @enderror
                @endif

            </div>
        @endforeach
        <x-buttons.button type="submit" text="Modifier" />
    </form>
</div>

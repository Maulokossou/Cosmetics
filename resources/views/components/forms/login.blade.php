<form method="POST" action="{{route('login')}}">
    @csrf

    <div class="form-group block mb-6 required">
        <x-labels.label value="Email de connexion" for="email" />
        <x-inputs.email id="email" type="text" name="email" class="block w-full"
            placeholder="Email de connexion" value="{{ old('email') ?? '' }}"/>
        @error('email')
            <p class="text-red-500 text-sm pl-2 pt-2">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="form-group block mb-6 required">
        <x-labels.label value="Mot de passe" for="password" />
        <x-inputs.text id="password" type="password" name="password" class="block w-full" label="Password"
            placeholder="Mot de passe" />
        @error('password')
            <p class="text-red-500 text-sm pl-2 pt-2">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="block mb-6 ">
        <x-inputs.checkbox id="remember" />
        <x-labels.label value="Rester connecté" for="remember" class="inline ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 mb-0" />
    </div>

    <!-- You should use a button here, as the anchor is only used for the example  -->
    <x-buttons.button :text="__('Se connecter')" type="submit" />
</form>
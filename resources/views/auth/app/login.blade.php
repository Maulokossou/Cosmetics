<x-app-layout :auth=true>
    <div class="w-full">
        <h1 class="mb-6 text-xl font-semibold text-gray-700 border-b border-gray-300">
            Connexion
        </h1>
        
        
        <x-errors.validation :errors="$errors" class="mb-6" :display_errors=false/>

        <x-forms.login />  

        <hr class="my-8">

        <p class="mt-4">
            <a class="text-sm font-medium text-main hover:underline"
                href="./forgot-password.html">
                Oubli du mot de passe?
            </a>
        </p>
    </div>
</x-app-layout>
<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0">
    <div class="py-4 text-gray-500 ">
        <a href="" class="flex justify-center h-24">
            <x-elements.logo />
        </a>
        <x-navigation.dashboard.menu></x-navigation.dashboard.menu>
        <div class="px-6 my-6">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type:submit class="btn-main">
                    Se deconnecter
                    {{-- <span class="ml-2" aria-hidden="true">+</span> --}}
                </button>
            </form>
        </div>
    </div>
</aside>

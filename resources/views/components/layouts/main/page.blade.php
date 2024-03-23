{{-- Extends base layout. Layout for main pages with header, banner, footer --}}
<x-main-layout>

    <x-slot name="title">
        {{ $title ?? env('APP_NAME') }}
    </x-slot>

    <x-slot name="styles">
        {{$styles ?? ""}}
    </x-slot>

    <div class="backdrop"></div>
    <a class="backtop fas fa-arrow-up" href="#"></a>

    <x-partials.main.header/>
    <x-navigation.main.desktop />
    <x-navigation.main.mobile></x-navigation.main.mobile>
    <x-navigation.main.mobile-nav></x-navigation.main.mobile-nav>

    {{$slot}}

    <!--=====================================
        NEWSLETTER PART START
    =======================================-->
    <x-sections.newsletter/>
    <!--=====================================
                NEWSLETTER PART END
    =======================================-->


    <!--=====================================
                    FOOTER PART START
    =======================================-->
    <footer class="footer-part">
        <x-partials.main.footer></x-partials.main.footer>
    </footer>
    <!--=====================================
                    FOOTER PART END
    =======================================-->
    @slot('scripts')
        {{ $scripts ?? '' }}
    @endslot
</x-main-layout>
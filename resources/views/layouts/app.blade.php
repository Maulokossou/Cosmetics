<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="data()">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? "Dashboard" }}</title>
    
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Scripts -->
    <script src="{{ asset('assets/js/init-alpine.js') }}"></script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    @vite('resources/css/app.css')
@vite('resources/js/app.js')

</head>

<body>
    @if ($auth === true)
    <div class="flex items-center min-h-screen p-6 bg-gray-50 ">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl ">
            <div class="md:flex overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="w-full h-full align-middle bg-slate-300 object-cover"
                        src="{{ asset('assets/images/image2.jpeg') }}" alt="Office">
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 w-full md:w-1/2">
                    <div class="w-full">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="flex h-screen bg-gray-50  " :class="{ 'overflow-hidden': isSideMenuOpen }">
        <x-navigation.dashboard.desktop />
        <x-navigation.dashboard.mobile />

        <div class="flex flex-col flex-1 w-full">
            <x-partials.dashboard.header />
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto">
                    {{ $contentHeading ?? '' }}

                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
    @endif

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- SELECT 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- DATATABLES ASSETS --}}

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/r-2.3.0/datatables.min.js"></script>


    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    @include('sweetalert::alert')


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    {{ $scripts ?? '' }}
    
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>

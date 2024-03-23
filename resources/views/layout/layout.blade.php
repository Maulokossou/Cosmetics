@vite('resources/css/app.css')
@vite('resources/js/app.js')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Val Beauté</title>
</head>

<body>
    <!-- Main navigation container -->
    <nav class="relative flex w-full flex-nowrap items-center justify-between bg-zinc-50 py-8 shadow-dark-mild lg:flex-wrap lg:justify-start lg:py-4"
        data-twe-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <div class="ms-2 h-14 w-40">
                <a class="text-xl text-black h-full w-full" href="/">
                    <img src="{{ asset('assets/images/image1-preview.png') }}" alt="" class="w-full h-full">
                </a>
            </div>
            <!-- Hamburger button for mobile view -->
            <button
                class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
                type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent3"
                aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Hamburger icon -->
                <span class="[&>svg]:w-7 [&>svg]:stroke-black/50">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <!-- Collapsible navbar container -->
            <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
                id="navbarSupportedContent3" data-twe-collapse-item>
                <!-- Left links -->
                <ul class="list-style-none ms-auto flex flex-col ps-0 lg:mt-1 lg:flex-row" data-twe-navbar-nav-ref>
                    <!-- Home link -->
                    <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref>
                        <a class="text-black lg:px-2" aria-current="page" href="{{ route("guest.index") }}"
                            data-twe-nav-link-ref>Accueil</a>
                    </li>
                    <!-- Features link -->
                    <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0" data-twe-nav-item-ref>
                        <a class="p-0 text-black transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2"
                            href="{{ route('guest.service') }}" data-twe-nav-link-ref>Nos Services</a>
                    </li>
                    {{-- <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0" data-twe-nav-item-ref>
                        <a class="p-0 text-black transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2"
                            href="#" data-twe-nav-link-ref>Animations</a>
                    </li> --}}
                    {{-- <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0" data-twe-nav-item-ref>
                        <a class="p-0 text-black transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2"
                            href="#" data-twe-nav-link-ref>Musique</a>
                    </li> --}}
                    <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0" data-twe-nav-item-ref>
                        <a class="p-0 text-black transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2"
                            href="{{ route('guest.events.index') }}" data-twe-nav-link-ref>Évènements</a>
                    </li>
                    <!-- Pricing link -->
                    <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0" data-twe-nav-item-ref>
                        <a class="p-0 text-black transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2"
                            href="{{ route('guest.contact') }}" data-twe-nav-link-ref>Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!--Footer container-->
    <!-- Footer container -->
    <footer
        class="flex flex-col items-center text-white bg-primary-two text-center lg:text-left">
        <!-- Main container div: holds the entire content of the footer, including four sections (TW Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
        <div class="mx-6 py-10 text-center md:text-left">
            <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <!-- TW Elements section -->
                <div class="">
                    <h6 class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">
                        <a class="text-xl text-black h-full w-full" href="/">
                            <img src="{{ asset('assets/images/image1-preview.png') }}" alt="" class="w-full h-full">
                        </a>
                    </h6>
                    <p>
                        Explorez notre collection de cosmétiques pour sublimer votre beauté naturelle. Des produits de qualité
                    pour vous mettre en valeur.
                    </p>
                </div>
                <!-- Products section -->
                <div class="">
                    <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                        Produits
                    </h6>
                    <p class="mb-4">
                        <a href="#!">Maquillage</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!">Soins de la peau</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!">Parfum</a>
                    </p>
                    <p>
                        <a href="#!">Accessoires</a>
                    </p>
                </div>
                <!-- Useful links section -->
                <div class="">
                    <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                        SERVICES
                    </h6>
                    <p class="mb-4">
                        <a href="#!">Livraison et retour</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!">Programme de fidélité</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!">Blog de beauté</a>
                    </p>
                    <p>
                        <a href="#!">FAQ</a>
                    </p>
                </div>
                <!-- Contact section -->
                <div class="">
                    <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                        Contact
                    </h6>
                    <p class="mb-4 flex items-center justify-center md:justify-start">
                        <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                                <path
                                    d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                            </svg>
                        </span>
                        Cotonou, NY 10012, Bénin
                    </p>
                    <p class="mb-4 flex items-center justify-center md:justify-start">
                        <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                <path
                                    d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                            </svg>
                        </span>
                        val@beauté.com
                    </p>
                    <p class="mb-4 flex items-center justify-center md:justify-start">
                        <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        +229 97 00 00 00
                    </p>
                    <p class="flex items-center justify-center md:justify-start">
                        <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        +229 97 00 00 00
                    </p>
                </div>
            </div>
        </div>


        <!-- Copyright section -->
        <div class="w-full bg-primary-one text-white p-4 text-center">
            © 2024 Copyright:
            <a href="https://tw-elements.com/">Made by BIGMA-Agence de Com</a>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @include('sweetalert::alert')

</body>

</html>

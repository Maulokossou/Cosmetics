@extends('layout.layout')
@section('content')
    <!-- Hero section with background image, heading, subheading and button -->
    <div class="relative h-[330px] overflow-hidden" style="" id="header">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-primary-two/30 bg-fixed">
            <div class="flex h-full items-center justify-center">
                <div class="px-6 text-center text-black/60 md:px-12">
                    <h1 class="mb-6 text-5xl font-bold">Évènements</h1>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-6 text-5xl font-bold text-center p-6">Nos Évènements</h1>
    <div class="grid-cols-1 sm:grid md:grid-cols-4 p-6">
        <div class="block rounded-lg overflow-hidden bg-white shadow-secondary-1 dark:bg-surface-dark " data-aos="zoom-in"
            data-aos-duration="1500" style="height: 400px">
            <div class="relative h-1/2 overflow-hidden border-b-2 bg-cover bg-no-repeat" data-twe-ripple-init
                data-twe-ripple-color="light">
                <img class="rounded-t-lg h-full w-full" src="{{ asset('assets/images/event1.jpeg') }}" alt="" />
                <a href="#!">
                    <div
                        class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                    </div>
                </a>
            </div>
            <div class="flex justify-center items-center p-2 pt-2 text-surface dark:text-white h-1/2" style="">
                <div class="px-3">
                    <p>Nov <br> 03 </p>
                </div>
                <div>
                    <h5 class="mb-2 text-xl font-bold leading-tight">Je suis photogénique</h5>
                    <p class="mb-4 text-base line-clamp-3">
                        Le Concours de beauté féminine « JE SUIS PHOTOGENIQUE » vise la valorisation de la beauté naturelle
                        de
                        la femme africaine, précisément celle béninoise.L’idée qui précède ce projet est surtout
                        l’autonomisation des femmes dans la société béninoise, la promotion et la valorisation de la culture
                        béninoise car l’une des valeurs que doit sauvegarder la femme dans le monde d’aujourd’hui est sa
                        contribution à son évolution. Pour la promotrice de ce projet, une femme qui n’a pas honte de ce
                        qu’elle
                        est et qui de surcroît a une existence économique est photogénique. Belle à regarder, toutes les
                        autres
                        femmes voudront marcher dans ses pas. Les hommes la respecteront et sa dignité de femme la
                        démarquera de
                        bien d’autres.
                    </p>
                    <button type="button"
                        class="inline-block rounded bg-primary-two px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out focus:outline-none focus:ring-0 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <a href="{{ route('eventdescription') }}">Voir plus</a>
                    </button>
                </div>
            </div>

            {{-- <div class="mb-6 block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 lg:mb-0"
                data-te-ripple-init data-te-ripple-color="light">
                <div class="relative overflow-hidden bg-cover bg-no-repeat">
                    <img src="{{ asset('assets/images/event1.jpeg') }}" class="w-full rounded-t-lg" />
                    <a href="#!">
                        <div
                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,0.2)]">
                        </div>
                    </a>
                    <svg class="absolute left-0 bottom-0 text-white dark:text-neutral-700"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="currentColor"
                            d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                        </path>
                    </svg>
                </div>
                <div class="p-4 text-surface dark:text-white">
                    <h5 class="mb-2 text-xl font-bold leading-tight">Je suis photogénique</h5>
                    <h6 class="mb-2 text-md underline font-bold leading-tight">Description:</h6>
                    <p class="mb-4 text-base line-clamp-3">
                        Le Concours de beauté féminine « JE SUIS PHOTOGENIQUE » vise la valorisation de la beauté naturelle de
                        la femme africaine, précisément celle béninoise.L’idée qui précède ce projet est surtout
                        l’autonomisation des femmes dans la société béninoise, la promotion et la valorisation de la culture
                        béninoise car l’une des valeurs que doit sauvegarder la femme dans le monde d’aujourd’hui est sa
                        contribution à son évolution. Pour la promotrice de ce projet, une femme qui n’a pas honte de ce qu’elle
                        est et qui de surcroît a une existence économique est photogénique. Belle à regarder, toutes les autres
                        femmes voudront marcher dans ses pas. Les hommes la respecteront et sa dignité de femme la démarquera de
                        bien d’autres.
                    </p>
                    <button type="button"
                        class="inline-block rounded bg-primary-two px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out focus:outline-none focus:ring-0 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <a href="{{ route('eventdescription') }}">Voir plus</a>
                    </button>
                </div>
            </div> --}}
        </div>
    </div>


    <style>
        #header {
            background-image: url('assets/images/pana.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
@endsection

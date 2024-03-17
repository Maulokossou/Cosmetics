@extends('layout.layout')
@section('content')
    <div class="relative h-[350px] bg-cover bg-center bg-no-repeat"
        style="background-image: url('assets/images/amico.png');">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-primary-two/30 bg-fixed">
            <div class="flex h-full items-center ">
                <div class="px-6 text-black/60 md:px-12" >
                    <h1 class="mb-6 text-5xl font-bold" data-aos="zoom-in" data-aos-duration="1000">Val Beauté</h1>
                    <p class="mb-6" data-aos="zoom-in" data-aos-duration="1500">Explorez notre collection de cosmétiques pour sublimer votre beauté naturelle. Des <br>
                        produits de qualité
                        pour vous mettre en valeur.</p>
                    <button type="button"
                    data-aos="zoom-in" data-aos-duration="2000" class="inline-block bg-black/60 text-black/60 rounded border border-black/60 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 "
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <a href="{{ route('contact') }}" class="text-white">Nous contacter</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <x-valeur></x-valeur>

    <x-objectif></x-objectif>

    <x-partenaire></x-partenaire>

@endsection

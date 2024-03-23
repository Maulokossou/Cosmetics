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
<div class="grid-cols-1 sm:grid md:grid-cols-4 p-6 gap-8">
    @forelse ($events as $event)
    <div class="block rounded-lg overflow-hidden bg-white shadow-secondary-1 " data-aos="zoom-in"
         data-aos-duration="1500">
        <div class="relative h-1/2 overflow-hidden border-b-2 bg-cover bg-no-repeat" data-twe-ripple-init
             data-twe-ripple-color="light">
            <img class="rounded-t-lg h-full w-full" src="{{ url('storage/' . $event->cover_img ) }}" alt="" />
            <a href="#!">
                <div
                     class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                </div>
            </a>
        </div>
        <div class="flex justify-center items-center p-2 pt-2 text-surface h-1/2" style="">
            <div class=" m-4">
                <h5 class="mb-2 text-xl font-bold leading-tight">{{ $event->title }}</h5>
                <p class="mb-4 text-base line-clamp-3">
                   {{ $event->summary }}
                </p>
                <div class="flex items-center gap-4 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>    
                  <p>{{ $event->fmt_date }}</p>
                </div>              
                <a href="{{ route('guest.events.show', ['slug' => $event->slug]) }}"
                        class="block rounded bg-primary-two px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out focus:outline-none focus:ring-0 text-center"
                        data-twe-ripple-init data-twe-ripple-color="light">Voir plus
                </a>
            </div>
        </div>
    </div>
    @empty
    <p>Aucun évenement n'a été ajouté</p>
    @endforelse

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
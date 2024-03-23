@extends('layout.layout')
@section('content')
<div class="container my-24 mx-auto md:px-6 xl:px-32">

    <div class="mb-12 grid items-center gap-x-6 md:grid-cols-2 xl:gap-x-12">
        <div class="mb-6 md:mb-0">
            <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat" data-te-ripple-init
                 data-te-ripple-color="light" style="height: ;">
                <img src="{{ url('storage/' . $event->cover_img ) }}" class="w-full h-full" alt="" style="" />
                <a href="#!">
                    <div
                         class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                    </div>
                </a>
            </div>
        </div>

        <div>
            <h3 class="mb-3 text-2xl font-bold">{{ $event->title }}</h3>

            <p class="mb-2 text-neutral-500">
                <a href="#!" class="text-primary-one">{{ $event->fmt_date }}</a> <br>
            </p>
            <p class="mb-2 text-neutral-500">
                <a href="#!" class="text-primary-one">{{ $event->location }}</a>
            </p>
            <article class="text-neutral-500 prose">
                {!! $event->description !!}
            </article>
        </div>
    </div>
    <div class="grid-cols-1 sm:grid md:grid-cols-3 p-6">
        @forelse ($event->tickets as $ticket)
        <div
             class="block w-full max-w-[18rem] border border-primary-one p-2 rounded-lg bg-white text-surface shadow-secondary-1">
            <ul class="w-full">
                <li
                    class="w-full border-neutral-100 text-3xl font-bold text-center text-primary-one 100 border-opacity-100 px-4 py-3 ">
                    {{ $ticket->name }}
                </li>
                <li class="w-full border-neutral-100 text-center border-opacity-100 px-4 py-3 ">
                    {{ $ticket->description }}
                </li>
                <li
                    class="w-full text-primary-one font-bold border-neutral-100 text-center  border-opacity-100 px-4 py-3">
                    {{ getFormattedPrice($ticket->price) }} FCFA
                </li>
            </ul>
            <a href="{{ route('guest.event.customer', ['slug' => $event->slug, 'ticket' => $ticket->id ]) }}" class="rounded-lg flex justify-center items-center border-neutral-100 text-center bg-primary-one text-white p-4">
                Réserver
            </a>
        </div>

        @empty
        <div class="col-span-3 flex items-center gap-4 card bg-green-700 p-4 shadow-md rounded-lg w-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
            </svg>
            <p class=" text-white">Aucun ticket disponible</p>
        </div>
        @endforelse
    </div>

</div>
@endsection
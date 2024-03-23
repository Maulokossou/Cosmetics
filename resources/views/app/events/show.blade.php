<x-app-layout>

    @slot('title')
    {{ $event->title }}
    @endslot

    <x-slot name="contentHeading">
        <div class="flex justify-between items-center">
            <h2 class="dash-page-title text-center">
                {{ $event->title }}
            </h2>
        </div>
    </x-slot>

    <hr>

    <section class="relative py-16">
        <div class="container">
            <div class="">
                <div class=" mx-auto">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-700">
                        <img src="{{ url('storage/' . $event->cover_img ) }}" alt="Image Post {{ $event->title }}"
                             class="w-full rounded-xl">

                        <div class="my-6 px-4">
                            <p class="my-4"><span class="font-bold">Date :</span> {{ $event->fmt_date }}</p>
                            <p class="my-4"><span class="font-bold">Heure :</span> {{ $event->time }}</p>
                            <p class="my-4"><span class="font-bold">Localisation :</span> {{ $event->location }}</p>
                        </div>

                        <article class="prose md:prose-lg mt-6 text-justify max-w-full">
                            {!! $event->description !!}
                        </article>

                        <div class="grid-cols-1 sm:grid md:grid-cols-3 p-6">
                            @forelse ($event->tickets as $ticket)
                            <div
                                 class="block w-full max-w-[18rem] border border-primary-one p-2 rounded-lg bg-white text-surface shadow-secondary-1">
                                <ul class="w-full">
                                    <li
                                        class="w-full border-neutral-100 text-3xl font-bold text-center text-primary-one 100 border-opacity-100 px-4 py-3 ">
                                        {{ $ticket->name }}
                                    </li>
                                    <li
                                        class="w-full text-primary-one font-bold border-neutral-100 text-center  border-opacity-100 px-4 py-3 ">
                                        {{ getFormattedPrice($ticket->price) }} FCFA
                                    </li>
                                    <li class="text-center mb-4">
                                        {{ $ticket->description }}
                                    </li>
                                </ul>
                                <div
                                     class="rounded-lg flex justify-center items-center border-neutral-100 text-center bg-zinc-50 p-4">
                                     {{ $ticket->num_left }} disponibles
                                </div>
                            </div>
                            @empty
                            <p>Aucun ticket n'a été crée</p>
                            @endforelse

                        </div>
                    </div>

                    <div class="mt-12 flex flex-col md:flex-row items-center justify-between">
                        <a class="btn-main text-lg font-semibold px-5 my-8 md:my-0 flex items-center md:items-stretch justify-between"
                           href="{{ route('events.edit', ['event' => $event]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                 class="h-6 w-6 mr-3 bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                      d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                            <span>Modifier cet evenement</span>
                        </a>
                        {{-- <form action="{{ route('events.destroy', ['event' => $event]) }}" method="post"
                              onsubmit="event.preventDefault(); deleteConfirmation(this)">
                            @csrf
                            <button class="btn-danger text-lg font-semibold px-5 flex items-center justify-between">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                     class="w-6 h-6 mr-3 bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                          d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                                <span>Supprimer ce évenement</span>
                            </button>
                        </form> --}}
                    </div>

                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>

</x-app-layout>
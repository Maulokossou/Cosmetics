@extends('layout.layout')
@section('content')
    <div class="container my-24 mx-auto md:px-6 xl:px-32">

        <div class="mb-12 grid items-center gap-x-6 md:grid-cols-2 xl:gap-x-12">
            <div class="mb-6 md:mb-0">
                <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat"
                    data-te-ripple-init data-te-ripple-color="light" style="height: ;">
                    <img src="{{ asset('assets/images/event1.jpeg') }}" class="w-full h-full" alt="" style="" />
                    <a href="#!">
                        <div
                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                        </div>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="mb-3 text-2xl font-bold">Je suis photogénique</h3>

                <p class="mb-2 text-neutral-500">
                    <a href="#!" class="text-primary-one">29 & 30 Mars, 2024</a> <br>
                </p>
                <p class="mb-2 text-neutral-500">
                    <a href="#!" class="text-primary-one">Place de l'Amazone, Cadjèhoun, Cotonou</a>
                </p>
                <p class="text-neutral-500">
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
            </div>
        </div>
        <div class="grid-cols-1 sm:grid md:grid-cols-3 p-6">
            <div
                class="block w-full max-w-[18rem] border border-primary-one p-2 rounded-lg bg-white text-surface shadow-secondary-1">
                <ul class="w-full">
                    <li
                        class="w-full border-neutral-100 text-3xl font-bold text-center text-primary-one 100 border-opacity-100 px-4 py-3 ">
                        Packet <br> VIP
                    </li>
                    <li class="w-full border-neutral-100 text-center border-opacity-100 px-4 py-3 ">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, odio quod vitae adipisci corrupti
                        aliquid nihil nulla cupiditate rerum minima. Aliquam placeat non perspiciatis expedita omnis
                        praesentium et, in molestias?
                    </li>
                    <li
                        class="w-full text-primary-one font-bold border-neutral-100 text-center  border-opacity-100 px-4 py-3 ">
                        30.000
                    </li>
                </ul>
                <div
                    class="rounded-lg flex justify-center items-center border-neutral-100 text-center bg-zinc-50 p-4">
                    <div><button class="border-2 rounded-md p-2 px-4 mx-2">-</button></div>
                    <div class="mx-2">
                        <p>0</p>
                    </div>
                    <div><button class="border-2 rounded-md p-2 px-4 mx-2">+</button></div>
                </div>
            </div>
            <div
                class="block w-full max-w-[18rem] border border-primary-one p-2 rounded-lg bg-white text-surface shadow-secondary-1">
                <ul class="w-full">
                    <li
                        class="w-full border-neutral-100 text-3xl font-bold text-center text-primary-one 100 border-opacity-100 px-4 py-3 ">
                        Packet Intermédiaire
                    </li>
                    <li class="w-full border-neutral-100 text-center border-opacity-100 px-4 py-3 ">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, odio quod vitae adipisci corrupti
                        aliquid nihil nulla cupiditate rerum minima. Aliquam placeat non perspiciatis expedita omnis
                        praesentium
                        et, in molestias?
                    </li>
                    <li
                        class="w-full text-primary-one font-bold border-neutral-100 text-center  border-opacity-100 px-4 py-3 ">
                        15000
                    </li>
                </ul>
                <div
                    class="rounded-lg flex justify-center items-center border-neutral-100 text-center bg-zinc-50 p-4">
                    <div><button class="border-2 rounded-md p-2 px-4 mx-2">-</button></div>
                    <div class="mx-2">
                        <p>0</p>
                    </div>
                    <div><button class="border-2 rounded-md p-2 px-4 mx-2">+</button></div>
                </div>
            </div>
            <div
                class="block w-full max-w-[18rem] border border-primary-one p-2 rounded-lg bg-white text-surface shadow-secondary-1">
                <ul class="w-full">
                    <li
                        class="w-full border-neutral-100 text-3xl font-bold text-center text-primary-one 100 border-opacity-100 px-4 py-3 ">
                        Packet <br> Simple
                    </li>
                    <li class="w-full border-neutral-100 text-center border-opacity-100 px-4 py-3 ">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, odio quod vitae adipisci corrupti
                        aliquid nihil nulla cupiditate rerum minima. Aliquam placeat non perspiciatis expedita omnis
                        praesentium
                        et, in molestias?
                    </li>
                    <li
                        class="w-full text-primary-one font-bold border-neutral-100 text-center  border-opacity-100 px-4 py-3 ">
                        5000
                    </li>
                </ul>
                <div
                    class="rounded-lg flex justify-center items-center border-neutral-100 text-center bg-zinc-50 p-4">
                    <div><button class="border-2 rounded-md p-2 px-4 mx-2">-</button></div>
                    <div class="mx-2">
                        <p>0</p>
                    </div>
                    <div><button class="border-2 rounded-md p-2 px-4 mx-2">+</button></div>
                </div>
            </div>
        </div>

    </div>
@endsection

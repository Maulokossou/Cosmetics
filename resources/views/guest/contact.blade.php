@extends('layout.layout')
@section('content')
    <div class="relative h-[350px] mb-2  bg-cover bg-[50%] bg-no-repeat"
        style="background-image: url('assets/images/page.png'); backgound-position:center;">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-primary-two/30 bg-fixed">
            <div class="flex h-full items-center justify-center">
                <div class="px-6 text-center text-black/60 md:px-12">
                    <p class="mb-2 text-3xl">Oups!!!</p>
                    <p class="mb-6 text-3xl ">Cette page est en cours de développement</p>
                </div>
            </div>
        </div>
    </div>
@endsection

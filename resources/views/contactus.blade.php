@extends('layouts.template')

@section('content')
<section class="bg-white py-16">

    <div class="container max-w-screen-xl mx-auto px-4">

        <div class="w-full h-full bg-blue-500 rounded-2xl md:rounded-3xl relative lg:flex items-center">
            <div class="hidden lg:block">
                <img src="{{ asset('image/images-removebg-preview.png') }}" alt="Image" class="relative z-10">

                {{-- <img src="{{ asset('image/pattern-2.png') }}" alt="Image" class="absolute top-14 left-40"> --}}

                {{-- <img src="{{ asset('image/pattern.png') }}" alt="Image" class="absolute top-0 z-0"> --}}
            </div>

            <div class="lg:relative py-4 lg:py-0">
                <h1 class="font-semibold text-white text-xl md:text-4xl text-center lg:text-left leading-normal md:mb-5 lg:mb-10">Interested in our hotel? Book <br> now</h1>

                <div class="hidden md:block flex items-center text-center lg:text-left space-x-5">
                    <input type="text" placeholder="Email" class="px-4 py-4 w-96 bg-gray-50 placeholder-gray-400 rounded-xl outline-none">

                    <button class="px-6 py-4 font-semibold bg-gray-50 text-info text-lg rounded-xl hover:bg-blue-500 hover:text-white transition ease-in-out duration-500">Book</button>
                </div>
            </div>
        </div>

    </div> <!-- container.// -->

</section>
@endsection
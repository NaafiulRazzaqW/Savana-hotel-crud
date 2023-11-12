@extends('layouts.template')

@section('home')
    <!-- container.// -->

    {{-- <section>
        <img src="{{ asset('image/savana-hotel.jpg') }}" style="z-index: -99" class="mt-[1000px] p-3 absolute top-20 left-0 w-screen h-screen" alt="">
        <div class="flex flex-col lg:flex-row justify-between space-x-20 bg-local bg-image-home " style="">
            <div class="text-center lg:text-left mt-40">
                <h1 class="font-semibold text-white text-3xl md:text-6xl leading-normal mb-6 font-serif">SAVANA HOTEL<br>
                    Luxurious Stay</h1>
    
                <p class="font-light text-white text-md md:text-lg leading-normal mb-12">WELCOME TO SAVANA<br> Where Luxury And Comfort Meets</p>
    
                <button
                    class="px-6 py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-700 transition ease-in-out duration-500"><a href="/stay">Book Now</a></button>
            </div>
    
            
        </div>
    </section> --}}
@endsection


@section('content')
    <div class="container max-w-screen-xl mx-auto px-4">
        <section>
            <img src="{{ asset('image/savana-hotel.jpg') }}" style="z-index: -99"
                class="mt-[1000px] p-3 absolute top-20 left-0 w-screen h-screen" alt="">
            <div class="flex flex-col lg:flex-row justify-between space-x-20 bg-local bg-image-home " style="">
                <div class="text-center lg:text-left mt-40">
                    <h1 class="font-semibold text-white text-3xl md:text-6xl leading-normal mb-6 font-serif">SAVANA HOTEL<br>
                        Luxurious Stay</h1>

                    <p class="font-light text-white text-md md:text-lg leading-normal mb-12">WELCOME TO SAVANA<br> Where
                        Luxury And Comfort Meets</p>

                    <button
                        class="px-6 py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-700 transition ease-in-out duration-500"><a
                            href="/stay">Book Now</a></button>
                </div>


            </div>
        </section>
    </div>
    <section class="bg-white py-16 md:mt-10">

        <div class="container max-w-screen-xl mx-auto px-4">

            <p class="font-light text-gray-500 text-lg md:text-xl text-center uppercase mb-6">Why You Should Choose This
                Hotel?</p>

            <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center leading-normal mb-10">We Are Confident
                <br>That You Will Enjoy This Hotel</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20">
                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 py-6 flex justify-center bg-blue-200 bg-opacity-30 text-blue-700 rounded-xl">
                            <i data-feather="bookmark"></i>
                        </div>
                    </div>

                    <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Easy Booking</h4>

                    <p class="font-light text-gray-500 text-md md:text-xl mb-6">Can book rooms anywhere and anytime</p>


                </div>

                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 py-6 flex justify-center bg-blue-200 bg-opacity-30 text-blue-700 rounded-xl">
                            <i data-feather="map"></i>
                        </div>
                    </div>

                    <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Strategic Location</h4>

                    <p class="font-light text-gray-500 text-md md:text-xl mb-6">Strategic location which makes it very
                        comfortable for you to travel anywhere</p>


                </div>

                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 py-6 flex justify-center bg-blue-200 bg-opacity-30 text-blue-700 rounded-xl">
                            <i data-feather="shield"></i>
                        </div>
                    </div>

                    <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Safe Place</h4>

                    <p class="font-light text-gray-500 text-md md:text-xl mb-6">Guards and employees are ready to serve you
                        at any time</p>


                </div>
            </div>
            <div class="flex justify-center">
                <a href="/facilities"
                    class="flex items-center gap-5 px-6 py-4 font-semibold text-info text-lg rounded-xl hover:bg-info hover:text-white transition ease-linear duration-500">
                    See More Facilities
                    <i data-feather="chevron-right"></i>
                </a>
            </div>
        </div>
    </section>
@endsection

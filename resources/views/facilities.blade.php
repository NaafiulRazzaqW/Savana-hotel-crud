@extends('layouts.app')

@section('content')

<section class="bg-white py-16">
    <div class="container max-w-screen-xl mx-auto px-4">

        <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center mb-16">Our Facilities</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                <img src="{{ asset('image/gymRoom.jpg') }}" alt="Image"
                    class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Gym Room
                </h4>

                <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Equipped with several gym equipment that will help you exercise <br> Gym Room open 24 hours</p>

                

                

                
            </div>

            <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                <img src="{{ asset('image/cafeRoom.jpg') }}" alt="Image"
                    class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Cafe Room
                </h4>

                <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Providing you with a very abundant menu and satisfying views, which will make you feel comfortable when you are there</p>

                

                

                
            </div>

            <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                <img src="{{ asset('image/pool.jpg') }}" alt="Image"
                    class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Swimming pool
                </h4>

                <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">The size of the pool is large and there are several depths available, which makes you and your family feel comfortable when swimming there <br> Free Buoy</p>

                

                

                
            </div>

        </div>

        
        

    </div>
</section>
    
@endsection
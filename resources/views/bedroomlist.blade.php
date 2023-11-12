@extends('layouts.template')

@section('content')
    <section class="bg-white py-16">
        <div class="container max-w-screen-xl mx-auto px-4">

            <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center mb-16">Various rooms in our hotel</h1>
            
                
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                @foreach ($rooms as $data)
                <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                    <img src="{{ asset('image/'.$data->image) }}" alt="Image"
                        class="mb-6 hover:opacity-75 transition ease-in-out duration-500" width="400px">

                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">{{ $data->title }}
                    </h4>

                    <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">{{ $data->description }}</p>

                    <div class="flex items-center justify-between mb-8">
                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Price per Night : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">{{ $data->price }}$</span></h6>


                    </div>
                    <button
                        class="w-full py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Order
                        Now</button>
                </div>
                @endforeach
            </div>
            
        </div>
    </section>
@endsection

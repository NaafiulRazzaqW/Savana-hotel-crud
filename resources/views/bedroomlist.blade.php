@extends('layouts.app')

@section('content')
    <section class="bg-white py-16">
        <div class="container max-w-screen-xl mx-auto px-4">

            <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center mb-16">Various rooms in our hotel</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                    <img src="{{ asset('image/FamilyRoom.jpg') }}" alt="Image"
                        class="mb-6 hover:opacity-75 transition ease-in-out duration-500"
                        width="400px">

                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Double Beds <br> Room
                    </h4>

                    <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">This room is available with a breakfast package<br> the shower that can be changed from hot to cold water</p>

                    <div class="flex items-center justify-between mb-8">
                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Price per Night : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$15</span></h6>

                        
                    </div>

                    

                    <button
                        class="w-full py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Order Now</button>
                </div>

                <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                    <img src="{{ asset('image/oneBed.jpg') }}" alt="Image"
                        class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Family <br> Room
                    </h4>

                    <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Equipped with 1 large mattress and 1 mini mattress<br> the shower that can be changed from hot to cold water</p>

                    <div class="flex items-center justify-between mb-8">
                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Price per Night : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$23</span></h6>

                        
                    </div>

                    

                    <button
                        class="w-full py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Book Now</button>
                </div>

                <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                    <img src="{{ asset('image/oneBedBonusTv.jpg') }}" alt="Image"
                        class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">One Bed Include a TV <br> Room
                    </h4>

                    <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Equipped with 1 large bed with a TV in the room which provides very complete channels
                        <br> the shower that can be changed from hot to cold water</p>

                    <div class="flex items-center justify-between mb-8">
                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Price per Night : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$22</span></h6>

                        
                    </div>

                    

                    <button
                        class="w-full py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Book Now</button>
                </div>

                <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                    <img src="{{ asset('image/familyRoomWith3Beds.jpg') }}" alt="Image"
                        class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Family Room With <br>
                        3 Beds</h4>

                    <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Equipped with 3 regular sized mattresses which allow your family to sleep on separate mattresses <br> the shower that can be changed from hot to cold water</p>

                    <div class="flex items-center justify-between mb-8">
                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Price per night : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$25</span></h6>

                        
                    </div>

                    

                    <button
                        class="w-full py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Book Now</button>
                </div>

                <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                    <img src="{{ asset('image/meetingRoom.jpg') }}" alt="Image"
                        class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Meeting Room Include <br> A Projector Screen
                        </h4>

                    <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Equipped with chairs and tables that make your meetings with your clients comfortable <br>Free 10 Snack</p>

                    <div class="flex items-center justify-between mb-8">
                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Price per meet : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$45</span></h6>

                        
                    </div>

                    

                    <button
                        class="w-full py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Book Now</button>
                </div>

                
                
                

                
                

                
                

                
                
                

                
                
                

                
                
                

                
                

                
                

                
                
                
            
            
                
                
                
            

        </div>
    </section>
@endsection

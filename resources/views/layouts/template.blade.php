<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Savana Hotel</title>
        @vite('resources/css/tailwind.css')
        @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> 
    </head>

    <body class="font-body">

        <!-- home section -->
        <section class="bg-white py-10 md:mb-10">

            <div class="container max-w-screen-xl mx-auto px-4">

                <nav class="flex-wrap lg:flex items-center" x-data="{navbarOpen:false}">
                    <div class="flex items-center mb-10 lg:mb-0">
                        <img src="{{ asset('image/logo_savana2.png') }}" alt="Logo" height="20px" width="90px">

                        <button class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center border border-blue-500 text-blue-500 rounded-md" @click="navbarOpen = !navbarOpen">
                            <i data-feather="menu"></i>
                        </button>
                    </div>

                    <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:mx-auto lg:space-x-8 xl:space-x-14" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
                        <li class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                            <a href="/">Hotel</a>
                        </li>
                        <li class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                            <a href="/stay">Stay</a>
                        </li>
                        <li class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                            <a href="/facilities">Facilities</a>
                        </li>
                        <li class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                            <a href="/contactus">Contact us</a>
                        </li>
                    </ul>

                    <div class="lg:flex flex-col md:flex-row md:items-center text-center md:space-x-6" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">

                        <a href="#" class="px-6 py-4 border-2 border-blue-500 text-blue-500 font-semibold text-lg rounded-xl hover:bg-blue-700 hover:text-white transition ease-linear duration-500">Order Now</a>
                    </div>
                </nav>

                

            </div> <!-- container.// -->

        </section>
        <!-- home section //end -->
        {{-- <div class="container max-w-screen-xl mx-auto px-4">
            @yield('home')
        </div> --}}
        @yield('content')
        <!-- feature section -->
        
        <!-- feature section //end -->

        <!-- donation section -->
        
        <!-- donation section //end -->

        <!-- feature section -->
        
        <!-- feature section //end -->

        <!-- join volunters section -->
        
        <!-- join volunters section //end -->

        

        <script>
            feather.replace()
        </script>

    </body>
</html>
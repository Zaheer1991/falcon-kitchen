<x-app-layout>

    <!-- Preloader Section Start -->
    <div id="preloader" class="fixed inset-0 bg-white flex items-center justify-center z-50">
        <x-preloader />
    </div>
    <!-- Preloader Section End -->

    <!-- Main Content Section Start -->
    <div class="relative bg-white" id="main-content">
        <!-- Navbar -->
        <x-nav-link />
        
        <!-- Welcome Section -->
        <div class="relative h-screen overflow-hidden flex items-center justify-center lg:px-8">
            <img src="{{ asset('asset/images/banner/banner-image1.jpg') }}" alt="Banner"
                class="absolute inset-0 w-full h-full object-cover" />
            <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50">
                <h1 class="text-3xl sm:text-4xl font-bold text-white text-center italic">
                    Welcome to FalconProska
                </h1>
                <p class="text-lg sm:text-xl text-white text-center mt-2">
                    A market leader in the field of commercial hospitality equipment
                </p>
            </div>
        
            <!-- Card on the Left Side -->
            <div
                class="absolute left-6 top-1/2 transform -translate-y-1/2 z-10 max-w-sm bg-black text-white rounded-lg shadow-lg p-5 banner-card">
                <h2 class="text-xl font-bold">Our Mission</h2>
                <p class="mt-2">
                    At FalconProska, we strive to provide our clients with exceptional hospitality equipment and solutions. Our mission is to ensure quality and reliability in every product we offer.
                </p>
                <a href="#" class="mt-3 inline-block text-blue-400 hover:text-blue-600">Learn More</a>
            </div>
        </div>
        
        <!-- Client Section -->
        <div class="py-20 bg-gray-100">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-2xl sm:text-3xl font-bold mb-6">Our Clients</h2>
                <p class="text-gray-600 mb-8">
                    We proudly collaborate with diverse industries to deliver exceptional solutions tailored to their needs.
                </p>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8">
                    <!-- Royal Project -->
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150" alt="Royal Project" class="h-20 object-contain mb-4" />
                        <p class="text-gray-700 font-medium">Royal Project</p>
                    </div>
                    <!-- Restaurant -->
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150" alt="Restaurant" class="h-20 object-contain mb-4" />
                        <p class="text-gray-700 font-medium">Restaurant</p>
                    </div>
                    <!-- Coffee Shop -->
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150" alt="Coffee Shop" class="h-20 object-contain mb-4" />
                        <p class="text-gray-700 font-medium">Coffee Shop</p>
                    </div>
                    <!-- Hotel -->
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150" alt="Hotel" class="h-20 object-contain mb-4" />
                        <p class="text-gray-700 font-medium">Hotel</p>
                    </div>
                    <!-- Hospital -->
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150" alt="Hospital" class="h-20 object-contain mb-4" />
                        <p class="text-gray-700 font-medium">Hospital</p>
                    </div>
                    <!-- Cold Room -->
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150" alt="Cold Room" class="h-20 object-contain mb-4" />
                        <p class="text-gray-700 font-medium">Cold Room</p>
                    </div>
                    <!-- Labour Camp -->
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150" alt="Labour Camp" class="h-20 object-contain mb-4" />
                        <p class="text-gray-700 font-medium">Labour Camp</p>
                    </div>
                    <!-- Cloud Kitchen -->
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150" alt="Cloud Kitchen" class="h-20 object-contain mb-4" />
                        <p class="text-gray-700 font-medium">Cloud Kitchen</p>
                    </div>
                    <!-- Bakery -->
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150" alt="Bakery" class="h-20 object-contain mb-4" />
                        <p class="text-gray-700 font-medium">Bakery</p>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    <!-- Main Content Section End -->
</x-app-layout>
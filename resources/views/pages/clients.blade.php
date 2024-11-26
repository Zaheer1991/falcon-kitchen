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
        <div class="py-16 bg-gray-100" data-aos="fade-up">
            <h2 class="text-center py-7 text-2xl sm:text-3xl font-bold mb-6 bg-[#b7bac2]">Our Clients</h2>
            <div class="max-w-7xl mx-auto px-4 text-center">
                <p class="text-gray-600 mb-8">
                    We proudly collaborate with diverse industries to deliver exceptional solutions tailored to their needs.
                </p>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-8" data-aos="fade-left">
                    @foreach ($clients as $client)
                        <x-clients-card :image="$client['image']" :alt="$client['alt']" />
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Scroll to Top Button -->
    <x-back-top-btn />

    <!-- Whatsapp Icon -->
    <x-whatsapp-icon />

    <!-- Mobile Menu -->
    <x-mobile-menu />

    {{-- Footer Starts Here --}}
    <x-footer />
    {{-- Footer End Here --}}
    </div>
    <!-- Main Content Section End -->
</x-app-layout>
<x-app-layout>
    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 bg-white flex items-center justify-center z-50">
        <x-preloader />
    </div>

    <!-- Main Content -->
    <div class="relative bg-white" id="main-content">
        <!-- Navbar -->
        <x-nav-link />

        <!-- Hero Section -->
<section class="relative h-screen py-24 bg-gradient-to-r from-blue-600 to-indigo-600">
    <!-- Full-height Banner Image -->
    <img src="{{ asset('asset/images/banner/banner-image1.jpg') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover z-0 opacity-50" />
    <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 z-10">
        <h1 class="text-3xl sm:text-4xl font-bold text-white text-center italic">
            Welcome to FalconProska
        </h1>
        <p class="text-lg sm:text-xl text-white text-center mt-2">
            A market leader in the field of commercial hospitality equipment
        </p>
    </div>
</section>


       <!-- Products Section -->
<section id="products-section" class="py-16 px-6 lg:px-16 bg-gray-100">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-12">
            Our Products
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Product Card 1 -->
            <div class="product-card relative group overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-all duration-500 transform">
                <img src="{{ asset('asset/images/products/product1.jpg') }}" alt="Product 1" class="w-full h-64 object-cover">
                <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl font-semibold">Product 1</span>
                </div>
            </div>
            <!-- Product Card 2 -->
            <div class="product-card relative group overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-all duration-500 transform">
                <img src="{{ asset('asset/images/products/product2.jpg') }}" alt="Product 2" class="w-full h-64 object-cover">
                <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl font-semibold">Product 2</span>
                </div>
            </div>
            <!-- Product Card 3 -->
            <div class="product-card relative group overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-all duration-500 transform">
                <img src="{{ asset('asset/images/products/product3.jpg') }}" alt="Product 3" class="w-full h-64 object-cover">
                <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl font-semibold">Product 3</span>
                </div>
            </div>
            <!-- Product Card 4 -->
            <div class="product-card relative group overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-all duration-500 transform">
                <img src="{{ asset('asset/images/products/product4.jpg') }}" alt="Product 4" class="w-full h-64 object-cover">
                <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl font-semibold">Product 4</span>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Scroll to Top Button -->
    <x-back-top-btn />

    <!-- Whatsapp Icon -->
    <x-whatsapp-icon />

    <!-- Mobile Menu -->
    <x-mobile-menu />
        <!-- Footer Section -->
        <x-footer />
    </div>
</x-app-layout>

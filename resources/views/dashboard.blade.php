<x-app-layout>
    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 bg-white flex items-center justify-center z-50">
        <x-preloader />
    </div>

    <!-- Main Content -->
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
                    A market leader in the field of commercial hospitality
                    equipment
                </p>
            </div>

            <!-- Card on the Left Side -->
            <div
                class="absolute left-6 top-1/2 transform -translate-y-1/2 z-10 max-w-sm bg-black text-white rounded-lg shadow-lg p-5 banner-card">
                <h2 class="text-xl font-bold">Our Mission</h2>
                <p class="mt-2">
                    At FalconProska, we strive to provide our clients with
                    exceptional hospitality equipment and solutions. Our mission
                    is to ensure quality and reliability in every product we
                    offer.
                </p>
                <a href="#" class="mt-3 inline-block text-blue-400 hover:text-blue-600">Learn More</a>
            </div>
        </div>

        <!-- About Us Section -->
        <section class="about-section py-20 bg-gray-100">
            <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-start relative">
                <div class="about-image w-full lg:w-1/2 pr-0 lg:pr-10 mb-8 lg:mb-0 relative">
                    <img src="{{asset('asset/images/banner/banner-four-image.jpg')}}" alt="About Us Image"
                        class="rounded shadow-lg w-full h-auto">
                </div>
                <div class="about-content w-full lg:w-1/2">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-5">About Us</h2> <!-- Adjusted text size for mobile -->
                    <p class="text-base lg:text-lg mb-5 text-[#8395a7]"> <!-- Adjusted text size for mobile -->
                        Welcome to our website! We are dedicated to providing the highest quality of service and value
                        to our clients. Our team is committed to excellence and we strive to exceed your expectations.
                    </p>
                    <p class="text-base lg:text-lg text-[#8395a7]"> <!-- Adjusted text size for mobile -->
                        With years of experience in the industry, we are here to cater to your needs and ensure that you
                        have a memorable experience. Get in touch with us today to learn more about what we can do for
                        you!
                    </p>
                </div>
            </div>
        </section>


        <!-- Equipment in Stock Section -->
        <h1 class="text-center text-4xl font-bold py-10 relative bg-[#b7bac2]" data-aos="fade-up"
            data-aos-anchor-placement="top-bottom">
            Equipment In Stock
        </h1>
        <section id="equipment-stock" class="py-20 bg-gray-50 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Sample Equipment Item with Hover Animation -->
                    <div
                        class="item opacity-0 transform translate-y-10 transition-all duration-700 hover:scale-105 hover:shadow-xl">
                        <div
                            class="rounded-lg bg-white shadow-md p-5 transition duration-300 ease-in-out hover:shadow-lg">
                            <img src="{{
                                    asset(
                                        'asset/images/equipment-images/equipment-1.png'
                                    )
                                }}" alt="Equipment 1" class="w-full h-48 object-cover rounded-md mb-4" />
                            <h3 class="text-lg font-semibold">Equipment 1</h3>
                            <p class="text-gray-700">
                                Description of equipment 1 goes here. It's high
                                quality and very reliable.
                            </p>
                        </div>
                    </div>
                    <div
                        class="item opacity-0 transform translate-y-10 transition-all duration-700 hover:scale-105 hover:shadow-xl">
                        <div
                            class="rounded-lg bg-white shadow-md p-5 transition duration-300 ease-in-out hover:shadow-lg">
                            <img src="{{
                                    asset(
                                        'asset/images/equipment-images/equipment-1.png'
                                    )
                                }}" alt="Equipment 2" class="w-full h-48 object-cover rounded-md mb-4" />
                            <h3 class="text-lg font-semibold">Equipment 2</h3>
                            <p class="text-gray-700">
                                Description of equipment 2 goes here. It's high
                                quality and very reliable.
                            </p>
                        </div>
                    </div>
                    <div
                        class="item opacity-0 transform translate-y-10 transition-all duration-700 hover:scale-105 hover:shadow-xl">
                        <div
                            class="rounded-lg bg-white shadow-md p-5 transition duration-300 ease-in-out hover:shadow-lg">
                            <img src="{{
                                    asset(
                                        'asset/images/equipment-images/equipment-1.png'
                                    )
                                }}" alt="Equipment 3" class="w-full h-48 object-cover rounded-md mb-4" />
                            <h3 class="text-lg font-semibold">Equipment 3</h3>
                            <p class="text-gray-700">
                                Description of equipment 3 goes here. It's high
                                quality and very reliable.
                            </p>
                        </div>
                    </div>
                    <div
                        class="item opacity-0 transform translate-y-10 transition-all duration-700 hover:scale-105 hover:shadow-xl">
                        <div
                            class="rounded-lg bg-white shadow-md p-5 transition duration-300 ease-in-out hover:shadow-lg">
                            <img src="{{
                                    asset(
                                        'asset/images/equipment-images/equipment-1.png'
                                    )
                                }}" alt="Equipment 3" class="w-full h-48 object-cover rounded-md mb-4" />
                            <h3 class="text-lg font-semibold">Equipment 3</h3>
                            <p class="text-gray-700">
                                Description of equipment 3 goes here. It's high
                                quality and very reliable.
                            </p>
                        </div>
                    </div>
                    <div
                        class="item opacity-0 transform translate-y-10 transition-all duration-700 hover:scale-105 hover:shadow-xl">
                        <div
                            class="rounded-lg bg-white shadow-md p-5 transition duration-300 ease-in-out hover:shadow-lg">
                            <img src="{{
                                    asset(
                                        'asset/images/equipment-images/equipment-1.png'
                                    )
                                }}" alt="Equipment 3" class="w-full h-48 object-cover rounded-md mb-4" />
                            <h3 class="text-lg font-semibold">Equipment 3</h3>
                            <p class="text-gray-700">
                                Description of equipment 3 goes here. It's high
                                quality and very reliable.
                            </p>
                        </div>
                    </div>
                    <div
                        class="item opacity-0 transform translate-y-10 transition-all duration-700 hover:scale-105 hover:shadow-xl">
                        <div
                            class="rounded-lg bg-white shadow-md p-5 transition duration-300 ease-in-out hover:shadow-lg">
                            <img src="{{
                                    asset(
                                        'asset/images/equipment-images/equipment-1.png'
                                    )
                                }}" alt="Equipment 3" class="w-full h-48 object-cover rounded-md mb-4" />
                            <h3 class="text-lg font-semibold">Equipment 3</h3>
                            <p class="text-gray-700">
                                Description of equipment 3 goes here. It's high
                                quality and very reliable.
                            </p>
                        </div>
                    </div>
                    <div
                        class="item opacity-0 transform translate-y-10 transition-all duration-700 hover:scale-105 hover:shadow-xl">
                        <div
                            class="rounded-lg bg-white shadow-md p-5 transition duration-300 ease-in-out hover:shadow-lg">
                            <img src="{{
                                    asset(
                                        'asset/images/equipment-images/equipment-1.png'
                                    )
                                }}" alt="Equipment 3" class="w-full h-48 object-cover rounded-md mb-4" />
                            <h3 class="text-lg font-semibold">Equipment 3</h3>
                            <p class="text-gray-700">
                                Description of equipment 3 goes here. It's high
                                quality and very reliable.
                            </p>
                        </div>
                    </div>
                    <div
                        class="item opacity-0 transform translate-y-10 transition-all duration-700 hover:scale-105 hover:shadow-xl">
                        <div
                            class="rounded-lg bg-white shadow-md p-5 transition duration-300 ease-in-out hover:shadow-lg">
                            <img src="{{
                                    asset(
                                        'asset/images/equipment-images/equipment-1.png'
                                    )
                                }}" alt="Equipment 3" class="w-full h-48 object-cover rounded-md mb-4" />
                            <h3 class="text-lg font-semibold">Equipment 3</h3>
                            <p class="text-gray-700">
                                Description of equipment 3 goes here. It's high
                                quality and very reliable.
                            </p>
                        </div>
                    </div>
                    <div
                        class="item opacity-0 transform translate-y-10 transition-all duration-700 hover:scale-105 hover:shadow-xl">
                        <div
                            class="rounded-lg bg-white shadow-md p-5 transition duration-300 ease-in-out hover:shadow-lg">
                            <img src="{{
                                    asset(
                                        'asset/images/equipment-images/equipment-1.png'
                                    )
                                }}" alt="Equipment 3" class="w-full h-48 object-cover rounded-md mb-4" />
                            <h3 class="text-lg font-semibold">Equipment 3</h3>
                            <p class="text-gray-700">
                                Description of equipment 3 goes here. It's high
                                quality and very reliable.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand Slider Section -->

        <h1 class="text-center text-4xl font-bold py-10 relative bg-[#b7bac2]" data-aos="fade-up"
            data-aos-anchor-placement="top-bottom">
            Our Brands
        </h1>
        <section class="slider mx-auto mt-10 max-w-7xl">
            <div class="slider-track">
                <!-- Brand Logos -->
                @foreach ($logos as $logo)
                <img src="{{ asset('asset/images/brands/'.$logo.'.png') }}" alt="Brand {{ $loop->iteration }}"
                    class="slider-item h-40">
                @endforeach

        </section>

        <!-- Scroll to Top Button -->
        <x-back-top-btn />

        <!-- Whatsapp Icon -->
        <x-whatsapp-icon />

        <!-- Mobile Menu -->
        <div class="sm:hidden hidden fixed inset-0 bg-black bg-opacity-75 transition-opacity" id="mobile-menu">
            <div class="flex flex-col items-center px-2 pt-20 pb-3 space-y-1">
                <a href="{{ route('dashboard') }}"
                    class="block w-full text-center px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-300">Dashboard</a>
                <a href="#"
                    class="block w-full text-center px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-300">Projects</a>
                <a href="#"
                    class="block w-full text-center px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-300">Tasks</a>
                <a href="#"
                    class="block w-full text-center px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-300">Calendar</a>
                <a href="#"
                    class="block w-full text-center px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-300">Reports</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="block w-full text-center px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-300">
                        <svg class="h-5 w-5 inline-block mr-2 text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M16.707 7.707a1 1 0 01-1.414 0L12 4.414V15a1 1 0 11-2 0V4.414L8.707 7.707a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0l5 5a1 1 0 010 1.414z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M3 13a1 1 0 011-1h10a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </div>

        {{-- Footer Section Start --}}
        <x-footer />
        {{-- Footer Section End --}}
    </div>
</x-app-layout>
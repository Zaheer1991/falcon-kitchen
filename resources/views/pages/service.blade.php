<x-app-layout>
    <div
        id="preloader" class="fixed inset-0 bg-white flex items-center justify-center z-50">
        <x-preloader />
    </div>
    <x-nav-link/>
    <div class="relative bg-white" id="main-content">
        <div class="relative h-screen overflow-hidden">
            <div class="swiper mySwiper h-full">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide active">
                        <img src="{{ asset('asset/images/banner/banner-image1.jpg') }}" alt="Banner 1" />
                        <div class="content">
                            <h1 class="text-4xl font-bold italic">Welcome to FalconProska</h1>
                            <p>A market leader in the field of hospitality equipment</p>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('asset/images/banner/banner-image2.jpg') }}" alt="Banner 2" />
                        <div class="content">
                            <h1 class="text-4xl font-bold italic">Discover Quality Equipment</h1>
                            <p>Quality and reliability are the key components of our success.</p>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('asset/images/banner/banner-image3.jpg') }}" alt="Banner 3" />
                        <div class="content">
                            <h1 class="text-4xl font-bold italic">Join Our Journey</h1>
                            <p>Be a part of a trusted name in hospitality solutions.</p>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('asset/images/banner/banner-image4.jpg') }}" alt="Banner 4" />
                        <div class="content">
                            <h1 class="text-4xl font-bold italic">Exceptional Services Await</h1>
                            <p>Quality service and customer satisfaction are our top priorities.</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <!-- Pagination Dots -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    
    <!-- Service Section -->
    <div class="py-16 bg-gray-100 text-center">
        <h2 class="text-3xl font-bold mb-10">Our Services</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4">
            <x-service-card
                title="Service 1 Title"
                image="{{ asset('asset/images/services/service1.jpg') }}"
                description="Description of service 1 goes here."
            />
            <x-service-card
                title="Service 1 Title"
                image="{{ asset('asset/images/services/service1.jpg') }}"
                description="Description of service 1 goes here."
            />
            <x-service-card
                title="Service 1 Title"
                image="{{ asset('asset/images/services/service1.jpg') }}"
                description="Description of service 1 goes here."
            />
            <x-service-card
                title="Service 1 Title"
                image="{{ asset('asset/images/services/service1.jpg') }}"
                description="Description of service 1 goes here."
            />
            <x-service-card
                title="Service 1 Title"
                image="{{ asset('asset/images/services/service1.jpg') }}"
                description="Description of service 1 goes here."
            />
            <x-service-card
                title="Service 1 Title"
                image="{{ asset('asset/images/services/service1.jpg') }}"
                description="Description of service 1 goes here."
            />
            <x-service-card
                title="Service 1 Title"
                image="{{ asset('asset/images/services/service1.jpg') }}"
                description="Description of service 1 goes here."
            />
            <x-service-card
                title="Service 1 Title"
                image="{{ asset('asset/images/services/service1.jpg') }}"
                description="Description of service 1 goes here."
            />
        </div>
    </div>
    {{-- Services Section End --}}

    {{-- Footer Starts Here --}}

    <x-footer />

    {{-- Footer End Here --}}
    
</x-app-layout>

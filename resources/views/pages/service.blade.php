<x-app-layout>
    @push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.css" />
    <style>
        .swiper {
            width: 100%;
            height: 100vh;
            position: relative;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            color: white;
            position: relative;
            transition: opacity 1s ease-in-out, transform 1s ease-in-out;
            opacity: 0; /* Start with invisible */
            transform: scale(0.95); /* Slightly scale down for a smooth effect */
        }

        .swiper-slide.active {
            opacity: 1; /* Make active slide visible */
            transform: scale(1); /* Restore scale for the active slide */
        }

        .swiper-slide img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .swiper-slide .content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 20px;
        }
        .service-card {
                position: relative; /* To position the sliding overlay */
                overflow: hidden; /* Hide overflow for smooth effect */
            }

            .sliding-overlay {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                background-color: rgba(59, 130, 246, 0.9); /* Semi-transparent blue overlay */
                transform: translateY(100%); /* Initially hidden below the card */
                transition: transform 0.4s ease; /* Smooth transition effect */
            }

            .service-card:hover .sliding-overlay {
                transform: translateY(0); /* Move overlay into view on hover */
            }

            .bottom-line {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: 4px; /* Thickness of the bottom line */
                background-color: #3B82F6; /* Blue color */
            }
    </style>
    @endpush
    <div
        id="preloader" class="fixed inset-0 bg-white flex items-center justify-center z-50"
        >
        
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
    @push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.mySwiper', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        effect: 'fade', // Fade effect for smoother slide transitions
        fadeEffect: {
            crossFade: true, // Smooth crossfade effect
        },
        speed: 1500, // Speed of the transition
        on: {
            slideChangeTransitionStart: function () {
                // Remove active class from all slides
                this.slides.forEach(slide => {
                    slide.classList.remove('active');
                });
            },
            slideChangeTransitionEnd: function () {
                // Add active class to the new active slide
                const activeSlide = this.slides[this.activeIndex];
                activeSlide.classList.add('active');
            }
        },
    });
});

    </script>
        <script src="{{asset('asset/preloader.js')}}"></script>
    @endpush
</x-app-layout>

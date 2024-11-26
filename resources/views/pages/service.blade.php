<x-app-layout>
    <div id="preloader" class="fixed inset-0 bg-white flex items-center justify-center z-50">
        <x-preloader />
    </div>
    <div class="relative bg-white" id="main-content">
        <!-- Navbar -->
        <x-nav-link />
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
        <!-- Service Section -->
        <div class="py-16 bg-gray-100 text-center">
            <h2 class="text-3xl font-bold mb-10">Our Services</h2>
            <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4">
                <x-service-card title="Service 1 Title" image="{{ asset('asset/images/services/service1.jpg') }}"
                    description="Description of service 1 goes here." />
                <x-service-card title="Service 1 Title" image="{{ asset('asset/images/services/service1.jpg') }}"
                    description="Description of service 1 goes here." />
                <x-service-card title="Service 1 Title" image="{{ asset('asset/images/services/service1.jpg') }}"
                    description="Description of service 1 goes here." />
                <x-service-card title="Service 1 Title" image="{{ asset('asset/images/services/service1.jpg') }}"
                    description="Description of service 1 goes here." />
                <x-service-card title="Service 1 Title" image="{{ asset('asset/images/services/service1.jpg') }}"
                    description="Description of service 1 goes here." />
                <x-service-card title="Service 1 Title" image="{{ asset('asset/images/services/service1.jpg') }}"
                    description="Description of service 1 goes here." />
                <x-service-card title="Service 1 Title" image="{{ asset('asset/images/services/service1.jpg') }}"
                    description="Description of service 1 goes here." />
                <x-service-card title="Service 1 Title" image="{{ asset('asset/images/services/service1.jpg') }}"
                    description="Description of service 1 goes here." />
            </div>
        </div>
        {{-- Services Section End --}}

        {{-- Count Up Section Start --}}
        <section id="count-section" class="py-20 bg-gradient-to-r from-gray-800 to-gray-900 text-white px-4 sm:px-6 md:px-12 lg:px-16 xl:px-20">
            <div class="max-w-screen-xl mx-auto">
                <!-- Section Title -->
                <h2 class="text-4xl font-bold text-center mb-12">
                    Our Achievements
                </h2>
                <!-- Counter Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                    <!-- Card 1: Projects Completed -->
                    <div class="relative flex flex-col items-center justify-center bg-gray-800 rounded-full shadow-lg p-6 lg:p-8 w-52 h-52">
                        <div class="relative w-32 h-32 rounded-full">
                            <svg class="absolute inset-0 transform rotate-[-90deg]" width="100%" height="100%" viewBox="0 0 36 36">
                                <circle class="text-gray-300" stroke-width="3" fill="none" r="16" cx="18" cy="18"/>
                                <circle id="projects-completed-bar" class="text-indigo-600" stroke-width="3" fill="none" r="16" cx="18" cy="18" stroke-dasharray="100, 100" stroke-dashoffset="100"/>
                            </svg>
                            <div class="absolute inset-0 flex justify-center items-center">
                                <span id="projects-completed" class="text-4xl font-bold text-indigo-600">0</span>
                            </div>
                        </div>
                        <p class="mt-4 text-lg font-semibold">Projects</p>
                    </div>
        
                    <!-- Card 2: Clients -->
                    <div class="relative flex flex-col items-center justify-center bg-gray-800 rounded-full shadow-lg p-6 lg:p-8 w-52 h-52">
                        <div class="relative w-32 h-32 rounded-full">
                            <svg class="absolute inset-0 transform rotate-[-90deg]" width="100%" height="100%" viewBox="0 0 36 36">
                                <circle class="text-gray-300" stroke-width="3" fill="none" r="16" cx="18" cy="18"/>
                                <circle id="clients-bar" class="text-green-600" stroke-width="3" fill="none" r="16" cx="18" cy="18" stroke-dasharray="100, 100" stroke-dashoffset="100"/>
                            </svg>
                            <div class="absolute inset-0 flex justify-center items-center">
                                <span id="clients" class="text-4xl font-bold text-green-600">0</span>
                            </div>
                        </div>
                        <p class="mt-4 text-lg font-semibold">Clients</p>
                    </div>
        
                    <!-- Card 3: Experience -->
                    <div class="relative flex flex-col items-center justify-center bg-gray-800 rounded-full shadow-lg p-6 lg:p-8 w-52 h-52">
                        <div class="relative w-32 h-32 rounded-full">
                            <svg class="absolute inset-0 transform rotate-[-90deg]" width="100%" height="100%" viewBox="0 0 36 36">
                                <circle class="text-gray-300" stroke-width="3" fill="none" r="16" cx="18" cy="18"/>
                                <circle id="experience-bar" class="text-blue-600" stroke-width="3" fill="none" r="16" cx="18" cy="18" stroke-dasharray="100, 100" stroke-dashoffset="100"/>
                            </svg>
                            <div class="absolute inset-0 flex justify-center items-center">
                                <span id="experience" class="text-4xl font-bold text-blue-600">0</span>
                            </div>
                        </div>
                        <p class="mt-4 text-lg font-semibold">Experience</p>
                    </div>
        
                    <!-- Card 4: Professionals -->
                    <div class="relative flex flex-col items-center justify-center bg-gray-800 rounded-full shadow-lg p-6 lg:p-8 w-52 h-52">
                        <div class="relative w-32 h-32 rounded-full">
                            <svg class="absolute inset-0 transform rotate-[-90deg]" width="100%" height="100%" viewBox="0 0 36 36">
                                <circle class="text-gray-300" stroke-width="3" fill="none" r="16" cx="18" cy="18"/>
                                <circle id="professionals-bar" class="text-purple-600" stroke-width="3" fill="none" r="16" cx="18" cy="18" stroke-dasharray="100, 100" stroke-dashoffset="100"/>
                            </svg>
                            <div class="absolute inset-0 flex justify-center items-center">
                                <span id="professionals" class="text-4xl font-bold text-purple-600">0</span>
                            </div>
                        </div>
                        <p class="mt-4 text-lg font-semibold">Professionals</p>
                    </div>
                </div>
            </div>
        </section>
        
        
        
        
        {{-- Count Up Section End --}}

        {{-- Managing Partener Section --}}
        <section class="py-20 bg-gray-100 text-gray-900">
            <div class="container mx-auto px-4">
                <!-- Section Title -->
                <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">
                    Our Managing Partner
                </h2>

                <!-- Partner Quote -->
                <div class="relative bg-white p-12 rounded-3xl shadow-xl mb-16 max-w-4xl mx-auto">
                    <!-- Double Quotes -->
                    <div class="absolute -top-8 left-0 right-0 flex justify-between text-6xl text-gray-400">
                        <span class="font-serif">“</span>
                        <span class="font-serif">”</span>
                    </div>

                    <!-- Partner's Content -->
                    <p class="text-xl text-gray-700 italic">
                        "At Falcon Professional International, we believe in delivering excellence through integrity and
                        professionalism. Our commitment to providing the best services to our clients is unwavering. We
                        focus on fostering long-term relationships and delivering value-driven results."
                    </p>

                    <!-- Partner's Name and Position -->
                    <div class="mt-8 text-center">
                        <p class="text-2xl font-semibold text-gray-900">John Doe</p>
                        <p class="text-xl text-gray-600">Managing Director</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Managing Partener Section End --}}

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


    @push('script')
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
        // Function to animate the counter and progress bar
// Function to animate the counter and progress bar
function animateCounterWithProgress(id, barId, targetNumber, duration) {
    const element = document.getElementById(id);
    const progressBar = document.getElementById(barId);
    let start = 0;
    const increment = targetNumber / (duration / 10); // Increase per frame (10ms per frame)

    const counter = setInterval(() => {
        start += increment;
        const progress = Math.min(start, targetNumber); // Ensure the progress doesn't exceed target

        // Update the counter text
        element.textContent = Math.floor(progress);

        // Update the progress bar's stroke-dashoffset (to create the progress effect)
        const percentage = (progress / targetNumber) * 100;
        progressBar.style.strokeDashoffset = 100 - percentage;

        if (start >= targetNumber) {
            element.textContent = targetNumber; // Ensure final value matches the target
            clearInterval(counter); // Stop animation
        }
    }, 10); // Update every 10ms
}

// Function to trigger animations when the section is visible
function handleIntersection(entries) {
    const entry = entries[0]; // Get the first entry
    if (entry.isIntersecting) {
        // Trigger counter animation for each of the achievements
        animateCounterWithProgress("projects-completed", "projects-completed-bar", 120, 2000); // Ends at 120 in 2 seconds
        animateCounterWithProgress("clients", "clients-bar", 85, 2000); // Ends at 85 in 2 seconds
        animateCounterWithProgress("experience", "experience-bar", 10, 2000); // Ends at 10 in 2 seconds
        animateCounterWithProgress("professionals", "professionals-bar", 50, 2000); // Ends at 50 in 2 seconds
        observer.unobserve(entry.target); // Stop observing once triggered
    }
}

// Setup Intersection Observer
const observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.5, // Trigger when 50% of the section is visible
});

// Observe the count-up section
const countSection = document.getElementById("count-section");
observer.observe(countSection);

    </script>
    @endpush

</x-app-layout>
<x-app-layout>
    <div
        id="preloader" class="fixed inset-0 bg-white flex items-center justify-center z-50">
        <x-preloader />
    </div>
    <div class="relative bg-white" id="main-content">
        <!-- Navbar -->
        <x-nav-link/>
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

    {{-- Count Up Section Start --}}
    <section id="count-section" class="py-20 bg-gradient-to-r from-gray-800 to-gray-900 text-white">
        <div class="container mx-auto px-4">
          <!-- Section Title -->
          <h2 class="text-4xl font-bold text-center mb-12">
            Our Achievements
          </h2>
          <!-- Counter Cards -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <!-- Card 1: Projects Completed -->
            <div class="relative bg-gradient-to-br from-indigo-500 to-indigo-600 shadow-lg rounded-3xl p-8 h-52 fade-in">
              <div class="absolute -top-10 inset-x-0 flex justify-center">
                <div class="bg-white text-indigo-600 rounded-full w-20 h-20 flex items-center justify-center text-4xl font-bold shadow-md">
                  <span id="projects-completed">0</span>
                </div>
              </div>
              <p class="mt-16 text-lg font-semibold">Projects Completed</p>
            </div>
            <!-- Card 2: Clients -->
            <div class="relative bg-gradient-to-br from-green-500 to-green-600 shadow-lg rounded-3xl p-8 h-52 fade-in delay-200">
              <div class="absolute -top-10 inset-x-0 flex justify-center">
                <div class="bg-white text-green-600 rounded-full w-20 h-20 flex items-center justify-center text-4xl font-bold shadow-md">
                  <span id="clients">0</span>
                </div>
              </div>
              <p class="mt-16 text-lg font-semibold">Clients</p>
            </div>
            <!-- Card 3: Experience -->
            <div class="relative bg-gradient-to-br from-blue-500 to-blue-600 shadow-lg rounded-3xl p-8 h-52 fade-in delay-400">
              <div class="absolute -top-10 inset-x-0 flex justify-center">
                <div class="bg-white text-blue-600 rounded-full w-20 h-20 flex items-center justify-center text-4xl font-bold shadow-md">
                  <span id="experience">0</span>
                </div>
              </div>
              <p class="mt-16 text-lg font-semibold">Experience (Years)</p>
            </div>
            <!-- Card 4: Professionals -->
            <div class="relative bg-gradient-to-br from-purple-500 to-purple-600 shadow-lg rounded-3xl p-8 h-52 fade-in delay-600">
              <div class="absolute -top-10 inset-x-0 flex justify-center">
                <div class="bg-white text-purple-600 rounded-full w-20 h-20 flex items-center justify-center text-4xl font-bold shadow-md">
                  <span id="professionals">0</span>
                </div>
              </div>
              <p class="mt-16 text-lg font-semibold">Professionals</p>
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
              "At Falcon Professional International, we believe in delivering excellence through integrity and professionalism. Our commitment to providing the best services to our clients is unwavering. We focus on fostering long-term relationships and delivering value-driven results."
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

    
    
    
</x-app-layout>

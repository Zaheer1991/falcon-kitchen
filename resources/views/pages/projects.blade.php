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
        <div class="relative h-screen overflow-hidden flex items-center justify-center lg:px-8 px-6">
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
        </div>

        <!-- Projects Section -->
        <section class="py-16 bg-gray-50 px-6">
            <div class="max-w-7xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 relative inline-block">
                    Our Projects
                    <span
                        class="absolute left-1/2 transform -translate-x-1/2 bottom-0 w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-300 rounded-full"></span>
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project Card 1 -->
                    <div class="project-card group bg-white rounded-lg shadow-md overflow-hidden transform transition-all duration-500 hover:bg-blue-600 hover:text-white">
                        <img src="https://via.placeholder.com/600x400.png?text=Project+Alpha" alt="Project Alpha"
                            class="w-full h-48 object-cover group-hover:opacity-90 transition-all duration-500">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-white">Project Alpha</h3>
                            <p class="text-gray-600 group-hover:text-white mt-2">
                                A groundbreaking innovation in hospitality equipment, designed to meet the modern demands of the hospitality industry.
                            </p>
                            <a href="#" class="mt-4 inline-block text-blue-500 group-hover:text-white hover:text-blue-400 font-bold hover:underline">
                                View Details
                            </a>
                        </div>
                    </div>

                    <!-- Project Card 2 -->
                    <div class="project-card group bg-white rounded-lg shadow-md overflow-hidden transform transition-all duration-500 hover:bg-green-600 hover:text-white">
                        <img src="https://via.placeholder.com/600x400.png?text=Project+Beta" alt="Project Beta"
                            class="w-full h-48 object-cover group-hover:opacity-90 transition-all duration-500">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-white">Project Beta</h3>
                            <p class="text-gray-600 group-hover:text-white mt-2">
                                State-of-the-art kitchen equipment solutions designed to enhance operational efficiency and improve guest experience.
                            </p>
                            <a href="#" class="mt-4 inline-block text-green-500 group-hover:text-white hover:text-green-400 font-bold hover:underline">
                                View Details
                            </a>
                        </div>
                    </div>

                    <!-- Project Card 3 -->
                    <div class="project-card group bg-white rounded-lg shadow-md overflow-hidden transform transition-all duration-500 hover:bg-yellow-600 hover:text-white">
                        <img src="https://via.placeholder.com/600x400.png?text=Project+Gamma" alt="Project Gamma"
                            class="w-full h-48 object-cover group-hover:opacity-90 transition-all duration-500">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-white">Project Gamma</h3>
                            <p class="text-gray-600 group-hover:text-white mt-2">
                                Premium hospitality equipment crafted with precision to offer unmatched durability and performance.
                            </p>
                            <a href="#" class="mt-4 inline-block text-yellow-500 group-hover:text-white hover:text-yellow-400 font-bold hover:underline">
                                View Details
                            </a>
                        </div>
                    </div>

                    <!-- Project Card 4 -->
                    <div class="project-card group bg-white rounded-lg shadow-md overflow-hidden transform transition-all duration-500 hover:bg-red-600 hover:text-white">
                        <img src="https://via.placeholder.com/600x400.png?text=Project+Delta" alt="Project Delta"
                            class="w-full h-48 object-cover group-hover:opacity-90 transition-all duration-500">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-white">Project Delta</h3>
                            <p class="text-gray-600 group-hover:text-white mt-2">
                                Our innovative solution for high-volume commercial kitchens, offering powerful, efficient, and reliable equipment.
                            </p>
                            <a href="#" class="mt-4 inline-block text-red-500 group-hover:text-white hover:text-red-400 font-bold hover:underline">
                                View Details
                            </a>
                        </div>
                    </div>

                    <!-- Project Card 5 -->
                    <div class="project-card group bg-white rounded-lg shadow-md overflow-hidden transform transition-all duration-500 hover:bg-purple-600 hover:text-white">
                        <img src="https://via.placeholder.com/600x400.png?text=Project+Epsilon" alt="Project Epsilon"
                            class="w-full h-48 object-cover group-hover:opacity-90 transition-all duration-500">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-white">Project Epsilon</h3>
                            <p class="text-gray-600 group-hover:text-white mt-2">
                                A highly efficient solution for luxury hotels, providing elegant and durable equipment tailored to premium establishments.
                            </p>
                            <a href="#" class="mt-4 inline-block text-purple-500 group-hover:text-white hover:text-purple-400 font-bold hover:underline">
                                View Details
                            </a>
                        </div>
                    </div>

                    <!-- Project Card 6 -->
                    <div class="project-card group bg-white rounded-lg shadow-md overflow-hidden transform transition-all duration-500 hover:bg-indigo-600 hover:text-white">
                        <img src="https://via.placeholder.com/600x400.png?text=Project+Zeta" alt="Project Zeta"
                            class="w-full h-48 object-cover group-hover:opacity-90 transition-all duration-500">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-white">Project Zeta</h3>
                            <p class="text-gray-600 group-hover:text-white mt-2">
                                An advanced suite of kitchen tools designed to enhance functionality and improve kitchen workflows in large-scale operations.
                            </p>
                            <a href="#" class="mt-4 inline-block text-indigo-500 group-hover:text-white hover:text-indigo-400 font-bold hover:underline">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Features Section -->
        <section class="py-16 bg-gray-100">
            <div class="max-w-7xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 relative inline-block">
                    Why Choose Us
                    <span
                        class="absolute left-1/2 transform -translate-x-1/2 bottom-0 w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-300 rounded-full"></span>
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                    <!-- Feature 1 -->
                    <div class="feature-card group bg-white rounded-lg shadow-md p-6 transition-all duration-500 transform hover:scale-105 hover:shadow-lg hover:bg-blue-600 hover:text-white">
                        <div class="mb-4">
                            <i class="fas fa-cogs text-4xl text-blue-500 group-hover:text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold group-hover:text-white">Innovative Solutions</h3>
                        <p class="text-gray-600 group-hover:text-white mt-2">
                            We offer cutting-edge equipment solutions that keep up with modern-day industry standards.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="feature-card group bg-white rounded-lg shadow-md p-6 transition-all duration-500 transform hover:scale-105 hover:shadow-lg hover:bg-green-600 hover:text-white">
                        <div class="mb-4">
                            <i class="fas fa-handshake text-4xl text-green-500 group-hover:text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold group-hover:text-white">Customer-Centric Approach</h3>
                        <p class="text-gray-600 group-hover:text-white mt-2">
                            Our priority is to provide tailored services that meet your specific needs and challenges.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="feature-card group bg-white rounded-lg shadow-md p-6 transition-all duration-500 transform hover:scale-105 hover:shadow-lg hover:bg-red-600 hover:text-white">
                        <div class="mb-4">
                            <i class="fas fa-rocket text-4xl text-red-500 group-hover:text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold group-hover:text-white">Efficiency & Performance</h3>
                        <p class="text-gray-600 group-hover:text-white mt-2">
                            We ensure that every piece of equipment is designed to maximize operational efficiency.
                        </p>
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
        <!-- Footer -->
        <x-footer />
    </div>

    <!-- Scripts -->
 <!-- Add this to your script section -->
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script>
  window.addEventListener('load', () => {
      document.getElementById('preloader').style.display = 'none';
  });

  document.querySelectorAll('.project-card').forEach(card => {
      card.addEventListener('mousemove', (e) => {
          const cardRect = card.getBoundingClientRect();
          const mouseX = e.clientX - cardRect.left;
          const mouseY = e.clientY - cardRect.top;

          const centerX = cardRect.width / 2;
          const centerY = cardRect.height / 2;

          const deltaX = (mouseX - centerX) / centerX;
          const deltaY = (mouseY - centerY) / centerY;

          const tiltX = deltaY * 7; // Adjusted tilt range for smooth effect
          const tiltY = deltaX * -7;

          card.style.transform = `perspective(1500px) rotateX(${tiltX}deg) rotateY(${tiltY}deg)`;
      });

      card.addEventListener('mouseleave', () => {
          card.style.transform = `perspective(1500px) rotateX(0deg) rotateY(0deg)`;
      });
  });
</script>
@endpush

</x-app-layout>    


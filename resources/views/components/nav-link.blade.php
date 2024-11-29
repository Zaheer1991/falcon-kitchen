<nav class="border-gray-100 fixed top-0 w-full z-20 shadow-md transition-transform duration-200 ease-in-out backdrop-blur-md bg-opacity-30 text-white" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" />
                    </a>
                </div>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'bg-violet-700 text-white px-3 py-2 rounded-md text-sm font-medium' : ' px-3 py-2 rounded-md text-sm font-medium' }}">Home</a>
                <a href="{{ route('service') }}" class="{{ request()->is('services') ? 'bg-violet-700 text-white px-3 py-2 rounded-md text-sm font-medium' : 'px-3 py-2 rounded-md text-sm font-medium' }}">Our Services</a>
                <a href="{{ route('client') }}" class="{{ request()->is('clients') ? 'bg-violet-700 text-white px-3 py-2 rounded-md text-sm font-medium' : 'px-3 py-2 rounded-md text-sm font-medium' }}">Our Clients</a>
                <a href="{{ route('project') }}" class="{{ request()->is('projects') ? 'bg-violet-700 text-white px-3 py-2 rounded-md text-sm font-medium' : 'px-3 py-2 rounded-md text-sm font-medium' }}">Our Projects</a>
                <a href="{{ route('product') }}" class="{{ request()->is('products') ? 'bg-violet-700 text-white px-3 py-2 rounded-md text-sm font-medium' : 'px-3 py-2 rounded-md text-sm font-medium' }}">Our Products</a>
            </div>

            <!-- Language Selector -->
            <!-- Language Selector -->
<div class="flex items-center">
    <button onclick="switchLanguage()" 
            class="relative inline-flex items-center px-4 py-2 bg-gray-800 rounded-full shadow-md text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        <!-- Toggle Text/Icon -->
        <span class="flex items-center">
            @if(app()->getLocale() === 'ar')
                <span class="text-sm font-medium">EN</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M10 9l5 3-5 3V9z"></path>
                    <circle cx="12" cy="12" r="10"></circle>
                </svg>
            @else
                <span class="text-sm font-medium">AR</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 9l-5 3 5 3V9z"></path>
                    <circle cx="12" cy="12" r="10"></circle>
                </svg>
            @endif
        </span>
    </button>
</div>



            <!-- Mobile Menu Button -->
            <div class="flex items-center sm:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>


@push('script')
<script>
    // This script dynamically updates the `dir` attribute based on the selected language
    document.addEventListener('DOMContentLoaded', function() {
        // Check current language setting
        let currentLanguage = "{{ app()->getLocale() }}";

        // Change the `dir` attribute based on language
        if (currentLanguage === 'ar') {
            document.documentElement.setAttribute('dir', 'rtl');
        } else {
            document.documentElement.setAttribute('dir', 'ltr');
        }
    });
    function switchLanguage() {
        // Get current language
        let currentLanguage = "{{ app()->getLocale() }}";
        
        // Determine target language and route
        let targetLanguage = currentLanguage === 'ar' ? 'en' : 'ar';
        let switchUrl = "{{ route('lang.switch', ':lang') }}".replace(':lang', targetLanguage);

        // Redirect to the language switch URL
        window.location.href = switchUrl;
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Dynamically set the `dir` attribute
        let currentLanguage = "{{ app()->getLocale() }}";
        document.documentElement.setAttribute('dir', currentLanguage === 'ar' ? 'rtl' : 'ltr');
    });
</script>
@endpush

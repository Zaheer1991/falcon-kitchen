<nav
            class="bg-white border-b border-gray-100 fixed top-0 w-full z-20 shadow-md transition-transform duration-200 ease-in-out"
            id="navbar"
        >
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="{{ route('dashboard') }}">
                                <img
                                    class="h-8 w-auto"
                                    src="{{ asset('images/logo.png') }}"
                                    alt="{{ config('app.name') }}"
                                />
                            </a>
                        </div>
                    </div>
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <a
                            href="{{ route('dashboard') }}"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
                            >Home</a
                        >
                        <a
                            href="{{route('service')}}"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
                            >Our Services</a
                        >
                        <a
                            href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
                            >Our Clients</a
                        >
                        <a
                            href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
                            >Our Projects</a
                        >
                        <a
                            href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
                            >Our Products</a
                        >
                    </div>
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                type="submit"
                                class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
                            >
                                Logout
                            </button>
                        </form>
                    </div>
                    <!-- Mobile Menu Button -->
                    <div class="flex items-center sm:hidden">
                        <button
                            type="button"
                            class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            aria-controls="mobile-menu"
                            aria-expanded="false"
                            id="mobile-menu-button"
                        >
                            <span class="sr-only">Open main menu</span>
                            <svg
                                class="h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

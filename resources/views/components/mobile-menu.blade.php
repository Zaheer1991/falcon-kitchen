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
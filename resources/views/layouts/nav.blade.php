<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center justify-start">
                <a href="{{ route('dashboard') }}" class="flex items-center">
                    <img class="mr-3 sm:h-9 block h-6 w-auto fill-current text-gray-800 dark:text-gray-200" src="{{ asset('assets/images/shop.png') }}"/>
                    <span class="self-center text-xm font-semibold whitespace-nowrap dark:text-white">Playground Shop</span>
                </a>
            </div>

            <div class="flex">
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Home') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link>
                        {{ __('Shop') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link>
                        {{ __('About Us') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link>
                        {{ __('Contact Us') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <div class="flex items-center justify-center">
                        <div class="flex items-center justify-center">
                            <div class="flex border-2 rounded">
                                <input type="text" class="px-4 py-2 w-80 border-none" placeholder="Search...">
                                <button class="flex items-center justify-center px-4 border-l">
                                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @guest
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('login')">
                            {{ __('Login/Register') }}
                        </x-nav-link>
                    </div>
                </div>
            @endguest

            @auth
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="flex items-center justify-start gap-4 mr-5">
                        <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                            <div class="text-2xl">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-cyan-500 text-white text-xs">
                                8
                            </div>
                        </a>
        
                        <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                            <div class="text-2xl">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <div class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-cyan-500 text-white text-xs">
                                2
                            </div>
                        </a>
                    </div>
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9" src="{{ Auth::user()->avatar }}" alt="User_Avatar">
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900 font-semibold dark:text-white">{{ Auth::user()->name }}</span>
                                <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                            </div>

                            <hr class="border-gray-200 dark:border-gray-700 ">
                            
                            <x-dropdown-link :href="route('profile.edit')">
                                <i class="fa-solid fa-user w-5 h-5 py-1"></i>
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="fa-solid fa-right-from-bracket w-5 h-5 py-1"></i>
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Hamburger -->
                <div class="flex items-center gap-1 sm:hidden">
                    <div class="flex items-center justify-end space-x-4">
                        <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                            <div class="text-xl">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-cyan-500 text-white text-xs">
                                8
                            </div>
                        </a>

                        <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                            <div class="text-xl">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <div class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-cyan-500 text-white text-xs">
                                2
                            </div>
                        </a>

                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            @endauth
        </div>
    </div>

        @auth
            <!-- Responsive Navigation Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                <!-- Responsive Settings Options -->
                <div class="pt-4 px-3 pb-1 border-t border-gray-200 dark:border-gray-600">
                    <div class="space-y-1">
                        <a href="#" class="flex items-center p-3 -mt-2 text-sm text-gray-600 transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                            <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9" src="{{ asset('assets/images/avatar.png') }}" alt="User_Avatar">
                            <div class="mx-1">
                                <h1 class="text-sm font-semibold text-gray-700 dark:text-gray-200">{{ Auth::user()->name }}</h1>
                                <p class="text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</p>
                            </div>
                        </a>

                        <hr class="border-gray-200 dark:border-gray-700">

                        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            <i class="fa-solid fa-house w-5 h-5 py-1"></i>
                            {{ __('Home') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link>
                            <i class="fa-solid fa-bag-shopping w-5 h-5 py-1""></i>
                            {{ __('Shop') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link>
                            <i class="fa-solid fa-comments w-5 h-5 py-1""></i>
                            {{ __('About Us') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link>
                            <i class="fa-solid fa-file-signature w-5 h-5 py-1""></i>
                            {{ __('Contact Us') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                            <i class="fa-solid fa-user w-5 h-5 py-1"></i>
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="fa-solid fa-right-from-bracket w-5 h-5 py-1"></i>
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            </div>
        @endauth
</nav>

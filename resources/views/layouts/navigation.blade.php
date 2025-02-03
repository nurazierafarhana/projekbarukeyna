<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 relative z-[1050]">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center pr-4">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="custom-logo-size">
                </a>
            </div>

            <!-- Right Side with Profile and Icons for Mobile (Visible on mobile) -->
            <div class="flex items-center space-x-8 sm:hidden"> <!-- Show on mobile -->
                <!-- Home Icon (FontAwesome) -->
                <a href="{{ route('dashboard') }}" class="text-gray-500 hover:text-gray-700" title="Utama">
                    <i class="fas fa-home"></i>
                </a>

                <div class="nav-item">
                    <a href="{{ route('cart.index') }}" class="nav-link" title="Troli">
                        <i class="fas fa-shopping-cart"></i>
                        <span id="cartIcon" class="badge bg-primary">{{ session()->get('cart') ? count(session()->get('cart')) : 0 }}</span>
                    </a>
                </div>

                <!-- Clipboard List Icon (FontAwesome) -->
                <a href="{{ route('dashboard') }}" class="text-gray-500 hover:text-gray-700" title="Pesanan">
                    <i class="fas fa-clipboard-list"></i>
                </a>
            </div>

            <!-- Right Side with Profile and Icons for Desktop (Visible on desktop) -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 space-x-8"> <!-- Show on desktop -->
                <!-- Home Icon (FontAwesome) -->
                <a href="{{ route('dashboard') }}" class="text-gray-500 hover:text-gray-700" title="Utama">
                    <i class="fas fa-home"></i>
                </a>

                <div class="nav-item">
                    <a href="{{ route('cart.index') }}" class="nav-link" title="Troli">
                        <i class="fas fa-shopping-cart"></i>
                        <span id="cartIcon" class="badge bg-primary">{{ session()->get('cart') ? count(session()->get('cart')) : 0 }}</span>
                    </a>
                </div>

                <!-- Clipboard List Icon (FontAwesome) -->
                <a href="{{ route('dashboard') }}" class="text-gray-500 hover:text-gray-700" title="Pesanan">
                    <i class="fas fa-clipboard-list"></i>
                </a>

                <!-- Profile Dropdown -->
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger Button for Mobile -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

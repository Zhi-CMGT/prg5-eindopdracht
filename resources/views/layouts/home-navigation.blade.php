{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Home Page</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">--}}
{{--    <!-- Primary Navigation Menu -->--}}
{{--    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">--}}
{{--        <div class="flex justify-between h-16">--}}
{{--            <div class="flex">--}}
{{--                --}}{{--                <!-- Logo -->--}}
{{--                --}}{{--                <div class="shrink-0 flex items-center">--}}
{{--                --}}{{--                    <a href="{{ route('dashboard') }}">--}}
{{--                --}}{{--                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"/>--}}
{{--                --}}{{--                    </a>--}}
{{--                --}}{{--                </div>--}}

{{--                <!-- Navigation Links -->--}}
{{--                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">--}}
{{--                    @auth--}}
{{--                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">--}}
{{--                            {{ __('Dashboard') }}--}}
{{--                        </x-nav-link>--}}
{{--                    @endauth--}}

{{--                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">--}}
{{--                        {{ __('Home') }}--}}
{{--                    </x-nav-link>--}}

{{--                    <div>--}}
{{--                        <x-dropdown>--}}
{{--                            <x-slot name="trigger">--}}
{{--                                <button>Destinations</button>--}}
{{--                            </x-slot>--}}

{{--                            <x-slot name="content">--}}
{{--                                <a href="{{ route('destinations') }}">See all destinations</a>--}}

{{--                                <div>--}}
{{--                                    @foreach($destinations as $destination)--}}
{{--                                        <a href="{{ route('destinations.show', $destination) }}">--}}
{{--                                            {{ $destination->name }}--}}
{{--                                        </a>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </x-slot>--}}
{{--                        </x-dropdown>--}}
{{--                    </div>--}}

{{--                    <div>--}}
{{--                        <x-dropdown>--}}
{{--                            <x-slot name="trigger">--}}
{{--                                <button>Categories</button>--}}
{{--                            </x-slot>--}}

{{--                            <x-slot name="content">--}}
{{--                                <a href="{{ route('categories') }}">See all categories</a>--}}

{{--                                <div>--}}
{{--                                    @foreach($categories as $category)--}}
{{--                                        <a href="{{ route('categories.show', $category) }}">--}}
{{--                                            {{ $category->name }}</a>--}}
{{--                                        <div>--}}
{{--                                            @foreach($category->destinations as $destination)--}}
{{--                                                <a href="{{ route('destinations.show', $destination) }}">{{ $destination->name }}</a>--}}
{{--                                            @endforeach--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </x-slot>--}}
{{--                        </x-dropdown>--}}
{{--                    </div>--}}

{{--                    @guest--}}
{{--                        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <nav class="flex items-center justify-end gap-4">--}}
{{--                                    <a--}}
{{--                                        href="{{ route('login') }}"--}}
{{--                                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"--}}
{{--                                    >--}}
{{--                                        Log in--}}
{{--                                    </a>--}}

{{--                                    @if (Route::has('register'))--}}
{{--                                        <a--}}
{{--                                            href="{{ route('register') }}"--}}
{{--                                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">--}}
{{--                                            Register--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
{{--                                </nav>--}}
{{--                            @endif--}}
{{--                        </header>--}}
{{--                    @endguest--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <!-- Settings Dropdown -->--}}
{{--            @auth--}}
{{--                <div class="hidden sm:flex sm:items-center sm:ms-6">--}}
{{--                    <x-dropdown align="right" width="48">--}}
{{--                        <x-slot name="trigger">--}}
{{--                            <button--}}
{{--                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">--}}
{{--                                <div>{{ Auth::user()->name }}</div>--}}

{{--                                <div class="ms-1">--}}
{{--                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                         viewBox="0 0 20 20">--}}
{{--                                        <path fill-rule="evenodd"--}}
{{--                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"--}}
{{--                                              clip-rule="evenodd"/>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </button>--}}
{{--                        </x-slot>--}}

{{--                        <x-slot name="content">--}}
{{--                            <x-dropdown-link :href="route('profile.edit')">--}}
{{--                                {{ __('Profile') }}--}}
{{--                            </x-dropdown-link>--}}

{{--                            <!-- Authentication -->--}}
{{--                            <form method="POST" action="{{ route('logout') }}">--}}
{{--                                @csrf--}}

{{--                                <x-dropdown-link :href="route('logout')"--}}
{{--                                                 onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                                    {{ __('Log Out') }}--}}
{{--                                </x-dropdown-link>--}}
{{--                            </form>--}}
{{--                        </x-slot>--}}
{{--                    </x-dropdown>--}}
{{--                </div>--}}
{{--            @endauth--}}

{{--            <!-- Hamburger -->--}}
{{--            <div class="-me-2 flex items-center sm:hidden">--}}
{{--                <button @click="open = ! open"--}}
{{--                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">--}}
{{--                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
{{--                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"--}}
{{--                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                              d="M4 6h16M4 12h16M4 18h16"/>--}}
{{--                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"--}}
{{--                              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Responsive Navigation Menu -->--}}
{{--    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">--}}
{{--        <div class="pt-2 pb-3 space-y-1">--}}
{{--            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">--}}
{{--                {{ __('Dashboard') }}--}}
{{--            </x-responsive-nav-link>--}}
{{--        </div>--}}

{{--        <!-- Responsive Settings Options -->--}}
{{--        @auth--}}
{{--            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">--}}
{{--                <div class="px-4">--}}
{{--                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>--}}
{{--                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>--}}
{{--                </div>--}}

{{--                <div class="mt-3 space-y-1">--}}
{{--                    <x-responsive-nav-link :href="route('profile.edit')">--}}
{{--                        {{ __('Profile') }}--}}
{{--                    </x-responsive-nav-link>--}}

{{--                    <!-- Authentication -->--}}
{{--                    <form method="POST" action="{{ route('logout') }}">--}}
{{--                        @csrf--}}

{{--                        <x-responsive-nav-link :href="route('logout')"--}}
{{--                                               onclick="event.preventDefault();--}}
{{--                                        this.closest('form').submit();">--}}
{{--                            {{ __('Log Out') }}--}}
{{--                        </x-responsive-nav-link>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endauth--}}
{{--    </div>--}}
{{--</nav>--}}

{{--</body>--}}
{{--</html>--}}
<nav x-data="{ open: false }" class="bg-white border-b-2 border-[#D6B36A] shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center space-x-8">
                <!-- Navigation Links -->
                @auth
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                                class="text-[#4A7856] hover:text-[#D6B36A] font-medium transition">
                        Dashboard
                    </x-nav-link>
                @endauth

                <x-nav-link :href="route('home')" :active="request()->routeIs('home')"
                            class="text-[#4A7856] hover:text-[#D6B36A] font-medium transition">
                    Home
                </x-nav-link>

                <!-- Destinations Dropdown -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                            class="inline-flex items-center px-1 pt-1 text-[#4A7856] hover:text-[#D6B36A] font-medium transition {{ request()->routeIs('destinations*') ? 'border-b-2 border-[#D6B36A]' : '' }}">
                        Destinations
                        <svg class="ml-2 h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div x-show="open"
                         @click.away="open = false"
                         x-transition
                         class="absolute left-0 mt-2 w-80 bg-white rounded-xl shadow-2xl border border-[#4A7856]/10 z-50 p-4 max-h-96 overflow-y-auto"
                         style="display: none;">
                        <a href="{{ route('destinations') }}"
                           class="block px-4 py-3 text-[#4A7856] hover:bg-[#F7F6F3] rounded-lg font-semibold transition">
                            See all destinations
                        </a>
                        <div class="mt-2 space-y-1">
                            @foreach($destinations as $destination)
                                <a href="{{ route('destinations.show', $destination) }}"
                                   class="block px-4 py-2 text-[#4A7856]/80 hover:bg-[#F7F6F3] hover:text-[#4A7856] rounded-lg text-sm transition">
                                    {{ $destination->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Categories Dropdown -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                            class="inline-flex items-center px-1 pt-1 text-[#4A7856] hover:text-[#D6B36A] font-medium transition {{ request()->routeIs('categories*') ? 'border-b-2 border-[#D6B36A]' : '' }}">
                        Categories
                        <svg class="ml-2 h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div x-show="open"
                         @click.away="open = false"
                         x-transition
                         class="absolute left-0 mt-2 w-80 bg-white rounded-xl shadow-2xl border border-[#4A7856]/10 z-50 p-4 max-h-96 overflow-y-auto"
                         style="display: none;">
                        <a href="{{ route('categories') }}"
                           class="block px-4 py-3 text-[#4A7856] hover:bg-[#F7F6F3] rounded-lg font-semibold transition">
                            See all categories
                        </a>
                        <div class="mt-2 space-y-3">
                            @foreach($categories as $category)
                                <div>
                                    <a href="{{ route('categories.show', $category) }}"
                                       class="block px-4 py-2 text-[#4A7856] hover:bg-[#F7F6F3] rounded-lg font-semibold transition">
                                        {{ $category->name }}
                                    </a>
                                    @if($category->destinations->isNotEmpty())
                                        <div class="ml-4 mt-1 space-y-1">
                                            @foreach($category->destinations as $destination)
                                                <a href="{{ route('destinations.show', $destination) }}"
                                                   class="block px-4 py-1 text-[#4A7856]/70 hover:bg-[#F7F6F3] hover:text-[#4A7856] rounded-lg text-sm transition">
                                                    {{ $destination->name }}
                                                </a>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Auth Links -->
            <div class="flex items-center space-x-4">
                @guest
                    <a href="{{ route('login') }}"
                       class="text-[#4A7856] hover:text-[#D6B36A] font-medium transition px-4 py-2 rounded-lg hover:bg-[#F7F6F3]">
                        Log in
                    </a>
                    @if(Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="bg-gradient-to-r from-[#4A7856] to-[#5a8866] text-white px-5 py-2 rounded-lg font-medium hover:shadow-lg transition">
                            Register
                        </a>
                    @endif
                @endguest

                @auth
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                                class="inline-flex items-center gap-2 text-[#4A7856] hover:text-[#D6B36A] font-medium transition px-4 py-2 rounded-lg hover:bg-[#F7F6F3]">
                            {{ Auth::user()->name }}
                            <svg class="h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <div x-show="open"
                             @click.away="open = false"
                             x-transition
                             class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl border border-[#4A7856]/10 z-50 py-2"
                             style="display: none;">
                            <a href="{{ route('profile.edit') }}"
                               class="block px-4 py-2 text-[#4A7856] hover:bg-[#F7F6F3] transition">
                                Profile
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                        class="w-full text-left px-4 py-2 text-[#4A7856] hover:bg-[#F7F6F3] transition">
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                @endauth
            </div>

            <!-- Mobile Hamburger -->
            <div class="flex items-center lg:hidden">
                <button @click="open = !open"
                        class="inline-flex items-center justify-center p-2 rounded-lg text-[#4A7856] hover:text-[#D6B36A] hover:bg-[#F7F6F3] transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden lg:hidden border-t border-[#4A7856]/10">
        <div class="px-2 pt-2 pb-3 space-y-1">
            @auth
                <a href="{{ route('dashboard') }}"
                   class="block px-3 py-2 rounded-lg text-[#4A7856] hover:bg-[#F7F6F3] font-medium transition {{ request()->routeIs('dashboard') ? 'bg-[#F7F6F3]' : '' }}">
                    Dashboard
                </a>
            @endauth

            <a href="{{ route('home') }}"
               class="block px-3 py-2 rounded-lg text-[#4A7856] hover:bg-[#F7F6F3] font-medium transition {{ request()->routeIs('home') ? 'bg-[#F7F6F3]' : '' }}">
                Home
            </a>

            <a href="{{ route('destinations') }}"
               class="block px-3 py-2 rounded-lg text-[#4A7856] hover:bg-[#F7F6F3] font-medium transition {{ request()->routeIs('destinations*') ? 'bg-[#F7F6F3]' : '' }}">
                Destinations
            </a>

            <a href="{{ route('categories') }}"
               class="block px-3 py-2 rounded-lg text-[#4A7856] hover:bg-[#F7F6F3] font-medium transition {{ request()->routeIs('categories*') ? 'bg-[#F7F6F3]' : '' }}">
                Categories
            </a>

            @guest
                <div class="pt-4 border-t border-[#4A7856]/10 space-y-1">
                    <a href="{{ route('login') }}"
                       class="block px-3 py-2 rounded-lg text-[#4A7856] hover:bg-[#F7F6F3] font-medium transition">
                        Log in
                    </a>
                    @if(Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="block px-3 py-2 rounded-lg text-[#4A7856] hover:bg-[#F7F6F3] font-medium transition">
                            Register
                        </a>
                    @endif
                </div>
            @endguest

            @auth
                <div class="pt-4 border-t border-[#4A7856]/10 space-y-1">
                    <div class="px-3 py-2 text-[#4A7856] font-semibold">
                        {{ Auth::user()->name }}
                    </div>
                    <a href="{{ route('profile.edit') }}"
                       class="block px-3 py-2 rounded-lg text-[#4A7856] hover:bg-[#F7F6F3] transition">
                        Profile
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="w-full text-left px-3 py-2 rounded-lg text-[#4A7856] hover:bg-[#F7F6F3] transition">
                            Log Out
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</nav>

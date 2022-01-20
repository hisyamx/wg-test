<div class="flex flex-col min-h-screen text-base subpixel-antialiased font-semibold text-gray-900 lg:flex-row">
    <!-- mobile bar -->
    <div class="flex items-center justify-between px-4 py-2 text-gray-900 bg-white lg:hidden">
        <button id="menuToggle">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>

        <a class="flex flex-row items-center justify-center p-4" href="{{route('admin.dashboard')}}" class="flex">
            <img class="h-10 w-auto" src="{{asset('img/logo.svg')}}" alt="logo">
        </a>
    </div>
    <!--/ mobile bar-->
    <!--- sidebar -->
    <div id="menu"
        class="sticky top-0 z-10 flex-col hidden h-screen px-4 py-4 bg-white shadow-inner w-54 xl:w-64 2xl:w-80 lg:px-6 xl:px-8 lg:py-6 lg:flex">
        <!-- menu and logo-->
        <div class="flex-1 py-4">
            <a href="{{route('admin.dashboard')}}" class="flex">
                <img class="h-16 w-auto pr-3" src="{{asset('img/logo.svg')}}" alt="logo">
            </a>
            <nav class="-mx-2 md:mt-8" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
                <x-nav-b :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-b>
                <x-nav-b :href="route('admin.product')" :active="request()->routeIs('admin.product')">
                    {{ __('Product') }}
                </x-nav-b>
                <x-nav-b :href="route('admin.report')" :active="request()->routeIs('admin.report')">
                    {{ __('Report') }}
                </x-nav-b>
            </nav>
        </div>
        <!--/ menu and logo -->

        <!-- profile link -->
        <div
            class="absolute left-0 flex-col items-center justify-center w-full space-y-4 md:flex xl:w-auto xl:flex-row xl:justify-start xl:space-y-0 xl:space-x-4xl:left-8 bottom-6">
            <div class="flex flex-col items-center text-sm xl:items-start px-4">
                <div class="space-y-4 text-sm text-center text-gray-300 md:space-y-1 md:text-center">
                    <p>&copy; {{ date('Y') }} - Dinkes Melawi & Melawi Software Production | All rights reserved</p>
                </div>
            </div>
        </div>
        <!--/ profile link -->

    </div>
    <!--/ sidebar -->

    <div class="flex flex-col flex-1 px-4 py-4 overflow-hidden bg-gray-50 lg:py-8 lg:px-6 xl:px-8">
        <!-- topbar -->
        <div class="flex justify-between w-full mx-auto max-w-screen-2xl">
            <div class="flex flex-1">
                <h1 class="text-2xl font-bold text-blue-900">Halo! {{ Auth::user()->name }}</h1>
            </div>
            <div class="flex flex-1 space-x-4 justify-end">
                <div class="flex space-x-4">
                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Kelola Akun') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profil') }}
                                </x-jet-dropdown-link>

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Keluar Dashboard') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>

                </div>
            </div>
        </div>
        <!--/ topbar -->

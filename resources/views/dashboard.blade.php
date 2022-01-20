<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                        <!-- quick actions -->
        <div
            class="flex flex-col px-4 py-4 mt-8 space-y-4 bg-white rounded-2xl lg:px-8 lg:py-6 lg:flex-row lg:space-y-0 lg:space-x-12">
            <div>
                <h2 class="mb-2 text-xl font-bold text-gray-900">Rute Cepat</h2>
                <p class="text-lg text-gray-900 opacity-70">Tambahkan beberapa konten secara cepat.</p>
            </div>
            <nav class="space-y-2 md:flex md:space-x-4 md:space-y-0">
                <a href="{{ route('dashboard') }}"
                    class="inline-flex flex-col items-center justify-center w-auto px-3 py-3 border border-blue-100 rounded-xl hover:bg-blue-50">
                    <svg class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-gray-900 opacity-70 text-center mt-2">
                        Dashboard
                    </span>
                </a>
                <a href="{{ route('product') }}"
                    class="inline-flex flex-col items-center justify-center w-auto px-3 py-3 border border-blue-100 rounded-xl hover:bg-blue-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                            clip-rule="evenodd" />
                        <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                    </svg>
                    <span class="text-gray-900 opacity-70 text-center mt-2">
                        Product
                    </span>
                </a>
                <a href="{{ route('checkout') }}"
                    class="inline-flex flex-col items-center justify-center w-auto px-3 py-3 border border-blue-100 rounded-xl hover:bg-blue-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-gray-900 opacity-70 text-center mt-2">
                        Checkout
                    </span>
                </a>
            </nav>
        </div>
        <!--/ quick actions -->


            </div>
        </div>
    </div>
</x-app-layout>

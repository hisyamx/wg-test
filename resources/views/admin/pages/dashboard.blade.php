@extends('admin.layouts.master')
@section('title','Dashboard')
@section('content')

<!-- main content -->
<div class="flex-1 py-4 lg:py-10">
    <div class="mx-auto max-w-screen-2xl">
        <!-- cards row -->
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 2xl:gap-8">

            <!-- product -->
            <div class="col-span-1 px-4 py-4 bg-white rounded-2xl lg:px-8 lg:py-6">
                <h2 class="mb-4 text-xl font-bold text-gray-900 lg:mb-6">Product di Posting</h2>
                <div class="flex items-end mb-4 space-x-4 lg:mb-6">
                    <div class="flex items-center justify-center w-12 h-12 bg-blue-100 rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    {{-- <span class="mb-2 text-2xl">{{ $product_count }}</span> --}}
                </div>
                <a href="{{ route('admin.product')}}"
                    class="inline-block px-6 py-3 mt-2 rounded-xl bg-blue-50 text-gray-900 hover:bg-blue-100">
                    Lihat Selengkapnya
                </a>
            </div>
            <!--/ product -->

            <!-- report -->
            <div class="col-span-1 px-4 py-4 bg-white rounded-2xl lg:px-8 lg:py-6">
                <h2 class="mb-4 text-xl font-bold text-gray-900 lg:mb-6">Total Pembeli</h2>
                <div class="flex items-end mb-4 space-x-4 lg:mb-6">
                    <div class="flex items-center justify-center w-12 h-12 bg-blue-100 rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                clip-rule="evenodd" />
                            <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                        </svg>
                    </div>
                    {{-- <span class="mb-2 text-2xl text-gray-900">{{ $report_count }}</span> --}}
                </div>
                <a href="{{ route('admin.report')}}"
                    class="inline-block px-6 py-3 mt-2 rounded-xl bg-blue-50 text-gray-900 hover:bg-blue-100">
                    Lihat Selengkapnya
                </a>
            </div>
            <!--/ report -->

        </div>
        <!--/ cards row -->

        <!-- quick actions -->
        <div
            class="flex flex-col px-4 py-4 mt-8 space-y-4 bg-white rounded-2xl lg:px-8 lg:py-6 lg:flex-row lg:space-y-0 lg:space-x-12">
            <div>
                <h2 class="mb-2 text-xl font-bold text-gray-900">Rute Cepat</h2>
                <p class="text-lg text-gray-900 opacity-70">Tambahkan beberapa konten secara cepat.</p>
            </div>
            <nav class="space-y-2 md:flex md:space-x-4 md:space-y-0">
                <a href="{{ route('admin.product.create') }}"
                    class="inline-flex flex-col items-center justify-center w-auto px-3 py-3 border border-blue-100 rounded-xl hover:bg-blue-50">
                    <svg class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-gray-900 opacity-70 text-center mt-2">
                        Tambah product
                    </span>
                </a>
                <a href="{{ route('admin.report.create') }}"
                    class="inline-flex flex-col items-center justify-center w-auto px-3 py-3 border border-blue-100 rounded-xl hover:bg-blue-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                            clip-rule="evenodd" />
                        <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                    </svg>
                    <span class="text-gray-900 opacity-70 text-center mt-2">
                        Tambah report
                    </span>
                </a>
            </nav>
        </div>
        <!--/ quick actions -->

    </div>
</div>
<!--/ main content -->


<!-- JavaScript -->
<script>
    // Very simple example for toggling mobile menu

    const button = document.getElementById('menuToggle');
    const menu = document.getElementById('menu');
    const body = document.getElementsByTagName('body')

    button.onclick = function (event) {
        event.preventDefault();
        menu.classList.toggle('hidden')
        body[0].classList.toggle('overflow-hidden')
    }

</script>
<!--/ JavaScript -->

@endsection

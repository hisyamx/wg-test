@extends('admin.layouts.master')

@section('title', 'product')
@section('content')

    <!-- quick actions -->
    @include('layouts.message')
    <div
        class="flex flex-col px-4 py-4 mt-8 space-y-4 bg-white rounded-2xl lg:px-8 lg:py-6 lg:flex-row lg:space-y-0 lg:space-x-12">
        <div>
            <h2 class="mb-2 text-xl font-bold text-glue-900">Rute Cepat</h2>
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
                <span class="text-glue-900 opacity-70 text-center mt-2">
                    Tambah product
                </span>
            </a>

        </nav>
    </div>
    <!--/ quick actions -->

    <!-- recent table -->
    <div class="px-4 py-4 mt-8 bg-white rounded-2xl lg:px-8 lg:py-6">
        <h2 class="mb-4 text-xl font-bold text-glue-900 lg:mb-6">Daftar product</h2>
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full overflow-hidden align-middle">
                <table class="min-w-full">
                    <thead class="text-left bg-blue-50">
                        <tr>
                            <th class="px-3 py-2">Nama</th>
                            <th class="px-3 py-2">Code</th>
                            <th class="px-3 py-2">Harga</th>
                            <th class="px-3 py-2">Aksi</th>
                            <th class="px-3 py-2"></th>
                        </tr>
                    </thead>
                    @foreach ($product as $item)
                        <tbody class="text-glue-900 divide-y divide-blue-100 text-opacity-80">
                            <tr>
                                <td class="px-3 py-3">{{ $item->name }}</td>
                                <td class="px-3 py-3">{{ $item->pro_code }}</td>
                                <td class="px-3 py-3">
                                    <a href="{{ route('admin.product.edit', $item->id) }}"
                                        class="inline-flex flex-col items-center justify-center w-12 px-3 py-3 hover:bg-blue-50 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-glue-900"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                            <path fill-rule="evenodd"
                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </td>
                                <td class="px-3 py-3">
                                    <a href="{{ route('admin.product.show', $item->id) }}"
                                        class="inline-flex flex-col items-center justify-center w-12 px-3 py-3 hover:bg-blue-50 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-glue-900"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z" />
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!--/ recent table -->

@endsection

@extends('admin.layouts.master')

@section('title','Tambah product')
@section('content')

<!-- component -->
<div class="px-4 py-4 mt-8 bg-white rounded-2xl lg:px-8 lg:py-6">
    <h2 class="mb-4 text-xl font-bold text-blue-900 lg:mb-6">Tambah product</h2>
    <form class="mb-0" action="{{ route('admin.product.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6 mt-4">
            <label for="code" class="text-sm font-medium text-gray-900 block mb-2">Code product</label>
            <input type="text" id="code" name="code"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                placeholder="Code product" value="{{ old('code') }}" required>
        </div>
        <div class="mb-6">
            <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Nama product</label>
            <input type="text" id="name" rows="5" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                placeholder="Nama product" value="{{ old('name') }}" required></input>
        </div>
        <div class="mb-6">
            <label for="currency" class="text-sm font-medium text-gray-900 block mb-2">Currency</label>
            <input type="text" id="currency" rows="5" name="currency"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                placeholder="Currency" value="{{ old('currency') }}" required></input>
        </div>
        <div class="mb-6">
            <label for="price"
                class="text-sm font-medium text-gray-900 block mb-2">Price product</label>
            <div class="flex">
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-lg border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    IDR
                </span>
                <input type="number" id="price" name="price"
                    class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Price product" value="{{ old('price') }}" required>
            </div>
        </div>
        <div class="mb-6">
            <label for="discount"
                class="text-sm font-medium text-gray-900 block mb-2">Discount product</label>
            <div class="flex">
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-lg border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    IDR
                </span>
                <input type="number" id="discount" name="discount"
                    class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="discount product" value="{{ old('discount') }}" required>
            </div>
        </div>
        <div class="mb-6">
            <label for="dimention" class="text-sm font-medium text-gray-900 block mb-2">Dimention</label>
            <input type="text" id="dimention" rows="5" name="dimention"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                placeholder="10 cm x 13 cm" value="{{ old('dimention') }}" required></input>
        </div>
        <div class="mb-6">
            <label for="unit" class="text-sm font-medium text-gray-900 block mb-2">Unit</label>
            <input type="text" id="unit" rows="5" name="unit"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                placeholder="Unit" value="{{ old('unit') }}" required></input>
        </div>
        <button type="submit"
            class="inline-block px-6 py-3 mt-2 rounded-xl bg-blue-50 text-gray-900 hover:bg-blue-100 focus:ring-4 focus:ring-blue-300 text-center">
            Tambahkan
        </button>
    </form>
</div>
@endsection

@section('page-js')

@endsection

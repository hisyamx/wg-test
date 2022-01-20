@extends('admin.layouts.master')

@section('title','Edit Banner')
@section('content')

<!-- component -->
<div class="px-4 py-4 mt-8 bg-white rounded-2xl lg:px-8 lg:py-6">
    <h2 class="mb-4 text-xl font-bold text-blue-900 lg:mb-6">Edit Banner {{ $banner->id }}</h2>
    <form class="mb-0" action="{{ route('admin.banner.edit', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6 mt-4">
            <label for="tagline" class="text-sm font-medium text-gray-900 block mb-2">Tagline Banner</label>
            <input type="text" id="tagline" name="tagline"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4"
                value="{{ $banner->tagline }}">
        </div>
        <div class="mb-6">
            <label for="deskripsi" class="text-sm font-medium text-gray-900 block mb-2">Deskripsi</label>
            <textarea type="text" id="deskripsi" rows="5" name="deskripsi"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4"
                >{{ $banner->deskripsi }}</textarea>
        </div>
        <div class="mb-6">
            <label class="text-sm font-medium text-gray-900 block mb-2" for="foto">Upload file</label>
            <input
                class="block w-full cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none focus:border-transparent sm:text-md rounded-lg"
                aria-describedby="foto" id="foto" type="file" name="foto" value="{{ $banner->foto }}">
            <div class="mt-1 text-sm text-gray-500" id="foto">Banner akan ditampilkan di Beranda Utama</div>
        </div>
        <button type="submit"
            class="inline-block px-6 py-3 mt-2 rounded-xl bg-yellow-50 text-gray-900 hover:bg-yellow-100 focus:ring-4 focus:ring-yellow-300 text-center">
            Edit
        </button>
    </form>
</div>
@endsection

@section('page-js')

@endsection

@extends('admin.layouts.master')

@section('title','Banner')
@section('content')

<!-- component -->
<div class="px-4 py-4 mt-8 bg-white rounded-2xl lg:px-8 lg:py-6">
    <h2 class="mb-4 text-xl font-bold text-blue-900 lg:mb-6">Daftar Banner</h2>
    <form class="mb-0" action="{{ route('admin.banner') }}" method="POST">
        @csrf
        <div class="mb-6 mt-4">
            <label for="nama" class="text-sm font-medium text-gray-900 block mb-2">Nama Banner</label>
            <input type="text" id="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4"
                placeholder="Nama Banner" required>
        </div>
        <div class="mb-6">
            <label for="deskripsi" class="text-sm font-medium text-gray-900 block mb-2">Deskripsi</label>
            <textarea type="text" id="deskripsi" rows="5"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4"
                placeholder="Nama Banner" required></textarea>
        </div>
        <div class="mb-6">
            <label class="text-sm font-medium text-gray-900 block mb-2" for="user_avatar">Upload file</label>
            <input
                class="block w-full cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none focus:border-transparent sm:text-md rounded-lg"
                aria-describedby="user_avatar_help" id="user_avatar" type="file">
            <div class="mt-1 text-sm text-gray-500" id="user_avatar_help">A profile picture is useful to confirm your
                are logged into your account</div>
        </div>
        <div class="mb-6">
            <textarea name="editor" id="editor" class="bg-gray-500"></textarea>
            <button class="px-4py-2 mt-4 text-sm text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                Submit
            </button>
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

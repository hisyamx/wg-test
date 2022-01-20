@extends('admin.layouts.master')

@section('title','Edit Informasi')
@section('content')

<!-- component -->
<div class="px-4 py-4 mt-8 bg-white rounded-2xl lg:px-8 lg:py-6">
    <h2 class="mb-4 text-xl font-bold text-blue-900 lg:mb-6">Edit Informasi {{ $informasi->nama }}</h2>
    <form class="mb-0" action="{{ route('admin.informasi.edit', $informasi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6 mt-4">
            <label for="nama" class="text-sm font-medium text-gray-900 block mb-2">Nama Berkas/ File Informasi</label>
            <input type="text" id="nama" name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4"
                value="{{ $informasi->nama }}">
        </div>
        <div class="mb-6">
            <label for="deskripsi" class="text-sm font-medium text-gray-900 block mb-2">Deskripsi</label>
            <textarea type="text" id="deskripsi" rows="5" name="deskripsi"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4"
                >{{ $informasi->deskripsi }}</textarea>
        </div>
        <div class="mb-6">
            <label for="kategori" class="text-sm font-medium text-gray-900 block mb-2">Kategori Informasi</label>
            <select name="kategori" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="{{ $informasi->kategori }}">
                <option class="py-1" value="1">Profil</option>
                <option class="py-1" value="2">Materi</option>
                <option class="py-1" value="3">Lainnya</option>
            </select>
        </div>
        <div class="mb-6 grid grid-cols-12 gap-8">
            <div class="col-span-12 md:col-span-6">
                <label class="text-sm font-medium text-gray-900 block mb-2" for="file">Upload file</label>
                <input
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                    aria-describedby="file" id="file" type="file" name="file">
                <div class="mt-1 text-sm text-gray-500" id="file">Informasi yang diuploud dapat berupa .pdf .docx atau
                    .jpg</div>
            </div>
            <div class="col-span-12 md:col-span-6">
                <label class="text-sm font-medium text-gray-900 block mb-2" for="tanggal_post">Tanggal Post</label>
                <input datepicker="" datepicker-format="mm/dd/yyyy" name="tanggal_post" id="tanggal_post" type="date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full datepicker-input"
                    placeholder="{{ $informasi->tanggal_post }}">
            </div>
        </div>
        <div class="mb-6 mt-4">
            <label for="link" class="text-sm font-medium text-gray-900 block mb-2">Link</label>
            <input type="text" id="link" name="link"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                value="{{ $informasi->link }}">
        </div>
        <div class="flex justify-between w-full mx-auto">
            <a href="{{ route('admin.banner') }}"
            class="flex justify-start px-6 py-3 mt-4 rounded-xl bg-blue-50 text-gray-900 hover:bg-blue-100">
                Kembali
            </a>
            <button type="submit"
                class="inline-block px-6 py-3 mt-2 rounded-xl bg-yellow-50 text-gray-900 hover:bg-yellow-100 focus:ring-4 focus:ring-yellow-300 text-center">
                Edit
            </button>
        </div>
    </form>
</div>
@endsection

@section('page-js')

@endsection

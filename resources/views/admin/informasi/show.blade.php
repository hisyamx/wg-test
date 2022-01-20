@extends('admin.layouts.master')

@section('title','Banner')
@section('content')

<!-- component -->
<div class="px-4 py-4 mt-8 bg-white rounded-2xl lg:px-8 lg:py-6">
    <h2 class="mb-4 text-xl font-bold text-blue-900 lg:mb-6">Show Informasi {{ $informasi->nama }} </h2>
    <div class="grid grid-cols-4 gap-8 mt-5 lg:grid-cols-12 sm:px-0 lg:px-0">
        <!-- content -->
        <div class="col-span-12 md:col-span-6 px-8 py-8 bg-blue-50 hover:bg-blue-100 rounded-3xl">
            <div class="flex flex-wrap items-center">
                <div class="w-full">
                    <div class="mx-auto text-xl text-gray-900">{{ $informasi->deskripsi }}</div>
                    <a href="{{asset('storage/files/'.$informasi->file)}}" class="mx-auto text-lg text-gray-500 underline" download="{{ $informasi->nama }}">File</a>
                    <a href="{{ $informasi->link }}" class="mx-auto text-lg text-gray-500 underline">Link</a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-between w-full mx-auto">
        <a href="{{ route('admin.informasi') }}"
            class="flex justify-start px-6 py-3 mt-4 rounded-xl bg-blue-50 text-gray-900 hover:bg-blue-100">
            Kembali
        </a>
        <form class="flex justify-end right-0 px-6 py-3 mt-4 rounded-xl bg-red-500 text-gray-900 hover:bg-red-100"
            action="{{ route('admin.informasi.delete',$informasi->id) }}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit">Delete</button>
        </form>
    </div>


</div>
@endsection

@section('page-js')

@endsection

@extends('admin.layouts.master')

@section('title','Banner')
@section('content')

<!-- component -->
<div class="px-4 py-4 mt-8 bg-white rounded-2xl lg:px-8 lg:py-6">
    <h2 class="mb-4 text-xl font-bold text-blue-900 lg:mb-6">Show Banner {{ $banner->id }} </h2>
    <div class="container items-center max-w-full mx-auto bg-blue-50 rounded-3xl">
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2">
                <div class="w-full">
                    <h1 class="mx-auto text-2xl md:text-4xl font-semibold text-gray-900 sm:w-full md:w-full px-12 pt-8">
                        {{ $banner->tagline }}
                    </h1>
                    <p class="mx-auto text-lg md:text-xl text-gray-500 sm:w-full md:w-full px-12 py-8">
                        {{ $banner->deskripsi }}</p>
                    <div class="mx-auto text-xl px-12 pb-8">
                        <a href="#" class="font-semibold text-gray-900 hover:underline">Informasi
                            Lengkap</a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 pr-8">
                <div class="max-w-full h-full items-center justify-center overflow-hidden rounded-xl">
                    <img src="{{asset('storage/fotos/'.$banner->foto)}}">
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-between w-full mx-auto">
        <a href="{{ route('admin.banner') }}"
            class="flex justify-start px-6 py-3 mt-4 rounded-xl bg-blue-50 text-gray-900 hover:bg-blue-100">
            Kembali
        </a>
        <form class="flex justify-end right-0 px-6 py-3 mt-4 rounded-xl bg-red-500 text-gray-900 hover:bg-red-100" action="{{ route('admin.banner.delete',$banner->id) }}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit">Delete</button>
        </form>
    </div>


</div>
@endsection

@section('page-js')

@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- component -->
                @foreach ($product as $item)
                <div class="py-6 px-12">
                    <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="w-1/3 bg-cover"
                            style="background-image: url('https://source.unsplash.com/')">
                        </div>
                        <div class="w-2/3 p-4">
                            <h1 class="text-gray-900 font-bold text-2xl">{{ $item->name }}</h1>
                            <p class="mt-2 text-gray-600 text-sm">{{ $item->pro_code }}</p>
                            <p class="mt-2 text-gray-600 text-sm">{{ $item->dimention }}</p>
                            <div class="flex item-center justify-between mt-3">
                                <h1 class="text-gray-700 font-bold text-xl"><span>{{ $item->currency }}</span>{{ $item->price }}</h1>
                            </div>
                            <p class="mt-2 text-gray-600 text-sm">{{ $item->unit }}</p>
                            <p class="mt-2 text-gray-600 text-sm">{{ $item->discount }}</p>
                            <button class="px-3 py-4 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add
                                to Card</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

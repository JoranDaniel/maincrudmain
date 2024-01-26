<!-- resources/views/merchandise/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8">
        <h1 class="text-3xl font-semibold mb-6">Merchandise</h1>
        <div class="flex flex-wrap -mx-4">
            @foreach ($merchandises as $merchandise)
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-8">
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                        <img src="{{ $merchandise->afbeelding }}" alt="{{ $merchandise->naam }}" class="w-full h-32 object-cover mb-2 rounded-md">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $merchandise->naam }}</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-1">Prijs: €{{ $merchandise->prijs }}</p>
                        <p class="text-gray-600 dark:text-gray-400 mb-2">{{ $merchandise->beschrijving }}</p>
                        <form method="post" action="{{ route('cart.add', $merchandise) }}">
                            @csrf
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                                Add to Cart
                            </button>
                        </form>
                        <a href="{{ route('merchandise.show', $merchandise) }}" class="text-blue-500 dark:text-blue-400 hover:underline ml-2">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

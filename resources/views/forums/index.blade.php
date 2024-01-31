<!-- resources/views/forums/index.blade.php -->
@extends('layouts.app')
<style>
    main {
        padding: 100px;
    }    
</style>
@section('content')
    <div class="container mx-auto mt-8 flex justify-center items-center h-screen">
        <div class="w-full max-w-2xl">
            <div class="bg-white rounded-lg shadow-md p-6 mb-6 t-9">
                <h2 class="text-3xl font-bold mb-4 text-gray-800">Welcome to the Forums</h2>
                @forelse($forums as $forum)
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6 mt-6">
                        <h2 class="text-xl font-bold mb-2 text-gray-800">Title: {{ $forum->title }}</h2>
                        <p class="text-gray-700">Description: {{ $forum->content }}</p>
                    </div>
                @empty
                    <p class="text-gray-800">No forums available.</p>
                @endforelse

                <a class="btn mt-4" href="{{ route('forums.create') }}">Create a New Forum</a>
            </div>
        </div>
    </div>
@endsection

<!-- resources/views/forums/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">Forum Index</h1>

        @forelse($forums as $forum)
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h2 class="text-xl font-bold mb-2 text-gray-800">Title: {{ $forum->title }}</h2>
                <p class="text-gray-700">Description: {{ $forum->content }}</p>
            </div>
        @empty
            <p class="text-gray-800">No forums available.</p>
        @endforelse

        <a href="{{ route('forums.create') }}" class="btn btn-primary">Create a New Forum</a>
    </div>
@endsection

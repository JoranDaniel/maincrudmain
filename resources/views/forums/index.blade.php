<!-- resources/views/forums/index.blade.php -->
@extends('layouts.app')



@section('content')
    <div class="background mx-auto mt-8">

        @forelse($forums as $forum)
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h2 class="text-xl font-bold mb-2 text-gray-800">Title: {{ $forum->title }}</h2>
                <p class="text-gray-700">Description: {{ $forum->content }}</p>
            </div>
        @empty
            <p class="text-gray-800">No forums available.</p>
        @endforelse

        <a  class="btn" href="{{ route('forums.create') }}">Create a New Forum</a>
    </div>
@endsection

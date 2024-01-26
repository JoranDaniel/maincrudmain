<!-- resources/views/forums/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-white">Create a New Forum</h1>

        <form method="post" action="{{ route('forums.store') }}">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label text-white">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label text-white">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>

            <button class="text-white" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

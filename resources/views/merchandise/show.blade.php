<!-- resources/views/merchandise/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $merchandise->naam }}</h1>
    <p>Prijs: {{ $merchandise->prijs }}</p>
    <p>Beschrijving: {{ $merchandise->beschrijving }}</p>
    <img src="{{ $merchandise->afbeelding }}" alt="{{ $merchandise->naam }}">
    <a href="{{ route('merchandise.index') }}">Terug naar Merchandise</a>
@endsection

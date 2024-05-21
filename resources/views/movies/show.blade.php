@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main>
    <div class="card">
        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
        <div class="card-body">
            <h5 class="card-title">
                Titolo: {{ $movie->title }}
            </h5>
            <p class="card-text">
                Titolo originale: {{ $movie->original_title }}
            </p>
            <div>
                {{ $movie->vote}}
            </div>
            <a class="btn btn-primary" href="{{route('movies.show', $movie->id)}}">
                details
            </a>
        </div>
    </div>
</main>

@endsection
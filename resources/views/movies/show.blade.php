@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3 gy-3">
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
                        <a class="btn btn-primary" href="{{route('movies.index')}}">
                            Back to movies
                        </a>
                    </div>
                </div>
            </div>
</main>

@endsection
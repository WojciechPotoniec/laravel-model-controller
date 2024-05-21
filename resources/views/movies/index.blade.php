@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main>
    <h1>All Movies</h1>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="card">
                                <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Titolo: {{ $movie->title }}
                                    </h5>
                                    <p class="card-text">
                                        Titolo origile: {{ $movie->original_title }}
                                    </p>
                                    <div>
                                        {{ $movie->vote}}
                                    </div>
                                    <a class="btn btn-primary" href="{{route('movies.show', $movie->id)}}">
                                        details
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
</main>
@endsection
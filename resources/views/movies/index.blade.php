@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main>
    <h1>All Movies</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{route('movies.show', $movie->id)}}">
                    {{ $movie->title }}
                </a>
            </li>
        @endforeach
    </ul>

</main>

@endsection
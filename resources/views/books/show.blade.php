@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main>
    <div class="card">
        <img src="{{ $book->cover_image }}" class="card-img-top" alt="{{ $book->title }}">
        <div class="card-body">
            <h5 class="card-title">
                Titolo: {{ $book->title }}
            </h5>
            <p class="card-text">
                Overview: {{ $book->plot }}
            </p>
            <a class="btn btn-primary" href="{{route('books.show', $book->id)}}">
                Details
            </a>
        </div>
    </div>
</main>

@endsection
@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main>
    <h1>All books</h1>
    <div class="container">
        <div class="row">
            @foreach ($books as $book)
                <div class="col-12 col-md-4 col-lg-3 gy-3">
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
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
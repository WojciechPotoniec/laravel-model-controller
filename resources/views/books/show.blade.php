@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main class="bg-dark">
    <div class="container">
        <div class="row">
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
                        <a class="btn btn-primary" href="{{route('books.index')}}">
                            Back to books
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
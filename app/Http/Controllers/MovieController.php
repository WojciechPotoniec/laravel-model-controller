<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        //** Method 1 */
        // $book = Book::find($id);
        // if ($book) {
        //     return view('books.show', compact('book'));
        // } else {
        //     abort(404);
        // }

        //** Method 2 */
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
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
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }
}

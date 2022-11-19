<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookOldmodel;
use App\Models\Publisher;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index()
    {
        return view('book.all', [
            'books' => Book::all()
        ]);
    }

    public function show(Book $book)
    {
        return view('book.detail', [
            'book' => $book
        ]);
    }

    public function create()
    {
        return view('book.create', [
            'publisher' => Publisher::all()
        ]);
    }
}

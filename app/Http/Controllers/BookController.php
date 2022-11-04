<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index()
    {
        return view('book', [
            'books' => Book::all()
        ]);
    }

    public function show($id)
    {
        return view('detail_book', [
            'book' => Book::find($id)
        ]);
    }
}

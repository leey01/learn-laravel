<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        return view('publisher.all', [
            'publishers' => Publisher::all()
        ]);
    }

    public function show(Publisher $publisher)
    {
        return view('publisher.detail', [
            'publisher' => $publisher
        ]);
    }
}

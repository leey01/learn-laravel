@extends('layouts.main')

@section('content')
    <h2>Detail</h2>

    <p>Judul Buku : {{$book->nama}}</p>
    <p>Pengarang Buku : {{$book->author}}</p>
    <p>Harga Buku : {{$book->price}}</p>
    <p>publisher : {{$book->publisher->nama}}</p>
    <button  class="btn btn-primary" onclick="history.back()">Go Back</button>

@endsection

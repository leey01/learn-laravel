@extends('layouts.main')

@section('content')
    <h2>Detail</h2>

    <p>Judul Buku : {{$book['nama']}}</p>
    <p>Pengarang Buku : {{$book['pengarang']}}</p>
    <p>Harga Buku : {{$book['harga']}}</p>
@endsection

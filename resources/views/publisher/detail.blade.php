@extends('layouts.main')

@section('content')
    <h2>Detail</h2>

    <p>Nama : {{$publisher->nama}}</p>
    <p>Email : {{$publisher->email}}</p>
    <p>Alamat : {{$publisher->alamat}}</p>

    <button class="btn btn-primary" onclick="history.back()">Go Back</button>

@endsection

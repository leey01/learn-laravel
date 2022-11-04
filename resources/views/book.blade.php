@extends('layouts.main')

@section('content')
    <h2>Book List</h2>

    <div class="container container-fluid">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
            <tr>
                <th scope="row">{{ $book['id'] }}</th>
                <td>{{ $book['nama'] }}</td>
                <td>{{ $book['pengarang'] }}</td>
                <td>{{ $book['harga'] }}</td>
                <td>
                    <a type="button" class="btn btn-primary" href="detail_book/{{ $book['id'] }}">Detail</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

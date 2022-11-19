@extends('layouts.main')

@section('content')
    <h2>List Publishers</h2>
    <div class="container container-fluid">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Book</th>
            </tr>
            </thead>
            <tbody>
            @foreach($publishers as $publisher)
                <tr>
                    <th scope="row">{{ $publisher['id'] }}</th>
                    <td>{{ $publisher->nama }}</td>
                    <td>{{ $publisher->email }}</td>
                    <td>{{ $publisher->alamat }}</td>
                    <td>
                        @foreach($publisher->book as $book)
                            <ul>
                                <li>{{$book->nama}}</li>
                            </ul>
                        @endforeach
                    </td>
                    <td><a type="button" class="btn btn-primary" href="detail/{{ $publisher->nama }}">Detail</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

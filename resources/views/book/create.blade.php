@extends('layouts.main')

@section('content')
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Id</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$books['id']}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama</label>
            <input type="email" class="form-control" id="exampleInputPassword1" value="{{$books['nama']}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pengarang</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$books['nama_pengarang']}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="email" class="form-control" id="exampleInputPassword1" value="{{$books['harga']}}">
        </div>
    </form>
@endsection

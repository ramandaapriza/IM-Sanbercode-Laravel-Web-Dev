@extends('layout.testing')

@section('judul')
    Detail data pemain
@endsection

@section('conten')

    <h1>{{$cast->nama}}</h1>
    <p>{{$cast->bio}}</p>

    <a href="/cast" class="btn btn-secondary btn-sm">Kembali</a>
@endsection
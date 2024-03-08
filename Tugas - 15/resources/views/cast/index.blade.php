@extends('layout.testing')
@section('judul')
    Data pemain film
@endsection
@section('conten')
<a href="/cast/create" class="btn btn-primary btn-sm">Tambah</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nama</th>
        <th scope="col">umur</th>
        <th scope="col">bio</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key => $value)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$value->nama}}</td>
                <td>{{$value->umur}}</td>
                <td>{{$value->bio}}</td>
                <td>
                    
                    <form action="/cast/{{$value->id}}" method="POST">
                        @csrf
                        <a href="/cast/{{$value->id}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/cast/{{$value->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
                <td></td>
            </tr>
        @empty
            <tr>
                <td>Tidak ada data</td>
            </tr>
        @endforelse
    </tbody>
  </table>
@endsection
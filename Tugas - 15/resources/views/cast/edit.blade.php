@extends('layout.testing')
@section('judul')
    Edit pemain
@endsection
@section('conten')
    <form action="/cast/{{$cast->id}}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label>nama</label>
            <input type="text" name="nama" value="{{$cast->nama}}" class="form-control">
            </div>
            @error('nama')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="form-group">
                <label>umur</label>
                <input type="text" name="umur" value="{{$cast->umur}}" class="form-control">
            </div>
                @error('umur')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" class="form-control" cols="30" rows="10">{{$cast->bio}}</textarea>
        </div>
            @error('bio')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

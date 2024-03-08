@extends('layout.testing')
@section('judul')
    Data pemain
@endsection
@section('conten')
    <form action="/cast" method="POST">
        @csrf
        <div class="form-group">
            <label>nama</label>
            <input type="text" name="nama" class="form-control">
            </div>
            @error('nama')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="form-group">
                <label>umur</label>
                <input type="text" name="umur" class="form-control">
            </div>
                @error('umur')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
        </div>
            @error('bio')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

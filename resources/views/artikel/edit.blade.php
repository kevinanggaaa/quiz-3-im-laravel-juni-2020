@extends('layouts.master')

@section('content')
    <div class="ml-3">
        <form action="/artikel/{{$artikel->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul artikel:</label>
                <input type="text" class="form-control" value="{{$artikel->judul}}" name="judul" id="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi artikel:</label>
                <textarea class="form-control" name="isi" id="isi" rows="4" cols="50">{{$artikel->isi}}</textarea>
            </div>
            <div class="form-group">
                <label for="tag">Tag artikel:</label>
                <input type="text" class="form-control" value="{{$artikel->tag}}" name="tag" id="tag">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
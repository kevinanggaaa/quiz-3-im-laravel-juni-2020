@extends('layouts.master')

@section('content')
    <div class="ml-3">
        <form action="/artikel" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Artikel :</label>
                <input type="text" class="form-control" placeholder="Input judul" name="judul" id="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi Artikel :</label>
                <textarea class="form-control" placeholder="Input isi" name="isi" id="isi" rows="4" cols="50"></textarea>
            </div>
            <div class="form-group">
                <label for="judul">Tag:</label>
                <input type="text" class="form-control" placeholder="Input tag" name="tag" id="tag">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
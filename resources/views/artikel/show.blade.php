@extends('layouts.master')

@section('content')
    <div class="container p-3 my-3 border bg-white">
            <h3>judul: {{$artikel->judul}}</h3>
            <p>slug: {{$artikel->slug}}</p>
            <p>{{$artikel->isi}}</p> 
            @for ($i = 0; $i < count($artikel->tag); $i++)
                <button type="button" class="btn btn-success">{{$artikel->tag[$i]}}</button>
            @endfor
        </div>
@endsection
@extends('layouts.master')

@section('content')
    <table class="table">
        <thead>
        <a class="btn btn-info ml-3 mt-2 mb-2" href="/artikel/create" role="button">Buat artikel</a>
        <tr>
            <th style="width: 10px;">No</th>
            <th style="width: 150px;">Judul</th>
            <th>Isi</th>
            <th>Slug</th>
            <th>Tag</th>
        </tr>
        </thead>
        <tbody>
        @foreach($artikel as $key => $data)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->judul}}</td>
                <td>{{$data->isi}}</td>
                <td>{{$data->slug}}</td>
                <td>{{$data->tag}}</td>
                <td>
                    <a href="/artikel/{{$data->id}}" class="btn btn-sm btn-info">Detail</a>
                    <a href="/artikel/{{$data->id}}/edit" class="btn btn-sm btn-info">Ubah</a>
                    <form action="/artikel/{{$data->id}}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@push('scripts')
    <script src="{{ asset('jquery-3.5.1.min.js')"></script>
    <script src="{{ asset('/sweetalert/sweetalert2.all.min.js')"></script>
    <script>
        swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush
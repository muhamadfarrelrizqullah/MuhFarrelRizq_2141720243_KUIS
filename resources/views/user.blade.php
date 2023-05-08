@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($dataUser as $data)
            <tr>
                <td>{{ $data->id_user}}</td>
                <td>{{ $data->nama_user}}</td>
                <td>{{ $data->alamat}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
@stop

@section('footer')
    <p class="text-center">2141720243 || Muhamad Farrel</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
    .table tr {
        text-align: center;
    }
    </style>
@stop

@section('js')
    <script></script>
@stop
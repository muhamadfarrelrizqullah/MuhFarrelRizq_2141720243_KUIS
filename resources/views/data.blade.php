@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Data Barang</h1>
@stop

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Satuan</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($dataBarang as $data)
            <tr>
                <td>{{ $data->id}}</td>
                <td>{{ $data->nama}}</td>
                <td>{{ $data->harga}}</td>
                <td>{{ $data->satuan}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
    
@stop

@section('footer')
    <p class="text-center">Copyright @ 2023 Muhamad Farrel</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
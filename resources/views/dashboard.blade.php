@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard Page</h1>
@stop

@section('content')
    <p>&emsp;Anda sekarang berada didalam halaman <strong>Dashboard</strong> QuizFarrel.</p>
@stop

@section('footer')
    <p class="text-center">Copyright @ 2023 Muhamad Farrel</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        alert("Selamat Datang di QuizFarrel");
    </script>
@stop
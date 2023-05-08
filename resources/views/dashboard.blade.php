@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>&emsp;Anda sekarang berada didalam halaman <strong>Dashboard</strong> QuizFarrel.</p>

    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-thumbs-up"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number">25,410</span>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width: 60%"></div>
                </div>
            <span class="progress-description">60% Increase in 30 Days</span>
        </div>
    </div>

    <div class="small-box bg-info">
        <div class="inner">
            <h3>24</h3>
            <p>New Orders</p>
        </div>
        <div class="icon">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="#" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>

    <div class="small-box bg-gradient-success">
        <div class="inner">
            <h3>64</h3>
            <p>User Registrations</p>
        </div>
    <div class="icon">
        <i class="fas fa-user-plus"></i>
    </div>
    <a href="#" class="small-box-footer">
    More info <i class="fas fa-arrow-circle-right"></i>
    </a>
    </div>
@stop

@section('footer')
    <p class="text-center">2141720243 || Muhamad Farrel</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        alert("Selamat Datang di QuizFarrel");
    </script>
@stop
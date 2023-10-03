@extends('layout')
@section('title', "Home Page")
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="row-md-4 text-center">
            <h1 style="color: #9c89b8;">Hello</h1>
            <h2 style="color: #9c89b8;"> @auth
                {{auth()->user()->name}}
                @endauth
            </h2>
        </div>
        <div class="row-md-4 text-center">
            <img src="{{ asset('images/cat.png') }}" alt="Minha Imagem" width="300" height="300">
        </div>
    </div>
</div>
@endsection
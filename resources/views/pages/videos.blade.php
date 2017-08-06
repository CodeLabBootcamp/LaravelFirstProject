@extends('layout.master')

@section('videos')
    active
@endsection

@section('css')
    <style>
        .tx-color{
            color:red;
        }
    </style>
@endsection

@section('title')
    Videos
@endsection

@section('nav-color')
    navbar-inverse
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-center tx-color">Video Id {{$id}} </h2>
            <h2 class="text-center tx-color">Video Number {{$number}} </h2>
        </div>
    </div>
@endsection

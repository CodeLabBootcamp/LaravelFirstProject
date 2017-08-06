@extends('layout.master')

@section('home')
    active
@endsection



@section('nav-color')
    navbar-default
@endsection



@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-center tx-color">Hello CodeLab This Is Home Page</h2>
        </div>
    </div>
@endsection


@section('js')
    <script>
        alert('Hello Ninjas');
    </script>
@endsection

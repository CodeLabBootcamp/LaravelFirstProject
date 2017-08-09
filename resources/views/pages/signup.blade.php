@extends('layout.master')


@section('title')
    Sign Up
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @if($errors->count() > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form enctype="multipart/form-data" method="POST" action="/signup/request" class="panel panel-warning">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" value="{{old('email')}}" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                           placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Re-Password</label>
                    <input name="re-password" type="password" class="form-control" id="exampleInputPassword1"
                           placeholder="Re-Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input name="image" type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                {{--<div class="checkbox">--}}
                {{--<label>--}}
                {{--<input type="checkbox"> Check me out--}}
                {{--</label>--}}
                {{--</div>--}}
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

@endsection
@extends('layout.master')

@section('table')
    active
@endsection

@section('title')
    Blogs
@endsection



@section('nav-color')
    navbar-default
@endsection



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="text-center table table-responsive table-bordered">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Content</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Created At</th>
                        <th class="text-center">Updated At</th>
                        <th class="text-center">Action</th>
                    </tr>

                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->id}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->content}}</td>
                            <td>{{$blog->username}}</td>
                            <td>{{$blog->created_at}}</td>
                            <td>{{$blog->updated_at}}</td>
                            <td><a href="/blogs/delete/{{$blog->id}}">Delete</a></td>
                        </tr>
                    @endforeach

                </table>
                <div class="text-center">{{$blogs->links()}}</div>
            </div>
        </div>
    </div>
@endsection


@section('js')
@endsection

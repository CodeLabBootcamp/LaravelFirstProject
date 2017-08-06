<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
</head>
<body>


@each('welcome',["Ali","Jassim","Mohammed"],'name')

{{--{{ date("Y-m-d") }}--}}
{{--@unless($var)--}}
{{--<h2>False</h2>--}}
{{--@endunless--}}

{{--@foreach($names as $name)--}}
{{--<li>{{$name}}</li>--}}
{{--@endforeach--}}

{{--@forelse($names as $name)--}}
{{--<li>{{$name}}</li>--}}
{{--@empty--}}
{{--<li>Empty</li>--}}
{{--@endforelse--}}


{{--@php--}}
{{--$x = 10;--}}
{{--$y = 20;--}}
{{--$z= $x+$y;--}}
{{--@endphp--}}

{{--{{$z}}--}}

<div id="app">
    {{--<li v-text="message"></li>--}}

    {{--@{{message}}--}}

    {{--@verbatim--}}
    {{--{{message}}--}}
    {{--@endverbatim--}}
</div>

{{--@empty(null)--}}
    {{--<h2>Hello Ninjas</h2>--}}
{{--@endempty--}}

{{--@php--}}
    {{--$j = "fawafw";--}}
{{--@endphp--}}

{{--@isset($j)--}}
    {{--<h2>Found Var </h2>--}}
{{--@endisset--}}


<script src="https://unpkg.com/vue"></script>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hi!'
        }
    })
</script>

</body>
</html>
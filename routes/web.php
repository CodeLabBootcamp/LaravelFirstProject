<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function (){
    $var = false;
    return view('about',compact('var'));
});

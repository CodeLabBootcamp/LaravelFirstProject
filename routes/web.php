<?php


//Route::get('/', function () {
//    return view('pages.home');
//});

Route::get('/','PagesController@getHome');


Route::get('/videos/{id?}/{number?}','PagesController@getVideo');




Route::get('/about', function () {
    $var = true;
    $names = ["ALi","Sabri"];
    return view('about', compact('var','names'));
});

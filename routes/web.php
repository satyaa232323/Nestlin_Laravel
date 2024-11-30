<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('pages.index');
});
Route::get('/about', function () {
    return view(view: 'pages.about');
});
Route::get('/details', function () {
    return view('pages.detail');
});

Route::get('/menu', function () {
    return view('pages.menu');
});
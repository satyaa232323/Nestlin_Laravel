<?php

use App\Livewire\HomePage;
use App\Livewire\MenuPage;
use App\Livewire\ViewKost;
use Illuminate\Support\Facades\Route;



Route::get('/about', function () {
    return view(view: 'pages.about');
});
Route::get('/details', function () {
    return view('pages.detail');
});

Route::get('/menu', function () {
    return view('pages.menu');
});

Route::get('/', HomePage::class)->name('home');
Route::get('/menu', MenuPage::class);
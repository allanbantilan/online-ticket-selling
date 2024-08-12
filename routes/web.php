<?php

use App\Http\Controllers\MoreMovies;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoreConcerts;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrowseController;

Route::get('/', HomeController::class)->name('home');

Route::get('/browse', BrowseController::class)->name('browse');

Route::get('/browse-movies', MoreMovies::class)->name('browse-movies'); 

Route::get('/browse-concerts', MoreConcerts::class)->name('browse-concerts');


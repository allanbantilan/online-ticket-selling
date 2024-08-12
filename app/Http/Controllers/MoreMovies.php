<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoreMovies extends Controller
{
    public function __invoke(){
        return view ('more-movies');
    }
}

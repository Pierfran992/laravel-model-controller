<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MyMovies extends Controller
{
    public function home(){

        $movies = Movie::all();

        $data = [
            'movies' => $movies
        ];

        return view('pages.home', $data);
    }
}

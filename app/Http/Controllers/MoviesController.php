<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();
        //dump($films);
        // $data = [
        //     'films' => $films
        // ];
        //return view('films', $data);
        return view('movies', compact('movies'));
    }
}

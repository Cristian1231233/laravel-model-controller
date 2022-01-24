<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contatti(){
        return view('contatti');
    }
    public function altro(){
        return view('altro');
    }
}

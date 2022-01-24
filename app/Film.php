<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public function index(){
        $films = film::all();
        dump($films);
        return view('films');
    }
}

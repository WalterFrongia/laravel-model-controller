<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movie extends Controller
{
    public function index(){

        return view('movie');
    }
}

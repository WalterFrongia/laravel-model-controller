<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();
        // dd($movies); //questo serve per vedere l'array, in attribute si vedono i valori
        $data = [
            //questo serve per passare alla view il contenuto
            "movies" => $movies
        ];
        return view('movie', $data);
    }
}

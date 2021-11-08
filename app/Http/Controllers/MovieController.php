<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $paste = Movie::all();
        dd($paste);
        return view('home');
    }
}

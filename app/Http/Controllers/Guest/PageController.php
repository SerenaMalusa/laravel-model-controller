<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        if (empty($movies)) abort(404);

        return view('home', compact('movies'));
    }
}

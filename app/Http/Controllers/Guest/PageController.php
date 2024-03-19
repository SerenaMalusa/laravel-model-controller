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

        return view('pages.home', compact('movies'));
    }

    public function show(int $id)
    {
        $movie = Movie::find($id);
        return view('pages.show', compact('movie'));
    }
}

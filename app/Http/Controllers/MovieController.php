<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
 public function index()
 {
    $movie = DB::table('movie')->get();
    return view('movie.index', ['movie' => $movie]);
 }

 public function create()
{
    return view('movie.create');
}

public function store(Request $request)
{
    DB::table('movie')->insert([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'genre' => $request->input('genre'),
        'rating' => $request->input('rating'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect('/movie');
}

}

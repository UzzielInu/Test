<?php

namespace App\Http\Controllers;
use App\Alumno as Alumno;
use Illuminate\Http\Request;

use App\Http\Requests;

class AlumnoController extends Controller
{
    //
    public function store(Request $request)
{
    $movie = new Movie;
    $movie->name = $request->name;
    $movie->description = $request->description;
    $movie->save();
    return redirect('alumno');
 
}
}

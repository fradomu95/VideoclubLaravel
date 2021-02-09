<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;

class CatalogController extends Controller
{

    public function getIndex()
    {
        $peliculas = Movie::all();

        return view('catalog.index', compact('peliculas'));
    }

    public function getShow($id)
    {
        $pelicula = Movie::findOrFail($id);

        return view('catalog.show', compact('pelicula'));
    }

    public function getCreate()
    {
        return view('catalog.create');
    }

    public function getEdit($id)
    {
        $pelicula = Movie::findOrFail($id);

        return view('catalog.edit', compact('pelicula'));
    }
}

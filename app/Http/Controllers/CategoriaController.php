<?php

namespace App\Http\Controllers;




use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class CategoriaController extends Controller
{
    function create()
    {
        return Inertia::render('Categories/Create');
    }
function store(Request $request)
{
    $validatedData = $request->validate([
        'nombre' => 'required',
    ]);
    Categoria::create($validatedData);
    return Redirect::route('dashboard');
}
function indexacion()
{
    $categorias = Categoria::all();
    return Inertia::render('Categories/Index', [
        'categorias' => $categorias
    ]);
}
}

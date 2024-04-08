<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Serie;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SerieController extends Controller
{
    //index
    public function index()
    {
        $series = Serie::all();
        $categories = Categoria::all();
        return Inertia::render('Series/Index', [
            'series' => $series,
            'categorias' => $categories
        ]);
    }
    //create
    public function create()
    {
        return Inertia::render('Series/Create', [
            'categorias' => Categoria::all()
        ]);

    }
    //store
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'categoria_id' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $serie = new Serie();
        $serie->titulo = $request->titulo;
        $serie->descripcion = $request->descripcion;
        $serie->categoria_id = $request->categoria_id;

        if ($request->hasFile('imagen')) {
            // Almacena la imagen en la carpeta public/imagenes
            $path = $request->file('imagen')->store('public/imagenes');

            // Obtén la URL de la imagen almacenada
            $url = Storage::url($path);

            // Almacena la URL en la base de datos
            $serie->imagen = $url;
        }

        $serie->save();

        return redirect()->route('dashboard')->with('success', 'Serie creada exitosamente');
    }
    //show
    public function show($id)
    {
        $serie = Serie::findOrFail($id);
        $videos = Video::where('serie_id', $serie->id)->get();

        return Inertia::render('Series/Show', [
            'serie' => $serie,
            'videos' => $videos
        ]);


    }
    //
}

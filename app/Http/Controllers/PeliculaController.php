<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Pelicula;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        $categorias = Categoria::all();
        return Inertia::render('Peliculas/Index', [
            'peliculas' => $peliculas,
            'categorias' => $categorias
        ]);
    }

    public function show($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return Inertia::render('Peliculas/Show', [
            'pelicula' => $pelicula
        ]);
    }
    public function preshow($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $categoria = Categoria::findOrFail($pelicula->categoria_id);
        return Inertia::render('Peliculas/PreShow', [
            'pelicula' => $pelicula,
            'categoria' => $categoria
        ]);
    }

    //store:
    public function store(Request $request)
    {

//        return print(implode(" ",$request->all()));
        try{
            $request->validate([
                'titulo' => 'required',
                'descripcion' => 'required',
                'categoria_id' => 'required',
                'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'video' => 'mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:200000'

            ]);
        }catch(\Exception $e){
            return $e;
        }



        $pelicula = new Pelicula();
        $pelicula->titulo = $request->titulo;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->categoria_id = $request->categoria_id ;

        if ($request->hasFile('imagen')) {
            // Almacena la imagen en la carpeta public/imagenes
            $imagenPath = $request->file('imagen')->store('public/imagenes');

            // Obtén la URL de la imagen almacenada
            $imagenUrl = Storage::url($imagenPath);

            // Almacena la URL en la base de datos
            $pelicula->imagen = $imagenUrl;
        }

        if ($request->hasFile('video')) {
            // Almacena el pelicula en la carpeta public/peliculas
            $peliculaPath = $request->file('video')->store('public/peliculas');

            // Obtén la URL del pelicula almacenado
            $peliculaUrl = Storage::url($peliculaPath);

            // Almacena la URL en la base de datos
            $pelicula->video = $peliculaUrl;
        }

        $pelicula->save();

        return redirect()->route('dashboard')->with('success', 'Pelicula creado exitosamente');
    }

    //create
    public function create()
    {
        $categorias = Categoria::all();
        return Inertia::render('Peliculas/Create', [
            'categorias' => $categorias
        ]);
    }
}

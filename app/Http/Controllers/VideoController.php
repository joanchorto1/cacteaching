<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Illuminate\Http\Request;


class VideoController extends Controller
{
    //Show
    public function show($id)
    {
        $video = Video::findOrFail($id);
        return Inertia::render('Videos/Show', [
            'video' => $video
        ]);
    }

    public function store(Request $request)
    {

//        return print(implode(" ",$request->all()));
        try{
            $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'serie_id' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:200000'

        ]);
        }catch(\Exception $e){
            return $e;
        }



        $video = new Video();
        $video->titulo = $request->titulo;
        $video->descripcion = $request->descripcion;
        $video->serie_id = $request->serie_id ;

        if ($request->hasFile('imagen')) {
            // Almacena la imagen en la carpeta public/imagenes
            $imagenPath = $request->file('imagen')->store('public/imagenes');

            // Obtén la URL de la imagen almacenada
            $imagenUrl = Storage::url($imagenPath);

            // Almacena la URL en la base de datos
            $video->imagen = $imagenUrl;
        }

        if ($request->hasFile('video')) {
            // Almacena el video en la carpeta public/videos
            $videoPath = $request->file('video')->store('public/videos');

            // Obtén la URL del video almacenado
            $videoUrl = Storage::url($videoPath);

            // Almacena la URL en la base de datos
            $video->video = $videoUrl;
        }

        $video->save();

        return redirect()->route('dashboard')->with('success', 'Video creado exitosamente');
    }

    //create

    public function create()
    {
        $series = Serie::all();
          return Inertia::render('Videos/Create', [
            'series' => $series
            ]);
    }
}

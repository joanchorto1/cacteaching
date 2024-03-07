<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\Video;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SerieController extends Controller
{
    //index
    public function index()
    {
        return view('series.index');
    }
    //create
    public function create()
    {
        return view('series.create');
    }
    //store
    public function store(Request $request)
    {
        //
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

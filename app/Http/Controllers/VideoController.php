<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Inertia\Inertia;

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
}

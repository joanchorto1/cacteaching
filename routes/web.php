<?php

use App\Models\Categoria;
use App\Models\Pelicula;
use App\Models\Serie;
use App\Models\Video;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard', ['categorias' => Categoria::all(),'series' => Serie::all(),'videos' => Video::all(),'peliculas' => Pelicula::all() ]);
    })->name('dashboard');
});


//Rutas series
Route::get('/series', [App\Http\Controllers\SerieController::class, 'index'])->name('series.index');
Route::get('/series/create', [App\Http\Controllers\SerieController::class, 'create'])->name('series.create');
Route::post('/series', [App\Http\Controllers\SerieController::class, 'store'])->name('series.store');
Route::get('/series/{id}', [App\Http\Controllers\SerieController::class, 'show'])->name('series.show');

//Rutas videos
Route::get('/videos/{id}', [App\Http\Controllers\VideoController::class, 'show'])->name('videos.show');

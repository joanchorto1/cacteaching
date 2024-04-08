<?php


use App\Models\Categoria;
use App\Models\Pelicula;
use App\Models\Serie;
use App\Models\User;
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
        return Inertia::render('Dashboard', ['clients'=> User::where('admin', 0)->get(),'admins'=> User::where('admin',1)->get(),'categorias' => Categoria::all(),'series' => Serie::all(),'videos' => Video::all(),'peliculas' => Pelicula::all() ]);
    })->name('dashboard');
});


//Rutas series
Route::get('/series', [App\Http\Controllers\SerieController::class, 'index'])->name('series.index');
Route::get('/series/create', [App\Http\Controllers\SerieController::class, 'create'])->name('series.create');
Route::post('/series', [App\Http\Controllers\SerieController::class, 'store'])->name('serie.store');
Route::get('/series/{id}', [App\Http\Controllers\SerieController::class, 'show'])->name('series.show');

//Rutas videos
Route::get('/videos/{id}', [App\Http\Controllers\VideoController::class, 'show'])->name('videos.show');
Route::post('/videos', [App\Http\Controllers\VideoController::class, 'store'])->name('videos.store');
Route::get('video/create',[App\Http\Controllers\VideoController::class, 'create'])->name('videos.create');

//Rutas peliculas
Route::get('/peliculas', [App\Http\Controllers\PeliculaController::class, 'index'])->name('peliculas.index');
Route::get('/peliculas/{id}', [App\Http\Controllers\PeliculaController::class, 'show'])->name('peliculas.show');
Route::get('/peliculas/preshow/{id}', [App\Http\Controllers\PeliculaController::class, 'preshow'])->name('peliculas.preshow');
//Route::get('/peliculas/create', [App\Http\Controllers\PeliculaController::class, 'createPelicula'])->name('peliculas.create2');
Route::post('/peliculas', [App\Http\Controllers\PeliculaController::class, 'store'])->name('peliculas.store');
Route::get('pelicula/create',[App\Http\Controllers\PeliculaController::class, 'create'])->name('peliculas.create');
//Rutas categorias
//Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/create', [App\Http\Controllers\CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categorias', [App\Http\Controllers\CategoriaController::class, 'store'])->name('categoria.store');
//Route::get('/categorias/{id}', [App\Http\Controllers\CategoriaController::class, 'show'])->name('categorias.show');

//Rutas usuarios
Route::get('/users/createAdmin', [App\Http\Controllers\UserController::class, 'createAdmin'])->name('users.createAdmin');
Route::post('/users', [App\Http\Controllers\UserController::class, 'storeAdmin'])->name('users.store');

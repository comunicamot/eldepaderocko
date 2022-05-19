<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Ckeditor;

//::::::::::::::::::::::::::: WEB ::::::::::::::::::::::::
use App\Http\Controllers\web\NewController;
use App\Http\Controllers\web\PerfilController;
use App\Http\Controllers\web\ReservaController;
use App\Http\Controllers\web\ExperienciaController;

//::::::::::::::::::::::::::: ADMIN ::::::::::::::::::::::::
use App\Http\Controllers\NewsController;


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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::post("/ckeditor/upload",[Ckeditor::class,"upload"])->name('ckeditor.upload');
Route::get("/",[HomeController::class,"index"]);
Route::get("/nosotros",[HomeController::class,"us"]);
Route::get("/contacto",[HomeController::class,"contact"]);
Route::get("/libro-de-reclamaciones",[HomeController::class,"complaintsBook"]);


//::::::::::::::::::::::::::: WEB ::::::::::::::::::::::::
Route::get("/noticias",         [NewController::class,"index"])->name('noticia');
Route::get("/noticias/{slug}",  [NewController::class,"detail"])->name('noticia.detail');

Route::get("/perfil",           [PerfilController::class,"perfil"])->name('perfil');
Route::get("/reserva",          [ReservaController::class,"reserva"])->name('reserva');
Route::get("/experiencia",      [ExperienciaController::class,"experiencia"])->name('experiencia');


Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');



//dashboard
Route::group(['middleware' => 'auth'], function () {
   
        Route::get('/admin/news',[NewsController::class,'index'])->name("news.index");
        Route::get('/admin/news/new',[NewsController::class,'create'])->name("news.create");
        Route::post('/admin/news',[NewsController::class,'store'])->name("news.store");
        Route::get('/admin/news/edit/{id}',[NewsController::class,'edit'])->name("news.edit");
        Route::post('/admin/news/update/{id}',[NewsController::class,'update'])->name("news.update");
        Route::delete('/admin/news/destroy/{id}',[NewsController::class,'destroy'])->name("news.destroy");
});
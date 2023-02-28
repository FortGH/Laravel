<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[TeamController::class,'index'])-> name('index');//mostrar todos los equipos


Route::get('/show/{team}',[TeamController::class,'show'])-> name('show'); //ver detalle equipo


Route::get('/create',[TeamController::class,'create'])->name('create'); //form para crear equipo

Route::post('/team',[TeamController::class,'store'])->name('store'); //guardar equipo creado


Route::get('/edit/{team}',[TeamController::class,'edit'])-> name('edit'); //Form editar equipo

Route::patch('/update/{team}',[TeamController::class,'update'])-> name('update'); //guardar equipo con los cambios


Route::delete('/delete/{team}',[TeamController::class,'delete'])->name('delete'); //Eliminar equipo



Route::get('/new-game/{team}',[GameController::class,'create'])->name('newGame');  //form crear partido

Route::post('/new-game',[GameController::class,'store'])->name('storeGame');  //guardar partido creado


Route::get('/games/{team}',[GameController::class,'index'])-> name('indexGames'); //mostrar todos los partidos de un equipo


Route::get('/game/{team}',[GameController::class,'show'])-> name('showGame'); //ver un solo partido de un equipo


Route::get('/edit-game/{game}',[GameController::class,'edit'])-> name('editGame');  //form editar partido

Route::patch('/update-game/{game}',[GameController::class,'update'])-> name('updateGame'); //guardar partidos con los cambios


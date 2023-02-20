<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;

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

Route::get('/',[TeamController::class,'index'])-> name('index');



Route::get('/create',[TeamController::class,'create'])->name('create');

Route::post('/team',[TeamController::class,'store'])->name('store');

Route::get('/edit/{team}',[TeamController::class,'edit'])-> name('edit');

Route::patch('/update/{team}',[TeamController::class,'update'])-> name('update');

Route::delete('/delete/{team}',[TeamController::class,'delete'])->name('delete');


Route::get('/show/{team}',[TeamController::class,'show'])-> name('show');

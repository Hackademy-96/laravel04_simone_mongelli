<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/Contatti', function(){
    return view('contatti');
})->name('contatti');

Route::post('/Contatti/submit',[PublicController::class,'contattaci_submit'])->name('contattaci');

Route::get('/Contatti/ringraziamento', function () {
    return view('ringraziamento');
})->name('ringraziamento');

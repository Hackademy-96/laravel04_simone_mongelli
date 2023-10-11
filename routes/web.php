<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/',[PublicController::class,'welcome'])->name('welcome');

Route::get('/Contatti',[PublicController::class,'contatti'])->name('contatti');

Route::post('/Contatti/submit',[PublicController::class,'contattaci_submit'])->name('contattaci');

Route::get('/Contatti/ringraziamento',[PublicController::class, 'ringraziamento'])->name('ringraziamento');

Route::get('/articoli/create', [ArticleController::class,'article'])->name('article');

Route::post('/articoli/store',[ArticleController::class, 'article_submit'])->name('article_submit');

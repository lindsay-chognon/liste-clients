<?php

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



Route::get('/', [\App\Http\Controllers\NomsDeDomaineController::class, 'index']);


// Route ressource pour noms de domaine
Route::resource('noms_de_domaine', 'App\Http\Controllers\NomsDeDomaineController');
// Route de recherche d'un nom de domaine
Route::post('nom_de_domaine_search', [\App\Http\Controllers\NomsDeDomaineController::class, 'search'])->name('nom_de_domaine_search');

// Route ressource pour clients
Route::resource('clients', 'App\Http\Controllers\ClientsController');

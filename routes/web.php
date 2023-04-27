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

Route::get('/', function () {
    return view('welcome');
});

// Route ressource pour noms de domaine
Route::resource('noms_de_domaine', 'App\Http\Controllers\NomsDeDomaineController');

// Route ressource pour clients
Route::resource('clients', 'App\Http\Controllers\ClientsController');

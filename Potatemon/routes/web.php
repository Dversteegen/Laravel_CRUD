<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

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

/* Home page*/
Route::get('/', [PokemonController::class, 'index'])->name('home');

/* Creating new items*/
Route::get('/create', [PokemonController::class, 'create'])->name('create');
Route::post('/save', [PokemonController::class, 'save'])->name('save');

/* Editing existing items*/
Route::get('/{pokemon}/edit', [PokemonController::class, 'edit'])->name('edit');
Route::put('/{pokemon}/update', [PokemonController::class, 'update'])->name('update');

/* Deleting item */
Route::delete('/{pokemon}/delete', [PokemonController::class, 'delete'])->name('delete');


<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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

// All Items
Route::get('/pizzas', [PizzaController::class, 'index']);

// New Item
Route::get('/pizzas/create' , [PizzaController::class , 'create']);

// Save Item
Route::post('/pizzas' , [PizzaController::class , 'store']);

//Show Single Item
Route::get('/pizzas/{id}' , [PizzaController::class , 'show']);
Route::delete('/pizzas/{id}' , [PizzaController::class , 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

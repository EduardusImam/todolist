<?php

use App\Http\Controllers\Halo\HaloController;
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

// Route::get('/halo',function(){
//     return  view('coba.halo');
// });

Route::get('/halo',[HaloController::class,'coba']);

Route::get('/todo',function(){
    return view("todo.app");
});

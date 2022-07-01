<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\KeepController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/keep' ,function () {
    return view('keep');
});

Route::get('/', [TodoController::class, 'index']);
Route::post('/', [TodoController::class, 'create']);

Route::get('/keep', [KeepController::class, 'index']);

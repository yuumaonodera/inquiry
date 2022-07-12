<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\KeepController;
use App\Http\Controllers\AuthorController;

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




Route::get('/', [InquiryController::class, 'index']);
Route::post('/', [InquiryController::class, 'create']);

Route::post('/keep', [InquiryController::class, 'send']);
Route::get('/keep', [InquiryController::class, 'confirm']);

Route::get('/keep', function () {
    $kings = $request->all();
    return $kings; 
});

Route::get('/', [AuthorController::class, 'index']);
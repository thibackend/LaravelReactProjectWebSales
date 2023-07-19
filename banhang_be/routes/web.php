<?php

use App\Http\Controllers\Learn\HttpRequest\RequestController;
use GuzzleHttp\Psr7\Request;
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


// Route::get('/', [DashboardController::class, 'index']);

Route::get('/getRequest', [RequestController::class, 'getForm'])->name('request');
Route::post('/getRequest', [RequestController::class, 'NewPost']);
Route::post('/file', [RequestController::class, 'handleFile']);


Route::get('fileUpLoad', function () {
    return view('Learn.HttpRequest.fileUpLoad');
})->name('fileUpLoad');
Route::post('fileUpLoad', [RequestController::class, "fileUpLoad"]);

<?php

use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:sanctum')->group(function () {
//     Route::controller(ProductController::class)->group(
//         function () {
//             Route::get('products', 'index');
//             Route::put('products/{id}', 'update');
//         }
//     );

//     Route::get('current-user',[Account::class,'current_user']);

// });

// Route::middleware('auth.Permission')->controller(function () {
//     Route::get('',[]);
// })); 

Route::controller(ProductController::class)->group(
    function () {
        Route::get('/products', 'index');
        Route::get('/products/{id}', 'show');
        Route::post('/products', 'store');
        Route::put('/products/{id}', 'update');
        Route::delete('/products/{id}', 'destroy');
    }
);

// Route::post('login',[LoginController::class,'login']);
// Route::post('register',[Account::class,'store']);

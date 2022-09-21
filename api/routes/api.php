<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Cors;
use App\Http\Controllers\Api\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/products','index');
    Route::post('/product','store');
    Route::get('/product/{id}','show');
    Route::put("/product/{id}",'update');
    Route::delete("/product/{id}",'destroy');
});

/*
Route::group(['middleware' => Cors::class ], function () {
    //Rutas a las que se permitirá acceso
    Route::get('/products','index');
    Route::post('/product','store');
    Route::get('/product/{id}','show');
    Route::put("/product/{id}",'update');
    Route::delete("/product/{id}",'destroy');
});
*/

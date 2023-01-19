<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CarritoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::controller(ArticleController::class)->group(function(){
    Route::get('articles', 'index');
    Route::post('article', 'store');
    Route::get('article/{id}', 'show');
    Route::put('article/{id}', 'update');
    Route::delete('article/{id}', 'destroy');

});



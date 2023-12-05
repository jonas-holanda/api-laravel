<?php

use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ProductsController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {
    Route::get('/list', [ProductsController::class, 'index']);
    Route::post('/insert', [ProductsController::class, 'store']);
    Route::put('/update/{id}', [ProductsController::class, 'update']);
    Route::delete('/delete/{id}', [ProductsController::class, 'delete']);

    // Route::match(['get', 'post'], 'teste', function () {
    //     return "Teste de uma rota de dois verbos GET E POST";
    // });

});



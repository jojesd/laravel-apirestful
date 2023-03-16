<?php

use App\Http\Controllers\ApiController;
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


/// ROUTES CONTATO


Route::controller(ApiController::class)->group(function () {
    Route::get('/contato', 'createContato');
    Route::post('/contato', 'createContato');
});

Route::controller(ApiController::class)->group(function () {
    Route::get('/contatoall', 'getAllContato');
});

Route::controller(ApiController::class)->group(function () {
    Route::get('/contato/{id}', 'getContato');
});

Route::controller(ApiController::class)->group(function () {
    Route::put('/contatoatt/{id}', 'updateContato');
});

Route::controller(ApiController::class)->group(function () {
    Route::delete('/contato/{id}', 'deleteContato');
});


// ROUTES EMPRESAS


Route::controller(ApiController::class)->group(function () {
    Route::get('/empresa', 'createEmpresa');
    Route::post('/empresa', 'createEmpresa');
});

Route::controller(ApiController::class)->group(function () {
    Route::get('/empresaall', 'getAllEmpresa');
});

Route::controller(ApiController::class)->group(function () {
    Route::get('/empresa/{id}', 'getEmpresa');
});

Route::controller(ApiController::class)->group(function () {
    Route::put('/empresaatt/{id}', 'updateEmpresa');
});

Route::controller(ApiController::class)->group(function () {
    Route::delete('/empresa/{id}', 'deleteEmpresa');
});





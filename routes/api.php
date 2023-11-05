<?php

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

Route::get('sample-message', function () {

    return response()->json(array(
        "status" => 1,
        "message" => "API testing tool is working fine"
    ));
});

Route::post('sample-message', function () {

    return response()->json(array(
        "status" => 1,
        "message" => "API testing tool is working fine from hima himal "
    ));
});
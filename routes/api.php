<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::group([
    'namespace' => 'App\Http\Controllers',
], function ($router) {

    Route::get('infected', 'InfectedZombieController@infected')->name('infected');


    Route::get('notInfected', 'InfectedZombieController@notInfectd')->name('notInfected');


    Route::put('upDateStatus/{id}', 'InfectedZombieController@upDateStatus')->name('upDateStatus');


    Route::post('CreateInfected', 'InfectedZombieController@createInfected')->name('createInfected');

});

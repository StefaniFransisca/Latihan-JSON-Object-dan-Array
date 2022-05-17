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
route ::get('/kelas', 'App\Http\Controllers\KelasController@getDataKelas');
route ::get('/kelas/{idkelas}', 'App\Http\Controllers\KelasController@getDataKelasById');
route ::post('/insertkelas', 'App\Http\Controllers\KelasController@insertDataKelas');
route ::post('/insertguru', 'App\Http\Controllers\KelasController@insertDataGuru');
route ::put('/updateguru', 'App\Http\Controllers\KelasController@updateDataGuru');
route ::delete('/deleteguru', 'App\Http\Controllers\KelasController@deleteDataGuru');
route ::delete('/deleteguruparam/{id}', 'App\Http\Controllers\KelasController@deleteDataGuruParam');
route ::get('/guru', 'App\Http\Controllers\KelasController@getDataGuru');
route ::get('/gurukelas', 'App\Http\Controllers\KelasController@getDataGuruKelas');

//LATIHAN Json
route ::get('/latihan1', 'App\Http\Controllers\LatihanJson@latihansatu');
route ::get('/latihan2', 'App\Http\Controllers\LatihanJson@latihandua');
route ::get('/latihan3', 'App\Http\Controllers\LatihanJson@latihantiga');
route ::get('/latihan4', 'App\Http\Controllers\LatihanJson@latihanempat');
route ::get('/latihan5', 'App\Http\Controllers\LatihanJson@latihanlima');

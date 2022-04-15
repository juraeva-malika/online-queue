<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/services', function () {
    return view('our-services.index');
});
Route::get('/malika',
    [App\Http\Controllers\Controller::class, 'malika']
);



// Route::resource("doctors",App\Http\Controllers\Controller::class);
//bunga teng

Route::get("doctors",[App\Http\Controllers\DoctorController::class,"index"])->name("doctor.index");
Route::get("doctors/create",[App\Http\Controllers\DoctorController::class,"create"]);
Route::post("doctors/create",[App\Http\Controllers\DoctorController::class,"store"]);
// Route::update("doctors/{id}",App\Http\Controllers\DoctorController::class,"update");
// Route::delete("doctors/{id}",App\Http\Controllers\DoctorController::class,"delete");
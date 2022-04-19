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
    return view('home-page');
})->name("home");
Route::get('/services', function () {
    return view('our-services.index');
});
Route::get('/services/restoration', function () {
    return view('our-services.pages.restoration');
});
Route::get('/services/childrens-doctor', function () {
    return view('our-services.pages.childrens-doctor');
});
Route::get('/services/orthodontics', function () {
    return view('our-services.pages.orthodontics');
});
Route::get('/services/orthopedics', function () {
    return view('our-services.pages.orthopedics');
});
Route::get('/services/implantology', function () {
    return view('our-services.pages.implantology');
});
Route::get('/services/therapy', function () {
    return view('our-services.pages/therapy');
});
Route::get('/services/surgery', function () {
    return view('our-services.pages.surgery');
});
Route::get('/services/hygiene', function () {
    return view('our-services.pages.hygiene');
});
Route::get('/feedbacks', function () {
    return view('feedbacks.index');
});
Route::get('/our-work', function () {
    return view('our-work.index');
});

Route::get("/appointment", function(){
    return view("orders.create");
});
Route::get("/appointment-table", function(){
    return view("orders.table");
});
Route::post("/make-appointment",[App\Http\Controllers\OrderController::class,"store"])->name("make-appointment");
Route::get("/get-time",[App\Http\Controllers\OrderController::class,"getTime"])->name("get-time");


// Route::resource("doctors",App\Http\Controllers\Controller::class);
//bunga teng

Route::get("about",[App\Http\Controllers\DoctorController::class,"index"])->name("doctor.index");
Route::get("doctors/create",[App\Http\Controllers\DoctorController::class,"create"]);
Route::post("doctors/create",[App\Http\Controllers\DoctorController::class,"store"]);
// Route::update("doctors/{id}",App\Http\Controllers\DoctorController::class,"update");
// Route::delete("doctors/{id}",App\Http\Controllers\DoctorController::class,"delete");
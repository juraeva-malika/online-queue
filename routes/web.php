<?php

use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\OrderController;
use App\Models\Doctor;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

// front pages

Route::get('/', function () {
    return view('pages/home', ['doctors'=>Doctor::all()]);
})->name("home");

Route::get("/about",[App\Http\Controllers\DoctorController::class,"index"])
->name("pages.about-us");

Route::get('/our-work', function () {
    return view('pages.our-work');
});
Route::get('/feedbacks', function () {
    return view('pages.feedbacks');
});
Route::get("/appointment", function(){
    return view("pages.appointment");
});
Route::prefix("services")->group(function(){
    Route::get('/restoration', function () {
        return view('pages.our-services.restoration');
    });
    Route::get('/childrens-doctor', function () {
        return view('pages.our-services.childrens-doctor');
    });
    Route::get('/orthodontics', function () {
        return view('pages.our-services.orthodontics');
    });
    Route::get('/orthopedics', function () {
        return view('pages.our-services.orthopedics');
    });
    Route::get('/implantology', function () {
        return view('pages.our-services.implantology');
    });
    Route::get('/therapy', function () {
        return view('pages.our-services.therapy');
    });
    Route::get('/surgery', function () {
        return view('pages.our-services.surgery');
    });
    Route::get('/hygiene', function () {
        return view('pages.our-services.hygiene');
    });

});

Route::post("/make-appointment",[App\Http\Controllers\OrderController::class,"store"])->name("make-appointment");
Route::get("/get-time",[App\Http\Controllers\OrderController::class,"getTime"])->name("get-time");
Route::get("/get-doctors-by-service",[App\Http\Controllers\OrderController::class,"getDoctorsByService"])->name("get-doctors-by-service");
Route::get("/appointment-table", function(){
    return view("admin.orders.table");
});

Route::prefix("admin")
->middleware(['auth'])
->group(function(){
    Route::get("/", function(){
        return view("admin.index", ["orders"=>Order::all()]);
    })->name("admin.index");
    Route::prefix("doctors")->group(function(){
        Route::get("/", [DoctorController::class,"index"])->name("admin.doctor.index");
        Route::get("/create",[DoctorController::class,"create"]);
        Route::post("/create",[DoctorController::class,"store"]);
        Route::post("/", [DoctorController::class,"destroy"]);
        Route::get("/edit/{id}", [DoctorController::class,"edit"]);
        Route::post("/edit/{id}", [DoctorController::class,"update"]);
        // Route::update("/{id}",App\Http\Controllers\DoctorController::class,"update");
        // Route::delete("/{id}",App\Http\Controllers\DoctorController::class,"delete"); 
    });
    Route::prefix("services")->group(function(){
        Route::get("/", [ServiceController::class,"index"])->name("admin.service.index");
        Route::get("/create", [ServiceController::class,"create"]);
        Route::post("/create", [ServiceController::class,"store"]);
        Route::post("/", [ServiceController::class, "destroy"]);
        Route::get("/edit/{id}", [ServiceController::class, "edit"]);
        Route::post("/edit/{id}", [ServiceController::class, "update"]);

    });
    Route::prefix("orders")->group(function(){
        Route::get("/",[OrderController::class, "index"])->name("admin.order.index");
        Route::get("/create",[OrderController::class, "create"]);
        Route::post("/create",[OrderController::class, "store"]);
        Route::post("/",[OrderController::class, "destroy"]);
        Route::get("/edit/{id}", [OrderController::class, "edit"]);
        Route::post("/edit/{id}", [OrderController::class, "update"]);
        Route::get("/approve", [OrderController::class, "approve"]);
        Route::get("/reject", [OrderController::class, "reject"]);
    });
});


require __DIR__.'/auth.php';

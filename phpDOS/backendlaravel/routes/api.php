<?php

use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;

Route::get("/test", function(){
    return "El backend funciona correctamente"; 
});

// Route::get("/backend/{id}", [BackendController::class, "get"]);

Route::get("/backend", [BackendController::class, "getAll"]);

Route::post("/backend", [BackendController::class, "create"]);

Route::get("/backend/{id?}", [BackendController::class, "get"]);

Route::put("/backend/{id?}", [BackendController::class, "update"]);

Route::delete("/backend/{id?}", [BackendController::class, "delete"]);

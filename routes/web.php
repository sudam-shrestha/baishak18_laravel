<?php

use App\Http\Controllers\FrontendController;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class,'welcome']);


Route::get("/about", [FrontendController::class,'about']);


Route::post("/save-company", [FrontendController::class,'save_company']);
Route::delete("/delete-company/{id}", [FrontendController::class,'delete_company']);

// HTTP Method
//get->read
//post->create
//put/patch ->update
//delete->delete

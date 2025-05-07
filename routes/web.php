<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\StudentController;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class,'welcome'])->name('home');

Route::get("/about", [FrontendController::class,'about'])->name('about');

// Company Routes
Route::post("/save-company", [FrontendController::class,'save_company'])->name('save_company');
Route::delete("/delete-company/{id}", [FrontendController::class,'delete_company'])->name('delete_company');
Route::get("/edit-company/{id}", [FrontendController::class,'edit_company']);
Route::patch("/update-company/{id}", [FrontendController::class,'update_company']);


// Course ROutes
Route::get("/course", [CourseController::class,'course']);
Route::post("/save-course", [CourseController::class,'save_course']);

// Admission ROutes
Route::get("/admission", [AdmissionController::class,'index'])->name('admission');
Route::post("/admission/store", [AdmissionController::class,'store'])->name('admission.store');

// Student Route
Route::resource("/student", StudentController::class)->names('student');

// HTTP Method
//get->read
//post->create
//put/patch ->update
//delete->delete

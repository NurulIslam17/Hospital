<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

// add doc
Route::get('/add_doctor_view',[AdminController::class,'addDoc']);
//Upload
Route::post('/uPdoctor',[AdminController::class,'upload']);
//appointment
Route::post('/appointment',[AdminController::class,'appointment']);
//My appointment
Route::get('/my_appointment',[HomeController::class,'myAppointment']);
//cancle appointment
Route::get('/cancel/{id}',[HomeController::class,'cencleAppontment']);

// admin Appointment
Route::get('/view_appointments',[AdminController::class,'adminAppointment']);

// admin approvement and cancelation
Route::get('/approve/{id}',[AdminController::class,'approveByAdmin']);
Route::get('/cancle/{id}',[AdminController::class,'cancleByAdmin']);

//all_doc
Route::get('/all_doc',[AdminController::class,'allDoc']);

// appint send MAil
Route::get('/sendMail/{id}',[AdminController::class,'sendMail']);
Route::post('/send/{id}',[AdminController::class,'send']);

//delete and update doctor
Route::get('deleteDoc/{id}',[AdminController::class,'deleteDoc']);
Route::get('update/{id}',[AdminController::class,'updateDoc']);

//edit Doc
Route::post('/editDoctor/{id}',[AdminController::class,'editDoc']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

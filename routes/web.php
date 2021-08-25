<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\data;
use App\Http\Controllers\profile;
use App\Http\Controllers\formValidator;
use App\Http\Controllers\getData;
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

Route::get('/', function () { return view('home'); });
Route::get('list',[users::class,'list']);
//login links
Route::view('login','login');
Route::view('login_2','login_2');
Route::view('staff','staff_file/staff');
// Route::post('profile',[profile::class,'profile']);
Route::get('profile',[getData::class,'student_requested_data']);
Route::post('validate_student',[formValidator::class,'validating_student']);
Route::post('validate_staff',[formValidator::class,'validating_staff']);

//staff Routes
Route::view('staff_profile','./staff_file/staff');
Route::get('staff_acc',[getData::class,'fetch_data_acc']);
Route::get('staff_bus',[getData::class,'fetch_data_bus']);
Route::get('staff_lib',[getData::class,'fetch_data_lib']);
Route::get('staff_comp',[getData::class,'fetch_data_comp']);
Route::get('staff_plab',[getData::class,'fetch_data_plab']);
Route::get('/changeStatus',[getData::class,'changeStatus_std'])->name('changeStatus');
Route::get('/requested_status',[getData::class,'requested_status']);

//checking
Route::get('check',[getData::class,'checking']);

//update plab staff checking
Route::get('/status_update/{id}',[getData::class,'update_value_plab']);
//update account
Route::get('/status_update_account/{id}',[getData::class,'update_value_account']);
//updating bus
Route::get('/status_update_bus/{id}',[getData::class,'update_value_bus']);
//updating computer
Route::get('/status_update_comp/{id}',[getData::class,'update_value_comp']);
//updating library
Route::get('status_update_lib/{id}',[getData::class,'update_value_lib']);


Route::get('/status_request_account/{id}',[getData::class,'request_value_account']);



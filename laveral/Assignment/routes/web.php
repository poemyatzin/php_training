<?php

use App\Http\Controllers\StudentController;
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

Route::get('/test',[StudentController::class,'index']);
Route::get('addstudent', [StudentController::class,'creat']);
Route::post('addstudent', [StudentController::class,'store']);
Route::get('editstudent/{id}', [StudentController::class,'edit']);
Route::put('updatestudent/{id}', [StudentController::class,'update']);
Route::delete('deletestudent/{id}', [StudentController::class, 'delete']);



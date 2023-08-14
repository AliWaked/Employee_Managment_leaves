<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('/dashboard', 'dashboard');

Route::resource('/admin/dashboard/leave', LeaveController::class)->names('leave');
Route::resource('/admin/dashboard/employee', EmployeeController::class)->names('employee');

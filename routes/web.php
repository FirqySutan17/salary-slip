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

// Dashboard Route
Route::get('/slip-pdf', [App\Http\Controllers\SalarySlipController::class, 'salary_slip'])->name('salary');
Route::get('/slip-pdf-generate', [App\Http\Controllers\SalarySlipController::class, 'salary_slip_generate'])->name('salary_generate');

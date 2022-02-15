<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/applogin', function () {
    return view('applogin');
});

Auth::routes();

Route::post('store', [App\Http\Controllers\ApplicantController::class, 'store'])->name('applicant');
Route::get('/appregister', [App\Http\Controllers\ApplicantController::class, 'index'])->name('appregister');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



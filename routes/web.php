<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SecretaryController;
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

Auth::routes();
Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('tncs', [AdminController::class, 'tncs'])->name('admin.tncs');
    Route::get('pallua', [AdminController::class, 'pallua'])->name('admin.pallua');
    Route::get('caritannorte', [AdminController::class, 'caritan'])->name('admin.caritan');
    Route::get('atulayan', [AdminController::class, 'atulayan'])->name('admin.atulayan');
    Route::get('annafunan', [AdminController::class, 'annafunan'])->name('admin.annafunan');
    Route::get('bagay', [AdminController::class, 'bagay'])->name('admin.bagay');
    Route::get('tecs', [AdminController::class, 'tecs'])->name('admin.tecs');
    Route::get('tagga-dadda', [AdminController::class, 'taggad'])->name('admin.taggad');
    Route::get('dadda', [AdminController::class, 'dadda'])->name('admin.dadda');
    Route::get('capatan', [AdminController::class, 'capatan'])->name('admin.capatan');
    Route::get('namabbalan', [AdminController::class, 'namabbalan'])->name('admin.namabbalan');
    Route::get('libag', [AdminController::class, 'libag'])->name('admin.libag');
    Route::get('gosi', [AdminController::class, 'gosi'])->name('admin.gosi');
    Route::get('twcs', [AdminController::class, 'twcs'])->name('admin.twcs');
    Route::get('buntun', [AdminController::class, 'buntun'])->name('admin.buntun');
    Route::get('ugac', [AdminController::class, 'ugac'])->name('admin.ugac');
    Route::get('sangab', [AdminController::class, 'sangab'])->name('admin.sangab');
    Route::get('catnuevo', [AdminController::class, 'catnuevo'])->name('admin.catnuevo');
    Route::get('catpardo', [AdminController::class, 'catpardo'])->name('admin.catpardo');
    Route::get('cates', [AdminController::class, 'cates'])->name('admin.cates');
    Route::get('tnecs', [AdminController::class, 'tnecs'])->name('admin.tnecs');
    Route::get('carig', [AdminController::class, 'carig'])->name('admin.carig');
    Route::get('carignorte', [AdminController::class, 'carigno'])->name('admin.carigno');
    Route::get('linao', [AdminController::class, 'linao'])->name('admin.linao');
    Route::get('larionbajo', [AdminController::class, 'larionba'])->name('admin.larionba');
    Route::get('larionalto', [AdminController::class, 'larional'])->name('admin.larional');
    Route::get('balzaineast', [AdminController::class, 'balzain'])->name('admin.balzain');
    Route::get('pengue-ruyu', [AdminController::class, 'pengue'])->name('admin.pengue');
    Route::get('cnhs', [AdminController::class, 'cnhs'])->name('admin.cnhs');
    Route::get('catnhs', [AdminController::class, 'catnhs'])->name('admin.catnhs');
    Route::get('linaonhs', [AdminController::class, 'lnhs'])->name('admin.lnhs');
    Route::get('gosinhs', [AdminController::class, 'gnhs'])->name('admin.gnhs');
    Route::get('tugwest', [AdminController::class, 'tugwest'])->name('admin.tugwest');
    Route::get('tugscie', [AdminController::class, 'tugscie'])->name('admin.tugscie');
    Route::get('annafunanis', [AdminController::class, 'annafunanis'])->name('admin.annafunanis');
    Route::get('carigis', [AdminController::class, 'carigis'])->name('admin.carigis');
    Route::get('libagis', [AdminController::class, 'libagis'])->name('admin.libagis');
    Route::get('namabbalanis', [AdminController::class, 'namabbalanis'])->name('admin.namabbalanis');
    Route::get('capatanis', [AdminController::class, 'capatanis'])->name('admin.capatanis');
    Route::get('cnhs-shs', [AdminController::class, 'cnhsshs'])->name('admin.cnhsshs');
    Route::get('catnhs-shs', [AdminController::class, 'catnhsshs'])->name('admin.catnhsshs');
    Route::get('gnhs-shs', [AdminController::class, 'gnhsshs'])->name('admin.gnhsshs');
    Route::get('lnhs-shs', [AdminController::class, 'lnhsshs'])->name('admin.lnhsshs');
    Route::get('tugwest-shs', [AdminController::class, 'tugwestshs'])->name('admin.tugwestshs');
    Route::get('tugscie-shs', [AdminController::class, 'tugscieshs'])->name('admin.tugscieshs');
    Route::get('carigis-shs', [AdminController::class, 'carigishs'])->name('admin.carigisshs');
    Route::get('logout', [AdminController::class, 'perform'])->name('admin.logout');
});

Route::group(['prefix'=>'secretary', 'middleware'=>['isSecretary','auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [SecretaryController::class, 'index'])->name('secretary.dashboard');
    Route::get('logout', [SecretaryController::class, 'perform'])->name('secretary.logout');
});

Route::group(['prefix'=>'applicant', 'middleware'=>['isApplicant','auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [ApplicantController::class, 'index'])->name('applicant.dashboard');
    Route::get('logout', [ApplicantController::class, 'perform'])->name('applicant.logout');
});

Route::post('store', [App\Http\Controllers\ApplicantController::class, 'store'])->name('applicant');
Route::get('/appregister', [App\Http\Controllers\ApplicantController::class, 'appregister'])->name('appregister');
Route::get('/applogin', [App\Http\Controllers\ApplicantController::class, 'applogin'])->name('applogin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





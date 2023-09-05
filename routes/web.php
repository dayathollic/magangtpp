<?php

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RapatController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DatanyaController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\LogActivityController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\SetelahLoginController;
use App\Http\Controllers\DokumenLelangController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\ChangePasswordUserController;
use App\Http\Controllers\ChangePasswordAdminController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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


Route::get('/', [HomeController::class, 'index']);
// Route::resource('/home', 'App\Http\Controllers\HomeController@index');
Route::get('detail/{id}', 'App\Http\Controllers\DetailController@index');
// Route::get('/home/detail/{id}','DetailController@index');
// register
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);
// login
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'authenticate']);
// logout
Route::post('/logout', [LoginController::class,'logout']);
// Route::get('profileuser','App\Http\Controllers\ProfileUserController@index');
// Route::put('profileuser','App\Http\Controllers\ProfileUserController@update');

Route::group(['middleware' => ['auth','cekrole:admin']],function(){
    Route::resource('/admin/dashboard', DashboardController::class);
    // Route::get('/admin/profile','App\Http\Controllers\ProfileController@index');
    // Route::put('/admin/profile','App\Http\Controllers\ProfileController@update');
    Route::resource('/admin/profile', ProfileController::class);
    Route::resource('/admin/laporan', LaporanController::class);
    Route::resource('/admin/rapat', RapatController::class);
    Route::resource('/admin/kontrak', KontrakController::class);
    Route::resource('/admin/dokumentasi', DokumentasiController::class);
    Route::resource('/admin/dokumenlelang', DokumenLelangController::class);
    Route::resource('/admin/data', DatanyaController::class);
    Route::resource('/admin/usermanagement', UserManagementController::class);
    Route::resource('/admin/activity', LogActivityController::class);
    Route::resource('/admin/changepassword', ChangePasswordAdminController::class);
    // Route::get('changepasswordadmin','App\Http\Controllers\ChangePasswordAdminController@index');
    // Route::post('changepasswordadmin','App\Http\Controllers\ChangePasswordAdminController@update');
    // Route::get('activity/login/logout',[App\Http\Controllers\UserManagementController::class,'activityLoginLougout'])->name('activty/login/logout');
    // Route::get('/admin/usermanagement.activity_log', [LogActivityController::class, 'userOnlineStatus']);
});
Route::group(['middleware' => ['auth','cekrole:user']],function(){
    // Route::get('/home/setelahlogin', [SetelahLoginController::class, 'index']);
    // Route::get('setelahlogin/{id}', 'App\Http\Controllers\SetelahLoginController@index');
    // Route::resource('/home/setelahlogin', SetelahLoginController::class);
    // Route::get('setelahlogin/{id}', 'App\Http\Controllers\SetelahLoginController@index');
    // Route::resource('/user/changepassword', ChangePasswordUserController::class);
    // D:\hampir jadi\FIX\New folder\revisi\app\Http\Controllers\ChangePasswordUserController.php
    Route::get('profileuser','App\Http\Controllers\ProfileUserController@index');
    Route::post('profileuser','App\Http\Controllers\ProfileUserController@update');
    Route::get('changepassworduser','App\Http\Controllers\ChangePasswordUserController@index');
    Route::post('changepassworduser','App\Http\Controllers\ChangePasswordUserController@update');
});

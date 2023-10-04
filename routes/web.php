<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\HomeController;

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
    return view('frontend.index');
});

Route::get('/code', function () {
    return view('frontend.pages.code');
});

Route::get('/code/more', function () {
    return view('frontend.pages.code_more');
});

 // backend routes
Route::get('/admin/login', [AdminController::class, 'adminLoginForm'])->name('admin.login.form');
Route::post('/admin-login', [AdminController::class, 'adminLogin'])->name('admin.login');


Route::group(['middleware'=>'admin'],function(){
Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');


});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

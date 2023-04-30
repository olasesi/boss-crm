<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

//Auth::routes();

//Frontpage

Route::group(['middleware'=>'stay.auth'], function(){
    Route::get('/', [FrontpageController::class, 'index'])->name('frontpage.index');
    Route::post('/', [FrontpageController::class, 'postLogin'])->name('frontpage.login');
});
//Admin
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard.index');
    Route::get('/users', function () {return view('v1.admin.user'); })->name('users.index');
    Route::get('/users-create', [UserController::class, 'create'])->name('users.create');


    Route::get('logout', [UserController::class, 'logoutUser'])->name('logout.logout');
});




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

//Route::get('/', 'ManagementUserController');

//Route::resource('/user', ManagementUserController::class);
// Route::get("/home", function(){
//     return view("home");
// });

// Route::group(['namespace' => 'Frontend'], function(){
//     Route::resource('home', 'HomeController');
// });

Route::group(['namespace' => 'Backend'], function(){
    Route::resource('dashboard', 'DashboardController');
    Route::resource('pendidikan', 'PendidikanController');
    Route::resource('pengalaman_kerja', 'PengalamanKerjaController');
});
// Route::get("/dashboard", function(){
//         return view("dashboard");
//     });
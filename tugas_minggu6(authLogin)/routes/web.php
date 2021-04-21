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
Route::get('/error', function () {
    return view('error');
})->name('error');

Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('roleAdmin');

    Route::middleware(['admin'])->group(function(){
        Route::get('admin',[AdminController::class, 'index']);
    });
    Route::get('/logout', function(){
        Auth::logout();
        redirect('/');
    });
});


Route::get('admin/profile', function(){

});//->middleware(CheckAge::class);

//Route::group(['middleware' =>['web']], function(){
//
//});

// Route::middleware(['web', 'subscribed'])->group(function(){

// });
//Route::put('post/{id}', function(id){
    //
//})->middleware('role:editor');
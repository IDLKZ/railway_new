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

Route::get("/",[\App\Http\Controllers\FrontendController::class,"index"])->name("home");
Route::get("/manager",[\App\Http\Controllers\FrontendController::class,"managers"])->name("managers");
Route::get("/docs",[\App\Http\Controllers\FrontendController::class,"document"])->name("docs");

Auth::routes(["register"=>false]);


Route::get("/logout",function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect("home");
});
Route::group(["middleware"=>"admin"],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

    Route::resource('managers', App\Http\Controllers\ManagerController::class);

    Route::resource('documents', App\Http\Controllers\DocumentController::class);

    Route::resource('files', App\Http\Controllers\FileController::class);

    Route::resource('headers', App\Http\Controllers\HeaderController::class);

    Route::resource('backgrounds', App\Http\Controllers\BackgroundController::class);

    Route::resource('contacts', App\Http\Controllers\ContactController::class);
});


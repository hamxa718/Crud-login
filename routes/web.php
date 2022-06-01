<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
  
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
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/', function () {
    return view('welcome');
});
Route::post("submit-category",[CategoryController::class,'store']);
Route::get("mainpage",[CategoryController::class,'index']);
Route::get("All-Categories",[CategoryController::class,'show']);
Route::post("logout",[CategoryController::class,'show']);
Route::view('Add-Categories','Form');
Route::get("Delete-category/{id}",[CategoryController::class,'destroy']);
Route::get("Update-category/{id}",[CategoryController::class,'edit']);
Route::post("Category-Updated/{id}",[CategoryController::class,'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

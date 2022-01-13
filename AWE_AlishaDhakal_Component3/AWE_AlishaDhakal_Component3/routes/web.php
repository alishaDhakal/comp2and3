<?php

use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
})->name('home');

Route::get('/home', function () {
    return view('welcome');
})->name('home');


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard ');
//})->name('dashboard');

Route::get('/dashboard', [ProductController::class,'show'])->middleware('auth','isAdmin');
Route::delete('/product/delete/{id}', [ProductController::class, 'deleteProduct']);
Route::put('/product/editForm/{id}', [ProductController::class, 'editProduct']);
Route::put('/product/edit/{id}', [ProductController::class, 'editProduct']);

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

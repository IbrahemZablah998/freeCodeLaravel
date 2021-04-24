<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postsController;
use App\Http\Controllers\profilesController;
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

Route::get('/post/create', [postsController::class, 'create']);


Route::post('/post', [postsController::class, 'store']);
Route::get('/post/{post}', [postsController::class, 'show']);

Route::get('/profile/{user}/edit', [profilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [profilesController::class, 'update'])->name('profile.update');
Route::get('/profile/{user}', [profilesController::class, 'index'])->name('profile.show');

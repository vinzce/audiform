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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Upload Routes
Route::group(['prefix' => 'upload'], function() {
    Route::get('/', [App\Http\Controllers\UploadController::class, 'index'])->name('upload');
    Route::get('/create', [App\Http\Controllers\UploadController::class, 'create'])->name('upload.create');
    Route::post('/post', [App\Http\Controllers\UploadController::class, 'store'])->name('upload.store');
    Route::get('/update/{audiopost}', [App\Http\Controllers\UploadController::class, 'edit'])->name('upload.edit');
    Route::post('/update/{audiopost}', [App\Http\Controllers\UploadController::class, 'update'])->name('upload.update');
});

// User Routes
Route::group(['prefix' => 'u'], function() {
    Route::get('{username}', [App\Http\Controllers\UserController::class, 'index'])->name('user.profile');
});

// Audio Routes
Route::group(['prefix' => 'a'], function() {
    Route::get('{audiopost}', [App\Http\Controllers\AudioPostController::class, 'index'])->name('audiopost');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Frontend;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/all-new_release', function () {
    return view('all_new_releases');
})->name('all_new_release');
// Route::get('/', [Frontend::class, 'index'])->name('home');
// Route::get('/about', [Frontend::class, 'about'])->name('about');

// Route::get('/categoryForm', [CategoryController::class, 'create'])->name('categoryCreate');

// Route::post('/categoryStore', [CategoryController::class, 'store'])->name('categoryStore');





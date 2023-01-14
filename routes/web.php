<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReleaseController;
use App\Models\Dashboard;
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

// Route::get('/releases', function () {
//     return view('releases');
// });

Route::prefix('releases')->group(function(){
    Route::get('/', [ReleaseController::class, 'index'])->name('releases-index');
    Route::get('/create', [ReleaseController::class, 'create'])->name('releases-create');
    Route::post('/', [ReleaseController::class, 'store'])->name('releases-store');
    Route::get('/{id}', [ReleaseController::class, 'edit'])->name('releases-edit');
    Route::put('/{id}', [ReleaseController::class, 'update'])->name('releases-update');
    // Route::post('/', [ReleaseController::class, 'delete'])->name('releases-delete');
    Route::delete('/{id}',[ReleaseController::class, 'destroy'])->where('id','[0-9]+')->name('releases-destroy');
});

Route::prefix('categories')->group(function(){
    Route::get('/', [CategoryController::class, 'index'])->name('category-index');
    Route::get('/create', [CategoryController::class, 'create'])->name('category-create');
    Route::post('/', [CategoryController::class, 'store'])->name('category-store');
});

Route::prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard-index');
    Route::get('/create', [DashboardController::class, 'create'])->name('dashboard-create');
    Route::post('/', [DashboardController::class, 'store'])->name('dashboard-store');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

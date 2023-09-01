<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Owners\AboutController;
use App\Http\Controllers\Frontend\HomeController;





Route::get('/', [HomeController::class, 'index'])->name('home');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/is_admin', [AdminController::class, 'index']);
    
});


Route::prefix('owner')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [OwnerController::class, 'index'])->name('owner');
    Route::resource('/about', AboutController::class);
    
});


require __DIR__.'/auth.php';

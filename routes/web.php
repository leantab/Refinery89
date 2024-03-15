<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group([
        'middleware' => 'auth',
        'prefix' => 'users',
    ], function () {
        Route::get('/', [UserController::class, 'index'])->name('users');
        Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/', [UserController::class, 'store'])->name('users.store');
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('edit/{user}', [UserController::class, 'update'])->name('users.update');
        Route::post('/delete/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    }
);

Route::group([
        'middleware' => 'auth',
        'prefix' => 'departments',
    ], function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('departments');
        Route::get('/{department}', [DepartmentController::class, 'show'])->name('departments.show');
        Route::get('/create', [DepartmentController::class, 'create'])->name('departments.create');
        Route::post('/', [DepartmentController::class, 'store'])->name('departments.store');
        Route::get('/edit/{department}', [DepartmentController::class, 'edit'])->name('departments.edit');
        Route::post('edit/{department}', [DepartmentController::class, 'update'])->name('departments.update');
        Route::post('/delete/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');
    }
);

// AUTHENTICATION
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

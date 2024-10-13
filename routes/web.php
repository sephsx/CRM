<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/user/', [AdminController::class, 'getUser'])->name('admin.user.index');
    Route::get('/admin/client', [AdminController::class, 'getClient'])->name('admin.client.index');
    Route::get('/admin/projects', [AdminController::class, 'createProject'])->name('admin.project.index');
    Route::post('/admin/projects', [AdminController::class, 'storeProject'])->name('admin.project.index');
    Route::get('admin/task', [AdminController::class, 'getTask'])->name('admin.task.index');
});



require __DIR__ . '/auth.php';

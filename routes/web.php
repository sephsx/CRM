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
    Route::get('/admin/user/', [AdminController::class, 'getUser'])->name('admin.user.users');
    Route::get('/admin/client', [AdminController::class, 'getClient'])->name('admin.client.clients');
    Route::get('/admin/projects', [AdminController::class, 'createProject'])->name('admin.project.projects');
    Route::get('/admin/project/create', [AdminController::class, 'createProject'])->name('admin.project.create');
    Route::post('/admin/project/store', [AdminController::class, 'storeProject'])->name('admin.project.store');
});



require __DIR__ . '/auth.php';

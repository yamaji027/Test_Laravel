<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/index',[TestController::class, 'index'])->name('index');
Route::get('/create',[TestController::class, 'create'])->name('create');
Route::post('/store', [TestController::class, 'store'])->name('tests.store');
Route::get('/show/{id}', [TestController::class, 'show'])->name('tests.show');
Route::get('/edit/{id}', [TestController::class, 'edit'])->name('tests.edit');
Route::post('/update/{id}', [TestController::class, 'update'])->name('tests.update');
Route::post('/destroy/{id}', [TestController::class, 'destroy'])->name('tests.destroy');


require __DIR__.'/auth.php';

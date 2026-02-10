<?php

use App\Http\Controllers\Pages\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::prefix('services')->group(function () {
    Route::get('/', [PageController::class, 'services'])->name('services');
    Route::get('/manned-guarding', [PageController::class, 'mannedGuarding'])->name('services.manned-guarding');
    Route::get('/special-services', [PageController::class, 'specialServices'])->name('services.special-services');
    Route::get('/k9-unit', [PageController::class, 'k9Unit'])->name('services.k9-unit');
    Route::get('/consultancy-training', [PageController::class, 'consultancyTraining'])->name('services.consultancy-training');
});

Route::get('/sectors', [PageController::class, 'sectors'])->name('sectors');
Route::get('/operations', [PageController::class, 'operations'])->name('operations');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

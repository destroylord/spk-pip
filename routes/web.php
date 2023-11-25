<?php

use App\Http\Controllers\Student\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('welcome'))->name('welcome');

Route::get('form-pendaftaran-siswa', [StudentController::class, 'registration'])->name('registration.student');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
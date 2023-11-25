<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('welcome'))->name('welcome');

Route::get('form-pendaftaran-siswa', fn () => view('student-registration-form'))->name('form-registration-student');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
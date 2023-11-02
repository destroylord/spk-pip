<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn() => to_route('form-registration-student'));

Route::get('form-pendaftaran-siswa', function () {
   return view('student-registration-form'); 
})->name('form-registration-student');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
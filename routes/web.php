<?php

use Illuminate\Support\Facades\Route;


// Route::view('/', 'welcome');

Route::get('form-pendaftaran-siswa', function () {
   return view('student-registration-form'); 
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
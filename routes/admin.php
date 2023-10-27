<?php

use App\Livewire\FormGenerator;
use Illuminate\Support\Facades\Route;

Route::view('dashboard', 'admin.dashboard')->name('dashboard');
Route::get('form-generator', FormGenerator::class)->name('form-generator');
<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('dashboard', 'admin.dashboard')->name('dashboard');
Volt::route('/criteria',  'pages.criteria.criteria')->name('criteria');
Volt::route('/sub-criteria',  'pages.criteria.sub-criteria')->name('sub.criteria');
<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/servicios', 'pages.services')->name('services');
Route::view('/administracion-de-fincas', 'pages.property-management')->name('property-management');
Route::view('/asesoria', 'pages.advisory')->name('advisory');
Route::view('/area-clientes', 'pages.client-portal')->name('client-portal');
Route::view('/contacto', 'pages.contact')->name('contact');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

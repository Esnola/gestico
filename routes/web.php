<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/servicios', 'pages.servicios')->name('servicios');
Route::view('/fincas', 'pages.property')->name('fincas');
Route::view('/asesoria', 'pages.asesoria')->name('asesoria');
Route::view('/comparativa-tipografia', 'pages.font-compare')->name('font-compare');
Route::view('/area-clientes', 'pages.client-portal')->name('client-portal');
Route::view('/contacto', 'pages.contact')->name('contacto');
Route::view('/ubicacion', 'pages.ubicacion')->name('location');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
})->name('/');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

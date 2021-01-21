<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
})->name('/');
Route::get('/category', function () {
    return view('pages.category');
})->name('category');

Route::get('/product', function () {
    return view('pages.product');
})->name('product');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/news', function () {
    return view('pages.news');
})->name('news');
Route::get('/news/news-item', function () {
    return view('pages.news-item');
})->name('news-item');

Route::post('/contact//all/{id}/update', 'ContactController@updateMessageSubmit')->name('contact-update-submit');
Route::get('/contact/all/{id}/update', 'ContactController@updateMessage')->name('contact-update');
Route::get('/contact/all/{id}', 'ContactController@showMessage')->name('contact-data-message');
Route::get('/contact/all/{id}/delete', 'ContactController@deleteMessage')->name('contact-data-delete');
Route::get('/contact/all', 'ContactController@allData')->name('contact-data');
Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

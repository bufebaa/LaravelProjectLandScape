<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/form', function () {
    return view('form_text_us');
})->name('form');

Route::post('/contact/submit','App\Http\Controllers\ContactController@submit')->name('contact-form');

Route::post('/contact_message/mailrequest','App\Http\Controllers\ContactMessageController@mailrequest')->name('contact-message');

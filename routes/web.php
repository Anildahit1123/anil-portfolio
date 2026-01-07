<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('resume', function () {
    return view('frontend.Resume.resume');
})->name('resume');

Route::get('story', function () {
    return view('frontend.Story.story');
})->name('story');

Route::get('work', function () {
    return view('frontend.work.work');
})->name('work');

Route::get('service', function () {
    return view('frontend.Service.service');
})->name('service');

Route::get('portfolio', function () {
    return view('frontend.Portfolio.portfolio');
})->name('portfolio');

Route::get('contact', function () {
    return view('frontend.Contact.contact');
})->name('contact');

Route::get('test', function () {
    return view('frontend.Test.test');
})->name('test');

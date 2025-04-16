<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteOne\SiteOneController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('page')->name('page.')->controller(SiteOneController::class)->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/home', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'service')->name('service');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact','contactpost')->name('contactpost');
});

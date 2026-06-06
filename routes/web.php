<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

// Services
Route::view('/services', 'pages.services')->name('services');
Route::view('/services/soc', 'pages.soc')->name('soc');
Route::view('/services/vapt', 'pages.vapt')->name('vapt');
Route::view('/services/it-audit', 'pages.it-audit')->name('it-audit');
Route::view('/services/capacity-building', 'pages.capacity-building')->name('capacity-building');
Route::view('/services/defense-services', 'pages.defense-services')->name('defense-services');

// Solutions
Route::view('/vciso', 'pages.vciso')->name('vciso');

// Company
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/career', 'pages.career')->name('career');

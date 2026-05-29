<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\About;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get('/admin/dashboard', function () {

        $about = About::first();

        return view('admin.dashboard', compact('about'));

    })->name('admin.dashboard');

});
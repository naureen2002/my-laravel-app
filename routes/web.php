<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\About;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('portfolio.index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get('/admin/dashboard', function () {
        $about = About::first();

        return view('admin.dashboard', compact('about'));
    })->name('admin.dashboard');

    Route::resource('admin/projects', ProjectController::class)
        ->names('admin.projects');

    Route::resource('admin/skills', SkillController::class)
        ->names('admin.skills');

    Route::resource('admin/contacts', ContactController::class)
        ->names('admin.contacts');

    Route::resource('admin/about', AboutController::class)
        ->names('admin.about');
});
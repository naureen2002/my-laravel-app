<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public marketing site (guests) — views under resources/views/frontend/public
|--------------------------------------------------------------------------
| "/" serves the public landing page. It is named 'home' so existing partials
| that call route('home') keep resolving. This build has no auth/portal; the
| brief's logged-in -> dashboard redirect belongs to the vciso-service-integrator
| portal project, not here.
|
| Additional public pages are added to the public.* group below, one section at
| a time, as the brief is built out (public.services, public.soc, public.vapt …).
*/
Route::view('/', 'frontend.public.home')->name('home');

Route::name('public.')->group(function () {
    Route::view('/clients', 'frontend.public.clients')->name('clients');
    Route::view('/services/malware-analysis', 'frontend.public.service-detail')->defaults('service', 'malware-analysis')->name('malware-analysis');
    Route::view('/services/next-gen-firewall', 'frontend.public.service-detail')->defaults('service', 'next-gen-firewall')->name('next-gen-firewall');
    Route::view('/services/backup-recovery', 'frontend.public.service-detail')->defaults('service', 'backup-recovery')->name('backup-recovery');
    Route::view('/services/digital-forensics', 'frontend.public.service-detail')->defaults('service', 'digital-forensics')->name('digital-forensics');
    // public.services, public.soc, public.vapt, … (added per brief section)
});

/*
|--------------------------------------------------------------------------
| Legacy Bootstrap pages — kept working until each is migrated under public.*
|--------------------------------------------------------------------------
*/

// Services
Route::view('/services', 'pages.services')->name('services');
Route::view('/services/soc', 'frontend.public.soc')->name('soc');
Route::view('/services/vapt', 'frontend.public.vapt')->name('vapt');
Route::view('/services/it-audit', 'pages.it-audit')->name('it-audit');
Route::view('/services/capacity-building', 'pages.capacity-building')->name('capacity-building');
Route::view('/services/defense-services', 'pages.defense-services')->name('defense-services');

// Solutions
Route::view('/vciso', 'frontend.public.vciso')->name('vciso');

// Company
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/career', 'pages.career')->name('career');

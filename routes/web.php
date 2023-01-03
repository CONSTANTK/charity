<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

   Route::get('/', function () {
    return view('welcome');
    });

    Route::get('home', [\App\Http\Controllers\Front\WelcomeController::class,'index'])->name('front.index');

    Route::get('about', [\App\Http\Controllers\Front\AboutController::class,'about'])->name('front.about');

    Route::get('causes', [\App\Http\Controllers\Front\CausesController::class,'causes'])->name('front.causes');

    Route::get('services', [\App\Http\Controllers\Front\ServicesController::class,'services'])->name('front.services');

    Route::get('donate', [\App\Http\Controllers\Front\DonateController::class,'donate'])->name('front.donate');

    Route::get('our-team', [\App\Http\Controllers\Front\TeamController::class,'team'])->name('front.team');

    Route::get('testimonies', [\App\Http\Controllers\Front\TestimonyController::class,'testimony'])->name('front.testimony');

    Route::get('contact-us', [\App\Http\Controllers\Front\ContactController::class,'index'])->name('front.contact');

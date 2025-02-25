<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FAQController;
use Illuminate\Support\Facades\Route;


// Home Page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Profile Page
Route::view('/profile', 'pages.profile')->name('profile');

// Dashboard Page
Route::view('/dashboard', 'pages.dashboard')->name('dashboard');

// FAQ Page
/**
 * Route::view('/faq', 'pages.faq')->name('faq');
 */
Route::resource('faq', FAQController::class);


// Home Page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Profile Page
Route::view('/profile', 'pages.profile')->name('profile');

// Dashboard Page
Route::view('/dashboard', 'pages.dashboard')->name('dashboard');

// FAQ Page (Dynamic)
Route::resource('faq', FAQController::class); // Generates faq.index, faq.create, etc.

// Blog Page (Dynamic)
Route::resource('blogs', BlogController::class); // Generates blogs.index, blogs.create, etc.

Route::fallback(function () {
    return view('errors.404');
});

// Static Blog Page
/**
Route::view('/blog', 'pages.blog')->name('blog');

// Static Sub-Blogs (e.g., Data Science, SWOT)
Route::view('/blog/datascience', 'blogs.datascience')->name('blogs.datascience');
Route::view('/blog/swotanalyse', 'blogs.swotanalyse')->name('blogs.swotanalyse');
Route::view('/blog/studychoice', 'blogs.studychoice')->name('blogs.studychoice');
Route::view('/blog/feedback', 'blogs.feedback')->name('blogs.feedback');
Route::view('/blog/programexperience', 'blogs.programexperience')->name('blogs.programexperience');
*/

// Dynamic Blog Routes
Route::resource('blogs', BlogController::class);

Route::fallback(function () {
    return view('errors.404');
});

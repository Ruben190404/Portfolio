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
    return view('index');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/projects', ['App\Http\Controllers\RoutesController', 'projectOpen']);

Route::get('/about-me', ['App\Http\Controllers\RoutesController', 'aboutmeOpen']);

Route::get('/contact', ['App\Http\Controllers\RoutesController', 'contactOpen'])
    ->name('contact');

Route::get('/donate', ['App\Http\Controllers\RoutesController', 'donateOpen']);

Route::resource('/admin/projects', \App\Http\Controllers\AdminProjectsController::class)
    ->middleware(['auth'])
    ->names('admin.projects');

Route::resource('/admin/languages', \App\Http\Controllers\AdminLanguagesController::class)
    ->middleware(['auth'])
    ->names('admin.languages');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/admin/contacts', \App\Http\Controllers\AdminContactsController::class, ['except' => ['store']])
        ->middleware(['auth'])
        ->names('admin.contacts');
});
Route::resource('/admin/contacts', \App\Http\Controllers\AdminContactsController::class, ['only' => ['store']])
    ->names('admin.contacts');

Route::resource('/admin/donations', \App\Http\Controllers\AdminDonationsController::class)
    ->middleware(['auth'])
    ->names('admin.donations');

require __DIR__.'/auth.php';

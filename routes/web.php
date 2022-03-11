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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/projects', ['App\Http\Controllers\ProjectsController', 'projectOpen']);

Route::get('/about-me', ['App\Http\Controllers\ProjectsController', 'aboutmeOpen']);

Route::get('/contact', ['App\Http\Controllers\ProjectsController', 'contactOpen']);

Route::get('/donate', ['App\Http\Controllers\ProjectsController', 'donateOpen']);

require __DIR__.'/auth.php';

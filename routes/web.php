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

Route::get('/projects', ['App\Http\Controllers\RoutesController', 'projectOpen']);

Route::get('/about-me', ['App\Http\Controllers\RoutesController', 'aboutmeOpen']);

Route::get('/contact', ['App\Http\Controllers\RoutesController', 'contactOpen']);

Route::get('/donate', ['App\Http\Controllers\RoutesController', 'donateOpen']);

Route::get('/Adashboard', ['App\Http\Controllers\RoutesController', 'AdashboardOpen']);

Route::get('/projectAdmin', ['App\Http\Controllers\RoutesController', 'PaOpen']);

Route::get('/contactAdmin', ['App\Http\Controllers\RoutesController', 'CaOpen']);

Route::get('/languageAdmin', ['App\Http\Controllers\RoutesController', 'LaOpen']);

require __DIR__.'/auth.php';

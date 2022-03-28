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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/projects', ['App\Http\Controllers\RoutesController', 'projectOpen']);

Route::get('/about-me', ['App\Http\Controllers\RoutesController', 'aboutmeOpen']);

Route::get('/contact', ['App\Http\Controllers\RoutesController', 'contactOpen']);

Route::get('/donate', ['App\Http\Controllers\RoutesController', 'donateOpen']);

Route::get('/admin/projects', ['App\Http\Controllers\AdminProjectsController', 'index'])
    ->middleware(['auth'])
    ->name('admin.projects.list');

Route::get('/admin/projects/edit/{project}', ['App\Http\Controllers\AdminProjectsController', 'edit'])
    ->middleware(['auth'])
    ->name('admin.projects.edit');

Route::post('/admin/projects/edit/{project}', ['App\Http\Controllers\AdminProjectsController', 'update'])
    ->middleware(['auth']);

require __DIR__.'/auth.php';

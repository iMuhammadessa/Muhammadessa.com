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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('home');

Route::get(
    '/admin/dashboard',
    'App\Http\Controllers\PagesController@dashboard'
)->name('admin.dashboard');

Route::get('/admin/main', 'App\Http\Controllers\PagesController@main')->name(
    'admin.main'
);

Route::get(
    '/admin/services',
    'App\Http\Controllers\PagesController@services'
)->name('admin.services');

Route::get(
    '/admin/portfolio',
    'App\Http\Controllers\PagesController@portfolio'
)->name('admin.portfolio');

Route::get(
    '/admin/about',
    'App\Http\Controllers\PagesController@about'
)->name('admin.about');

Route::get(
    '/admin/contact',
    'App\Http\Controllers\PagesController@contact'
)->name('admin.contact');

Auth::routes();

// Route::get('/home', [
//     App\Http\Controllers\HomeController::class,
//     'index',
// ])->name('home');

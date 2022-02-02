<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware('auth')->namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('/admin')->group(function () {
    Route::get('/', function(){
        return view('admin.layouts.food.create');
//        return view('admin.layouts.dashboard');
    })->name('admin-dashboard');
    Route::get('/', function(){
        return view('admin.layouts.dashboard');
    })->name('admin-dashboard');
    Route::get('/food', function(){
        return view('admin.layouts.food.create');
    })->name('foods');
    Route::get('/category', function(){
        return view('admin.layouts.category.create');
    })->name('category');
    Route::get('/category/list', function(){
        return view('admin.layouts.category.list');
    })->name('category-list');

});




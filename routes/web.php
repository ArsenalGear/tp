<?php
	
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
	
	Route::group(['prefix' => 'admin'], function () {
		Voyager::routes();
	});
	
	Route::get('/services', function () {
		return view('service');
	});
	
	Route::get('/news', function () {
		return view('news');
	})->name('news');
	
	Route::get('/projects', function () {
		return view('projects');
	})->name('projects');
	
	Route::get('/contacts', function () {
		return view('contacts');
	})->name('contacts');

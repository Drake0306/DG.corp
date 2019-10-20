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



Route::get('/',('Controller@Welcome'));
Route::get('/regester',('Controller@Regester'));
Route::post('/regester/regester_account',('Controller@Regester_new_Account'));

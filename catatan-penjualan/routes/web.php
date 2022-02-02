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

Route::get('/', 'AddController@home');
Route::get('/viewRec', 'AddController@viewRecords');
Route::get('/edit/{id}', 'AddController@edit');
Route::post('/store', 'AddController@store');
Route::patch('/update/{id}', 'AddController@update');
Route::delete('/delete/{id}', 'AddController@delete');

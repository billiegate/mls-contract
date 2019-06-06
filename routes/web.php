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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/form', 'ContractController@index')->name('form');
Route::post('/contract/step1', 'ContractController@step1')->name('step1');
Route::post('/contract/step2', 'ContractController@step2')->name('step2');
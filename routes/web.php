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
//Route::get('/', 'HomeController@log');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/home/receipt/create', 'HomeController@receiptCreate')->name('home.receipt.create');
Route::get('/home/receipt/print', 'HomeController@receiptPrint')->name('home.receipt.print');
Route::get('/entries/print/{id}', 'EntryController@print')->name('entry.print');
Route::get('/entry/create', 'EntryController@create');
Route::post('/entry', 'EntryController@store')->name('create');
Route::get('/entries', 'HomeController@entries')->name('entries');
Route::get('/entry/{entry}/edit', 'EntryController@edit')->name('entry.edit');
Route::patch('/entry/{entry}', 'EntryController@update')->name('entry.update');
Route::get('/entry/{id}', 'EntryController@destroy')->name('destroy');
Route::post('/entry/print-selected', 'EntryController@printSelected')->name('entry.printSelected');



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

Route::get('/hola_mundo', function() {
    return "Hola mundo";
});

/*Route::get('/books', 'BooksController@index')->name('books.index');
Route::get('/books/create', 'BooksController@create')->name('books.create');
Route::post('/books', 'BooksController@store')->name('books.store');
Route::get('/books/{id}/edit', "BooksController@edit")->name("books.edit");*/

Route::resource('books', 'BooksController');
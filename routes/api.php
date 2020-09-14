<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('authors', 'AuthorController@index');
Route::get('authors/multi', 'AuthorController@moreThanTwo');
Route::get('authors/{author}', 'AuthorController@show');
Route::post('authors', 'AuthorController@store');
Route::put('authors/{author}', 'AuthorController@update');
Route::delete('authors/{author}', 'AuthorController@delete');

Route::get('books', 'BookController@index');
Route::get('books/{book}', 'BookController@show');
Route::get('books/author/{authorId}', 'BookController@list');
Route::post('books', 'BookController@store');
Route::put('books/{book}', 'BookController@update');
Route::delete('books/{book}', 'BookController@delete');

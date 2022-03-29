<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\LinksController;

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
//Route::get('/', [LinksController::class, 'link']);
Route::get('shortest-link', 'App\Http\Controllers\LinksController@index')->name('index');
Route::post('shortest-link-post', 'App\Http\Controllers\LinksController@store')->name('mylink');
Route::get('{short}', 'App\Http\Controllers\LinksController@shortLink')->name('shortest');
//Route::get('delete/{id}','LinkDeleteController@destroy');
//delete data
Route::get('delete-links','app/Http/Controllers/LinkDeleteController@index');
Route::get('delete/{id}','app/Http/Controllers/LinkDeleteController@destroy');

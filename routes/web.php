<?php
use App\Http\Middleware\isStatusAdmin;
use App\Http\Middleware\isStatusUser;

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
Route::get('/', 'Siasatan@homepage');

Route::resource('data','Siasatan'); 
Route::resource('pegawai','Pegawai');


Route::get('/search/data','Siasatan@search');
Route::get('/filter','Siasatan@index');

Auth::routes();
Route::get('/home', 'Siasatan@homepage')->name('home');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/print','Siasatan@printPDF')->name('print');





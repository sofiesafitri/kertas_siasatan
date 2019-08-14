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
Route::get('/', function () {
    return view('welcome');
});

Route::resource('data','Siasatan'); 
Route::resource('pegawai','Pegawai');


Route::get('/search/data','Siasatan@search');

Auth::routes();
Route::get('/home', 'Siasatan@homepage')->name('home');
Route::get('/admin','AdminController@index')->name('admin');

Route::prefix('/admin')->group(function(){
Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@Login')->name('admin.login.submit');
Route::get('/','AdminController@index')->name('admin.dashboard');
});

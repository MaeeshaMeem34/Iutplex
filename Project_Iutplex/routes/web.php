
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

Route::get('/Homepage', 'PagesController@Home');

Route::get('/About', 'PagesController@About');

Route::get('/Contacts', 'PagesController@Contacts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'PagesController@saveregister');

Route::post('/save_register', 'PagesController@save_register');

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

use App\photo;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/photo', function () {
    return view('photo');
});

Route::get('/regi', function () {
    return view('regi');
});


Route::match(['get', 'post'],'sigin', 'MembersController@sigin');

Route::match(['get', 'post'],'regin', 'MembersRegistration@regin');


Route::post('/login', function () {
   return view('login');
});
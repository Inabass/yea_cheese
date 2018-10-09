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

Route::post('/photo', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'event_id' => 'required|max:255',
    ]);

    if($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
});
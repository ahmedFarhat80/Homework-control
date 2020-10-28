<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//لازم اعرف هاد الاوبجكت

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



Route::get('ahmed', function () {
    $name='Ahmed Farhat';

    return view('ahmed',compact('name'));
});

Route::post('send',function(Request $request) {
    $name = $request->name;
    return view('ahmed',compact('name'));
});
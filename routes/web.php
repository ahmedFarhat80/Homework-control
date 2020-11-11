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



Route::get('tasck', function () {
    $tascks = [ 
       '1'  => 'tasck 1'
       ,
       '2'  =>'tasck 2'
       ,
       '3'  =>'tasck 3'
    ];
    return view('tasck' , compact('tascks'));
});



Route::get('tasck/show/{id}', function ($id) {
    $tascks = [ 
       '1'  => 'tasck 1'
       ,
       '2'  =>'tasck 2'
       ,
       '3'  =>'tasck 3'
    ];

    $tasck = $tascks[$id];
    return view('show' , compact('tasck'));
});


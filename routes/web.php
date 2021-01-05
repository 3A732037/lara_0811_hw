<?php

use Illuminate\Support\Facades\Route;

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

Route::get('hello/{name?}', function ($name='Everybody') {
    return 'Hello, '.$name;
})->name('hello.index');

Route::get('/',function(){
    return'welcome';
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return'admindashboard';
    });
});


Route::get('/',function(){
    return view('welcome');
});
Route::get('/',function(){
    return redirect('welcome');
});

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
    return view('layout.dashboard');
});
Route::get('/check1',function(){
    return view('auth.login');
});
Route::get('/home',function(){
    return view('layout.dashboard');
});
Route::get('/newuserroute',function(){
    return view('users.checkin');
});
Route::get('/checkoutroute',function(){
    return view('users.checkout');
});
Route::get('/confirmin',function(){
    return view('confirm.in');
});
Route::get('/invoicein',function(){
    return view('payment.invoicein');
});
Route::get('/updatein',function(){
    return view('update.updatein');
});
Route::get('/rooms',function(){
    return view('roomdetail.roomdetails');
});
Route::get('/customer',function(){
    return view('customers');
});
Route::get('/invoiceout',function(){
    return view('payment.invoiceout');
});
Route::get('/amount',function(){
    return view('amount.show');
});

Route::get('/addroom',function(){
    return view('roomdetail.create');
});
Route::resource('roomdetail', 'roomcontroller');

Route::resource('admindata','admincontroller');
Route::resource('newrecord','newrecordcontroller');
Route::get('/update/{new}/edit', 'newrecordcontroller@edit');
Route::get('/update/{new}','newrecordcontroller@update');
Route::get('/show', 'newrecordcontroller@index');
Route::get('/showextra', 'newrecordcontroller@showextra');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

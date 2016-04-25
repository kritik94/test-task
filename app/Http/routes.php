<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BalanceController@index');

Route::get('/balances', 'BalanceController@index');
Route::get('/balances/transfer', 'BalanceController@transferForm');
Route::post('/balances/transfer', 'BalanceController@makeTransfer');

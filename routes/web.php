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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::post('dashboard', [
	'uses' => 'Auth\loginController@login',
	'as' => 'dashboard'
]);


 Route::group(['middleware' => 'admin'], function(){
	Route::get('admin', 'adminController@index');
}); 

 Route::group(['middleware' => 'supplier'], function(){
	Route::get('supplier/index', 'supplierController@index');
}); 

Route::get('supplier/register', 'supplierController@regis');
Route::post('supplier/register/success', 'supplierController@add');
Route::get('supplier/viewproduct', 'supplierController@viewproduct');
Route::post('supplier/addproduct/success', 'supplierController@addproduct');
Route::get('supplier/product/destroy/{id}', 'supplierController@destroy');
//////////////////////////////////////////////////////////////////////
Route::get('customer/transaction', 'customerController@index');
Route::get('customer/transaction/search', 'customerController@search');
Route::post('customer/transaction/search/product/{id}', 'customerController@showingproduct');
Route::post('customer/transaction/success', 'customerController@store');


//////////////////////////////////////////////////////////////////////
Route::get('transaction/index', 'transactionController@index');
Route::get('transaction/index/activate/{id}', 'transactionController@activate');
Route::get('transaction/index/destroy/{id}', 'transactionController@destroy');
//////////////////////////////////////////////////////////////////////

Route::get('admin/managesupplier', 'adminController@show');
Route::get('admin/managesupplier/activate/{id}', 'adminController@activate');
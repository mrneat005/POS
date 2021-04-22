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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/orders','OrderController');//orders.index
Route::resource('/products','ProductController');//products.index
Route::resource('/ordersDetail','OrderDetailsController');//ordersDetail.index
Route::resource('/setting','SettingController');//setting.index
Route::resource('/supplier','SupplierController');//supplier.index
Route::resource('/users','UserController');//users.index
Route::resource('/company','CompanyController');//company.index
Route::resource('/transaction','TransactionController');//transaction.index

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index')->name('home');


//main features
//staff
Route::resource('staffs', 'StaffController');

//staff salary
Route::resource('salary', 'SalaryController');
Route::get('salaries/{type}', 'SalaryController@report');
Route::get('salary-by-staff/{id}', 'SalaryController@salary_by_staff');
Route::get('salary/create/{id}', 'SalaryController@create');

//Purpose
Route::resource('purposes', 'PurposeController');
//Debits
Route::resource('debits', 'DebitController');
//Credit
Route::resource('credits', 'CreditController');
//reports
Route::get('reports', 'ReportController@index');
Route::post('debit-report', 'ReportController@debit');
Route::post('credit-report', 'ReportController@credit');
Route::post('statement-report', 'ReportController@statement');


//Settings
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');
Route::resource('products', 'ProductsController');

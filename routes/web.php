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

Route::get('/home', 'HomeController@index')->name('admin.home');

Route::get('/employee', 'AdminController@employeeShow')->name('admin.employee');
Route::post('/addemployee', 'AdminController@employeeAdd')->name('admin.addemployee');
Route::post('/deleteemployee', 'AdminController@employeeDelete')->name('admin.deleteemployee');

Route::get('/log/in', 'AdminController@logInShow')->name('admin.log.in');
Route::get('/log/out', 'AdminController@logOutShow')->name('admin.log.out');

Route::post('/checkin', 'UserController@checkin')->name('user.checkin');
Route::post('/checkout', 'UserController@checkout')->name('user.checkout');

Route::get('/resetlogin', 'AdminController@resetLogin')->name('resetlogin');
Route::get('/resetlogout', 'AdminController@resetLogOut')->name('resetlogout');
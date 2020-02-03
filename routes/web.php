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
})->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dropdownlist','DataController@getCountries');
Route::get('dropdownlist/getstates/{id}','DataController@getStates');


Route::get('/usershow',"DemoController@getData");
Route::post('/usershow',"DemoController@insert");
//Route::view('/DemoController',"DemoController@formSubmit");
Route::get('/delete/{id}',"DemoController@delete");
Route::post('updateuser',"DemoController@update");
Route::get('usershow','DemoController@index');
Route::get('update/{id}','DemoController@show');



Route::get('/employees', 'EmployeeController@index')->name('employees.index');
Route::get('/employees/{id}/edit','EmployeeController@edit')->name('employees.edit');
Route::get('/employees/{id}/delete','EmployeeController@delete')->name('employees.delete');
Route::get('/create','EmployeeController@create')->name('employees.create');
Route::post('/create','EmployeeController@insert')->name('employees.insert');
Route::post('/employees/update','EmployeeController@update')->name('employees.update');
//Route::post('updateuser','DemoController@update');
<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('/customer','customerApiController@getAllData'); // for fetching all the data of all customer 

Route::get('/customer/{id}','customerApiController@findById'); //for fetching the dat of particular customer

Route::post('/customer','customerApiController@insert');

Route::put('/customer/{id}','customerApiController@update');

Route::delete('/customer/{id}','customerApiController@delete');




Route::get('/customerCountry','customerCountryController@display');
Route::post('/customerCountry','customerCountryController@insert');


Route::get('/jointable','joinTableController@index');

Route::get('/downloadFile','FileController@downloadfile');

Route::post('/UploadFile','FileController@UploadFile');

?>
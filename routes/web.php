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
    return view('homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//demo
Route::get('/getProvince','MyController@getProvince');
Route::get('/getDistrict','MyController@getDistrict');
Route::get('/getWard','MyController@getWard');
Route::get('/getVillage','MyController@getVillage');

//homepage
Route::get('/homepage','MyController@getHomePage');
Route::get('/seach','MyController@getSeachPage');



//admin
Route::group(['prefix'=>'admin'],function (){
    Route::get('dashboard','AdminController@getDashboard');
    Route::get('list-users','AdminController@getListUser');
    Route::get('edit-user','AdminController@editUser');
    Route::post('edit-user','AdminController@saveUser');
});

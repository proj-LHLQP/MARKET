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

//DEMO
Route::get('/homepage','HomeController@getHomePage');
Route::get('/blogs','HomeController@getBlogsPage');
Route::get('/blog-detail','HomeController@getBlogDetail');
Route::get('/about','HomeController@getAboutPage');
Route::get('/contact','HomeController@getContact');
Route::get('/category','HomeController@getCategory');
Route::get('/product-detail','HomeController@getProductDetail');
Route::get('/checkout','HomeController@geCheckOut');
Route::get('/cart-detail','HomeController@geCartDetail');


//admin
Route::group(['prefix'=>'admin','as'=>'admin.'],function (){
    Route::get('dashboard','AdminController@getDashboard');
    Route::get('list-users','AdminController@getListUser');
    Route::get('edit-user','AdminController@editUser');
    Route::post('edit-user','AdminController@saveUser');

    Route::get('role','RoleController@index');
    Route::get('edit-role/{id}','RoleController@edit');
    Route::post('update-role/{id}','RoleController@store')->name('role.update');


});

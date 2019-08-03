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

Route::get('/home', 'HomeController@getHomePage')->name('home');


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
Route::get('/post-product',"HomeController@getPostProduct");

//admin
Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'auth'],function (){
    Route::get('dashboard','AdminController@getDashboard');
    Route::get('not-permit', function () {
        return view('admin.not-permit');
    })->name('not-permit');

    //Phong start user manager
    Route::group(['middleware' => 'role:admin'],function(){
        Route::get('users','UserController@index')->name('user.index');
    });

    Route::get('edit-user/{id}','UserController@edit')->name('user.edit');
    Route::get('delete-user/{id}','UserController@destroy')->name('user.delete');
    Route::post('update-user/{id}','UserController@update')->name('user.update');
    Route::post('store-user','UserController@store')->name('user.store');

    //Phong start role manager
    Route::get('role','RoleController@index')->name('role.index');
    Route::get('create-role','RoleController@create')->name('role.create');
    Route::post('store-role','RoleController@store')->name('role.store');
    Route::get('edit-role/{id}','RoleController@edit');
    Route::post('update-role/{id}','RoleController@update')->name('role.update');
    Route::get('delete-role/{id}','RoleController@destroy');

});

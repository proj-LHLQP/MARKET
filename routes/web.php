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
Route::get('/list-cate','MyController@getCate');
Route::get('/category-child','MyController@getCateChild');

//post-products
Route::post('post-product','ProductController@saveProducts');
Route::post('uploadImg', 'ProductController@postImages');
Route::post('deleteImg', 'ProductController@deleteImages');

//listCategory
Route::get('list-category','CategoryController@getAllCategory');
//DEMO
Route::get('/homepage','HomeController@getHomePage')->name(HOME_PAGE);
Route::get('/blogs','HomeController@getBlogsPage');
Route::get('/blog-detail','HomeController@getBlogDetail');
Route::get('/about','HomeController@getAboutPage');
Route::get('/contact','HomeController@getContact');
Route::get('/category','HomeController@getCategory');
Route::get('/product-detail','HomeController@getProductDetail');
Route::get('/checkout','HomeController@getCheckOut');
Route::get('/cart-detail','HomeController@getCartDetail');
Route::get('/post-product',"HomeController@getPostProduct");

//homepage
Route::post('login', 'MyController@postLogin')->name(CLIENT_LOGIN);
Route::post('register', 'MyController@postRegister')->name(CLIENT_REGISTER);
Route::get('logout', 'MyController@getLogout')->name(CLIENT_LOGOUT);



//admin
Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'auth'],function (){
    Route::get('dashboard','AdminController@getDashboard');
    Route::get('not-permit', function () {
        return view('admin.not-permit');
    })->name('not-permit');

    //Phong start user manager
    Route::group(['middleware' => 'role:'.config('access.roles.admin')],function(){
        Route::get('users','UserController@index')->name('user.index');
    });

    Route::get('create-user','UserController@create')->name('user.create');
    Route::get('profile','UserController@profile')->name('user.profile');
    Route::post('update-infor','UserController@updateInfor')->name('user.update-infor');
    Route::post('update-pass','UserController@updatePassword')->name('user.update-pass');
    Route::get('edit-user/{id}','UserController@edit')->name('user.edit');
    Route::get('delete-user/{id}','UserController@destroy')->name('user.delete');
    Route::post('update-user/{id}','UserController@update')->name('user.update');
    Route::post('store-user','UserController@store')->name('user.store');

    //category

    Route::resource('category','CategoryController');

    //Phong start role manager
    Route::get('role','RoleController@index')->name('role.index');
    Route::get('create-role','RoleController@create')->name('role.create');
    Route::post('store-role','RoleController@store')->name('role.store');
    Route::get('edit-role/{id}','RoleController@edit');
    Route::post('update-role/{id}','RoleController@update')->name('role.update');
    Route::get('delete-role/{id}','RoleController@destroy');

});

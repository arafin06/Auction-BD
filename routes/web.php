<?php

//front

Route::get('/',  [
    'uses'   =>  'onlineAuction@index',
    'as'     =>'/'
    ]);
Route::get('/login_user',  [
    'uses'   =>  'User@loginUser',
    'as'     =>'login_user'
    ]);

Route::get('/user_login',  [
    'uses'   =>  'User@loginUserCheck',
    'as'     =>'user_login'
    ]);


Route::get('/add-product',  [
    'uses'   =>  'onlineAuction@addProduct',
    'as'     =>'add-product'
    ]);

Route::get('/select_category{id}',  [
    'uses'   =>  'onlineAuction@selectCategory',
    'as'     =>'select_category'
]);
Route::get('/select_product{id}',  [
    'uses'   =>  'onlineAuction@selectProduct',
    'as'     =>'select_product'
]);
Route::get('/registration',  [
    'uses'   =>  'User@registration',
    'as'     =>'registration'
]);


Route::post('/new-client',  [
    'uses'   =>  'ClientController@newClient',
    'as'     =>'new-client'
]);
Route::post('/client-logout',  [
    'uses'   =>  'ClientController@logoutClient',
    'as'     =>'client-logout'
]);

Route::post('/login-client',  [
    'uses'   =>  'ClientController@loginClient',
    'as'     =>'login-client'
]);









Route::get('/about',  [
    'uses'   =>  'User@nabout',
    'as'     =>'about'
]);

Route::get('/achievements',  [
    'uses'   =>  'User@nachievements',
    'as'     =>'achievements'
]);

Route::get('/contact',  [
    'uses'   =>  'User@ncontact',
    'as'     =>'contact'
]);

Route::get('/termsandconditions',  [
    'uses'   =>  'User@ntermsandconditions',
    'as'     =>'termsandconditions'
]);


Route::post('/message',  [
    'uses'   =>  'ClientController@message',
    'as'     =>'message'
]);


Route::post('/bid',  [
    'uses'   =>  'ClientController@bid',
    'as'     =>'bid'
]);










//admin

Route::get('/client-list',  [
    'uses'   =>  'ClientController@clientList',
    'as'     =>'client-list'
]);



Route::get('/product_list',  [
    'uses'   =>  'productList@productView',
    'as'     =>'product_list'
]);

Route::get('/add_category',  [
    'uses'   =>  'newCategory@addCategory',
    'as'     =>'add_category'
]);
Route::post('/new_category',  [
    'uses'   =>  'newCategory@newCategory',
    'as'     =>'new_category'
]);
Route::get('/manage_category',  [
    'uses'   =>  'newCategory@manageCategory',
    'as'     =>'manage_category'
]);
Route::get('/delete_category{id}',  [
    'uses'   =>  'newCategory@deleteCategory',
    'as'     =>'delete_category'
]);

Route::get('/add_product',  [
    'uses'   =>  'ProductController@addProduct',
    'as'     =>'add_product'
]);
Route::get('/manage_product',  [
    'uses'   =>  'ProductController@manageProduct',
    'as'     =>'manage_product'
]);
Route::post('/new_product',  [
    'uses'   =>  'ProductController@newProduct',
    'as'     =>'new_product'
]);
Route::get('/delete_product{id}',  [
    'uses'   =>  'ProductController@deleteProduct',
    'as'     =>'delete_product'
]);
Route::get('/message-view',  [
    'uses'   =>  'userList@viewMessage',
    'as'     =>'message-view'
]);


Route::get('/view-bid{id}',  [
    'uses'   =>  'productList@viewBid',
    'as'     =>'view-bid'
]);


Route::get('/view-client{id}',  [
    'uses'   =>  'productList@viewClient',
    'as'     =>'view-client'
]);






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

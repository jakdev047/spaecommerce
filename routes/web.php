<?php

Route::get('/', function () {
    return view('welcome');
});



//admin routes
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::post('admin/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/reset', 'Auth\AdminResetPasswordController@reset');
Route::get('admin/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout'); //admin logout

Route::get('/admin', 'AdminController@index')->name('admin.dashboard'); //admin dashboard

//category
Route::get('/categories', 'CategoryController@index')->name('category');
Route::post('/store/category', 'CategoryController@store')->name('store.category');

<?php

Route::name('admin')->get('/', 'App\Http\Controllers\Admin\DashboardController@index');

//User Management
Route::name('user')->get('/user', 'App\Http\Controllers\Admin\UserController@index');
Route::name('user.create')->get('/user/create', 'App\Http\Controllers\Admin\UserController@create');
Route::name('user.store')->post('/user/store', 'App\Http\Controllers\Admin\UserController@store');
Route::name('user.delete')->get('/user/delete/{id}', 'App\Http\Controllers\Admin\UserController@destroy');

//Permission
Route::name('permission')->get('/permission', 'App\Http\Controllers\Admin\PermissionController@index');
Route::name('permission.check')->get('/permission/check', 'App\Http\Controllers\Admin\PermissionController@check');
Route::name('permission.store')->post('/permission/store', 'App\Http\Controllers\Admin\PermissionController@store');
Route::name('permission.delete')->get('/permission/store/delete/{id}', 'App\Http\Controllers\Admin\PermissionController@delete');

//Roles
Route::name('role')->get('/role', 'App\Http\Controllers\Admin\RoleController@index');
Route::name('role.create')->get('/role/create', 'App\Http\Controllers\Admin\RoleController@create');
Route::name('role.store')->post('/role/store', 'App\Http\Controllers\Admin\RoleController@store');
Route::name('role.edit')->get('/role/edit/{id}', 'App\Http\Controllers\Admin\RoleController@edit');
Route::name('role.view')->get('/role/view/{id}', 'App\Http\Controllers\Admin\RoleController@view');
Route::name('role.update')->post('/role/update', 'App\Http\Controllers\Admin\RoleController@update');

//Setting routes
Route::name('config')->get('/config', 'App\Http\Controllers\Admin\ConfigController@index');
Route::name('config.store')->post('/config/store', 'App\Http\Controllers\Admin\ConfigController@store');
Route::name('config.opening')->post('/config/opening', 'App\Http\Controllers\Admin\ConfigController@opening');

//Product routes
Route::name('product')->get('/product', 'App\Http\Controllers\Admin\ProductController@index');
Route::name('product.create')->get('/product/create', 'App\Http\Controllers\Admin\ProductController@create')->middleware(['permission:product-create']);;

//dealer routes
Route::name('admin')->get('/', 'App\Http\Controllers\Admin\DashboardController@index');
Route::get('/dealer', ['as' => 'dealer', 'uses' => 'App\Http\Controllers\Admin\DealerController@index' ]);
Route::get('/dealer/create', ['as' => 'dealer.create', 'uses' => 'App\Http\Controllers\Admin\DealerController@create' ]);
Route::post('/dealer/store', ['as' => 'dealer.store', 'uses' => 'App\Http\Controllers\Admin\DealerController@store' ]);

?>

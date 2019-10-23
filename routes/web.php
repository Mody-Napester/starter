<?php
Route::group(
    ['middleware' => ['cors']
    ],function (){

});

// Site Languages
Route::get('language/{language}', 'LanguagesController@setLanguage')->name('language');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Dashboard routes
|--------------------------------------------------------------------------
|
| Here is where dashboard routes exists.
|
*/

Route::group(['prefix'=>'dashboard', 'middleware' => 'auth'],function (){
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::resource('permission-groups', 'PermissionGroupsController');
    Route::resource('permissions', 'PermissionsController');
    Route::resource('roles', 'RolesController');
    Route::resource('users', 'UsersController');

    // User update data
    Route::get('user/profile', 'UsersController@showUserProfile')->name('users.showUserProfile');

    // Update password
    Route::put('users/{user}/update_password', 'UsersController@updatePassword')->name('users.update_password');

    // Reset password
    Route::get('users/{user}/reset_password', 'UsersController@resetPassword')->name('users.reset_password');
});

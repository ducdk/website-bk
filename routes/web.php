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
    return redirect()->route('main');
});

Auth::routes();

Route::get('/trang-chu', 'MainController@index')->name('main');
Route::get('/tin-tuc-su-kien/{category}', 'EventController@index')->name('event');
Route::get('/ho-tro-sinh-vien', 'HtsvController@index')->name('event');
Route::get('/cong-tac-doan-doi', 'CtddController@index')->name('event');

# Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
# Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

Route::get('/quan-ly-admin', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', 'Admin\PermissionsController@massDestroy')->name('permissions.mass_destroy');
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', 'Admin\RolesController@massDestroy')->name('roles.mass_destroy');
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', 'Admin\UsersController@massDestroy')->name('users.mass_destroy');
});

Route::group(['middleware' => ['web']], function () {
    /** The main public facing blog routes - show all posts, view a category, rss feed, view a single post, also the add comment route */
    Route::group(['prefix' => config('blogetc.blog_prefix', 'blog')], function () {
        Route::get('/{blogPostSlug}',
            'PostController@viewSinglePost')
            ->name('blogetc.single');
    });
});

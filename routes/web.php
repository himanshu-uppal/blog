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

Route::group(['middleware'=>['web']],function(){

	//Blog 
	Route::get('blog/{slug}','BlogController@getSingle')->where('slug','[\w\d\-\_]+')->name('blog.single');
	Route::get('blog','BlogController@getIndex')->name('blog.index');

	//Pages
	Route::get('/', 'PagesController@getIndex');
	Route::get('about', 'PagesController@getContactAbout');
	Route::get('contact', 'PagesController@getContact');
	Route::post('contact', 'PagesController@postContact')->name('contact.post');

	//Post
	Route::resource('posts','PostController');
});




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

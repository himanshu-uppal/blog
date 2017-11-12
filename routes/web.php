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


	//Admin
	Route::resource('admins','AdminController');

	//Role
	Route::resource('roles','RoleController');

	//Permission
	Route::resource('permissions','PermissionController',['except' => 'destroy']);

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

	//Category
	Route::resource('categories','CategoryController');

	//Media
	Route::resource('media','MediaController');

});




Route::get('/', function () {
    return view('blog.template');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController1@index')->name('admin.home');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::get('image/{filename}', ['as' => 'image.show', 'uses' => function($filename){
    $path = storage_path() . '/uploads/images/' . $filename;

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
}]);

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


//Guest Routes
Route::group(['middleware' => 'guest'], function () {
  Route::get('/', 'PagesController@index');
});

Route::get('/about', 'PagesController@about');
Route::get('/wall', 'PagesController@wall');
Route::resource('posts', 'PostsController');

Auth::routes();

//User Routes
Route::group(['middleware' => 'auth:web'], function () {
    // All my routes that needs a logged in user
    Route::get('/dashboard', 'DashboardController@index');
});



//Admin Routes
Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

});
//Admin Only Routes
Route::group(['middleware' => 'auth:admin'], function () {
    // All my routes that needs a logged in admin
    Route::get('/admin', 'AdminController@index');
    Route::prefix('admin')->group(function(){
      Route::get('/list/students', 'AdminController@list_students')->name('list.students');
      Route::get('/list/teachers', 'AdminController@list_teachers')->name('list.teachers');
    });
});



//Teacher Routes
Route::prefix('teacher')->group(function(){
  Route::get('/login', 'Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
  Route::post('/login', 'Auth\TeacherLoginController@login')->name('teacher.login.submit');
});

Route::group(['middleware' => 'auth:teacher'], function () {
    // All my routes that needs a logged in teacher
    Route::get('/teacher', 'TeacherController@index');
});

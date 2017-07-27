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
Auth::routes();





//Student Routes
Route::group(['middleware' => 'auth:web'], function () {
    // All my routes that needs a logged in user
    Route::get('/dashboard', 'StudentDashboardController@index');
    Route::prefix('student')->group(function(){
        Route::get('/profile', 'StudentDashboardController@profile')->name('student.profile');
    });
});



//Admin Routes
Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

});
//Admin Only Routes
Route::group(['middleware' => 'auth:admin'], function () {
    // All my routes that needs a logged in admin
    Route::get('/admin', 'AdminDashboardController@index');
    Route::prefix('admin')->group(function(){
      Route::resource('student', 'StudentsController');
      Route::resource('teacher', 'TeachersController');
      Route::get('student/profile/{id}' ,'AdminDashboardController@studentProfile')->name('view.student.profile');
    });

});



//Teacher Routes
Route::prefix('teacher')->group(function(){
  Route::get('/login', 'Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
  Route::post('/login', 'Auth\TeacherLoginController@login')->name('teacher.login.submit');
});

Route::group(['middleware' => 'auth:teacher'], function () {
    // All my routes that needs a logged in teacher
    Route::prefix('teacher')->group(function(){
        Route::get('/', 'TeacherDashboardController@index');
    });
});

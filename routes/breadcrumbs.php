<?php

// AdminHome
Breadcrumbs::register('admin', function($breadcrumbs)
{
    $breadcrumbs->push('Admin', route('admin'));
});

//Admin >Department list
Breadcrumbs::register('admin.department.index', function($breadcrumbs) {
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Department List', route('department.index'));
});

//Admin >Department create
Breadcrumbs::register('admin.department.create', function($breadcrumbs) {
    $breadcrumbs->parent('admin.department.index');
    $breadcrumbs->push('Create Department', route('department.create'));
});

//Admin > Department Profile
Breadcrumbs::register('admin.department.show', function($breadcrumbs, $department) {
    $breadcrumbs->parent('admin.department.index');
    $breadcrumbs->push($department->department_id, route('department.show', $department->id));
});

//Admin > Department edit
Breadcrumbs::register('admin.department.edit', function($breadcrumbs, $department) {
    $breadcrumbs->parent('admin.department.index');
    $breadcrumbs->push($department->department_id, route('department.edit', $department->id));
});

//Admin > student index
Breadcrumbs::register('admin.student.index', function($breadcrumbs) {
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Student List', route('student.index'));
});

//Admin > student create
Breadcrumbs::register('admin.student.create', function($breadcrumbs) {
    $breadcrumbs->parent('admin.student.index');
    $breadcrumbs->push('Create Student', route('student.create'));
});

//Admin > student edit
Breadcrumbs::register('admin.student.edit', function($breadcrumbs, $student) {
    $breadcrumbs->parent('admin.student.index');
    $breadcrumbs->push('Edit Student', route('student.edit', $student->id));
});

//Admin > student profile
Breadcrumbs::register('admin.student.show', function($breadcrumbs, $student) {
    $breadcrumbs->parent('admin.student.index');
    $breadcrumbs->push($student->ID_no, route('student.show', $student->id));
});

//Admin > teacher index
Breadcrumbs::register('admin.teacher.index', function($breadcrumbs){
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Teacher List', route('teacher.index'));
});

//Admin > teacher create
Breadcrumbs::register('admin.teacher.create', function($breadcrumbs) {
    $breadcrumbs->parent('admin.teacher.index');
    $breadcrumbs->push('Create Teacher', route('teacher.create'));
});

//Admin > teacher edit
Breadcrumbs::register('admin.teacher.show', function($breadcrumbs, $teacher) {
    $breadcrumbs->parent('admin.teacher.index');
    $breadcrumbs->push($teacher->ID_no, route('teacher.show', $teacher->id));
});


// |        | GET|HEAD  | admin/teacher                      | teacher.index        | App\Http\Controllers\TeachersController@index                          | web,auth:admin    |
// |        | POST      | admin/teacher                      | teacher.store        | App\Http\Controllers\TeachersController@store                          | web,auth:admin    |
// |        | GET|HEAD  | admin/teacher/create               | teacher.create       | App\Http\Controllers\TeachersController@create                         | web,auth:admin    |
// |        | GET|HEAD  | admin/teacher/{teacher}            | teacher.show         | App\Http\Controllers\TeachersController@show                           | web,auth:admin    |
// |        | PUT|PATCH | admin/teacher/{teacher}            | teacher.update       | App\Http\Controllers\TeachersController@update                         | web,auth:admin    |
// |        | DELETE    | admin/teacher/{teacher}            | teacher.destroy      | App\Http\Controllers\TeachersController@destroy                        | web,auth:admin    |
// |        | GET|HEAD  | admin/teacher/{teacher}/edit       | teacher.edit         | App\Http\Controllers\TeachersController@edit                           | web,auth:admin    |
// |        | GET|HEAD  | api/user                           |                      | Closure                                                                | api,auth:api      |
// |        | GET|HEAD  | dashboard                          |                      | App\Http\Controllers\StudentDashboardController@index                  | web,auth:web,auth |
// |        | POST      | login                              |                      | App\Http\Controllers\Auth\LoginController@login                        | web,guest         |
// |        | GET|HEAD  | login                              | login                | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest         |
// |        | POST      | logout                             | logout               | App\Http\Controllers\Auth\LoginController@logout                       | web               |
// |        | POST      | password/email                     | password.email       | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest         |
// |        | POST      | password/reset                     |                      | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest         |
// |        | GET|HEAD  | password/reset                     | password.request     | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest         |
// |        | GET|HEAD  | password/reset/{token}             | password.reset       | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,guest         |
// |        | POST      | register                           |                      | App\Http\Controllers\Auth\RegisterController@register                  | web,auth:admin    |
// |        | GET|HEAD  | register                           | register             | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,auth:admin    |
// |        | GET|HEAD  | student/profile                    | student.profile      | App\Http\Controllers\StudentDashboardController@profile                | web,auth:web,auth |
// |        | GET|HEAD  | teacher                            |                      | App\Http\Controllers\TeacherDashboardController@index                  | web,auth:teacher  |
// |        | GET|HEAD  | teacher/login                      | teacher.login        | App\Http\Controllers\Auth\TeacherLoginController@showLoginForm         | web,guest         |
// |        | POST      | teacher/login                      | teacher.login.submit | App\Http\Controllers\Auth\TeacherLoginController@login                 | web,guest  

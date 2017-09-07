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
Breadcrumbs::register('admin.teacher.edit', function($breadcrumbs, $teacher) {
    $breadcrumbs->parent('admin.teacher.index');
    $breadcrumbs->push($teacher->ID_no, route('teacher.edit', $teacher->id));
});

//Admin > teacher show
Breadcrumbs::register('admin.teacher.show', function($breadcrumbs, $teacher) {
    $breadcrumbs->parent('admin.teacher.index');
    $breadcrumbs->push($teacher->ID_no, route('teacher.show', $teacher->id));
});



//Admin > subject index
Breadcrumbs::register('admin.subject.index', function($breadcrumbs) {
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Subject List', route('subject.index'));
});

//Admin > subject create
Breadcrumbs::register('admin.subject.create', function($breadcrumbs) {
    $breadcrumbs->parent('admin.subject.index');
    $breadcrumbs->push('Add Subject', route('subject.create'));
});

//Admin > subject create
Breadcrumbs::register('admin.subject.bulkcreate', function($breadcrumbs) {
    $breadcrumbs->parent('admin.subject.create');
    $breadcrumbs->push('Bulk Add', route('subject.bulkcreate'));
});

//Admin > subject show
Breadcrumbs::register('admin.subject.show', function($breadcrumbs, $subject) {
    $breadcrumbs->parent('admin.subject.index');
    $breadcrumbs->push($subject->course_id, route('subject.show', $subject->id));
});

//Admin > subject edit
Breadcrumbs::register('admin.subject.edit', function($breadcrumbs, $subject) {
    $breadcrumbs->parent('admin.subject.index');
    $breadcrumbs->push('Edit', route('subject.edit', $subject->id));
});

// |        | GET|HEAD  | admin/subject/{subject}            | subject.show         | App\Http\Controllers\SubjectsController@show                           | web,auth:admin    |
// |        | DELETE    | admin/subject/{subject}            | subject.destroy      | App\Http\Controllers\SubjectsController@destroy                        | web,auth:admin    |
//
// |        | PUT|PATCH | admin/subject/{subject}            | subject.update       | App\Http\Controllers\SubjectsController@update                         | web,auth:admin    |
// |        | GET|HEAD  | admin/subject/{subject}/edit       | subject.edit         | App\Http\Controllers\SubjectsController@edit                           | web,auth:admin    |
//

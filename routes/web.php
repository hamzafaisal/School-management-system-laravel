<?php

Route::get('/', function () {
    return redirect()->route('login');
});

//STUDENT ROUTES
Route::get('/students', 'StudentController@index');
Route::post('/students', 'StudentController@store');
Route::get('/students/create', 'StudentController@create');
Route::get('/students/{id}', 'StudentController@show');
Route::delete('/students/{id}', 'StudentController@destroy');
Route::get('/students/{id}/edit', 'StudentController@edit');
Route::post('/students/update', 'StudentController@update');

//TEACHERS ROUTES
Route::get('/teachers', 'TeacherController@index');
Route::post('/teachers', 'TeacherController@store');
Route::get('/teachers/create', 'TeacherController@create');
Route::get('/teachers/{id}', 'TeacherController@show');
Route::delete('/teachers/{id}', 'TeacherController@destroy');

//COURSES ROUTES
Route::get('/courses', 'CourseController@index');
Route::post('/courses', 'CourseController@store');
Route::get('/courses/create', 'CourseController@create');
Route::get('/courses/{id}', 'CourseController@show');
Route::delete('/courses/{id}', 'CourseController@destroy');

//ENROLL STUDENT
Route::post('/enroll-student', 'CourseStudentController@store');




Auth::routes();
// Auth::routes([
//     'register' => false
// ]);

Route::get('/home', 'HomeController@index')->name('home');
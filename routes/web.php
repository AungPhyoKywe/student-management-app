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
Auth::routes();

Route::get('/',function (){
    return redirect('/login');
});
//page not found
Route::get('/404','PageNotFountController@index');

Route::group(['middleware' => ['login']], function() {

    //teacher
    Route::group(['middleware' => ['teacher']], function() {

    Route::resource('teacher', 'TeacherController');
    Route::get('/teachers/{id}', 'TeacherController@destroy');

    });

    //backend

    Route::get('/backend', 'SuperAdminController@index');

    //student
    Route::resource('class', 'ClassController');
    Route::resource('student', 'StudentController');

    Route::resource('payment','PaymentController');
    Route::resource('score','ScoreController');
    Route::resource('timetable', 'TimetableController');
    Route::resource('enroll', 'EnrolmentController');
    Route::resource('subject', 'SubjectController');
    Route::resource('att', 'AttController');
    Route::resource('exam', 'ExamController');
   // Route::get('/pdf','PaymentController@print_pdf');
    Route::get('/payments/{id}','PaymentController@destroy');
    Route::get('/invoice/{id}','PaymentController@invoice');
    Route::get('/subjects/{id}','SubjectController@destroy');
    Route::get('/download/{file}', 'ExamController@download');
    Route::post('/search', 'AttController@search')->name('search');
    Route::get('/students/{id}', 'StudentController@destroy');
    Route::get('/exams/{id}','ExamController@destroy');
    Route::get('/scores/{id}','ScoreController@destroy');
    Route::get('/timetables/{id}', 'TimetableController@destroy');
    Route::get('/enrolls/{id}', 'EnrolmentController@destroy');
    Route::get('/classes/{id}', 'ClassController@destroy');

});





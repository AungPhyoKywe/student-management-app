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
    return view('home');
});
Auth::routes(['register' => false]);
//page not found
Route::get('/404','PageNotFountController@index');

//teacher
    Route::group(['middleware' => ['teacher']], function() {

    Route::resource('teacher', 'TeacherController');
    Route::get('/teachers/{id}', 'TeacherController@destroy');
    Route::resource('tr_report','TeacherReportController');

    });

Route::group(['middleware' => ['login']], function() { 

    //backend
Route::group(['prefix'=>'{local}'],function (){

    Route::get('/backend/', 'SuperAdminController@index');
});
    //student
    Route::resource('class', 'ClassController');
    Route::resource('student', 'StudentController');
    Route::resource('st_report','StudentReportController');
    Route::resource('payment','PaymentController');
    Route::resource('score','ScoreController');
    Route::resource('timetable', 'TimetableController');
    Route::resource('enroll', 'EnrolmentController');
    Route::resource('subject', 'SubjectController');
    Route::resource('att', 'AttController');
    Route::resource('exam', 'ExamController');
   // Route::get('/pdf','PaymentController@print_pdf');
    Route::delete('/payments/{id}','PaymentController@destroy');
    Route::delete('/invoice/{id}','PaymentController@invoice');
    Route::delete('/subjects/{id}','SubjectController@destroy');
    Route::delete('/download/{file}', 'ExamController@download');
    Route::any('/search', 'AttController@search')->name('search');
    Route::delete('/students/{id}', 'StudentController@destroy');
    Route::delete('/exams/{id}','ExamController@destroy');
    Route::delete('/scores/{id}','ScoreController@destroy');
    Route::delete('/timetables/{id}', 'TimetableController@destroy');
    Route::delete('/enrolls/{id}', 'EnrolmentController@destroy');
    Route::delete('/classes/{id}', 'ClassController@destroy');

});





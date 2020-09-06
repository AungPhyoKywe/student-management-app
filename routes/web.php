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
    return redirect()->route('login');
});
Auth::routes(['register' => false]);
//page not found
Route::get('/404','PageNotFountController@index');

//teacher
    Route::group(['middleware' => ['teacher']], function() {

    Route::resource('teacher', 'TeacherController');
    Route::delete('/teachers/{id}', 'TeacherController@destroy');
    Route::resource('tr_report','TeacherReportController');
    Route::resource('payment','PaymentController');
    Route::delete('/payments/{id}','PaymentController@destroy');
    Route::get('/invoice/{id}','PaymentController@invoice');
    Route::resource('class', 'ClassController');
    Route::get('/classes/{id}', 'ClassController@destroy');
    Route::resource('subject', 'SubjectController');
    Route::get('/subjects/{id}','SubjectController@destroy');


    });

Route::group(['middleware' => ['login']], function() { 

    //backend


    Route::get('dashboard', 'SuperAdminController@index')->name('dashboard');

    //student
    
    Route::resource('student', 'StudentController');
    Route::resource('st_report','StudentReportController');
    Route::resource('score','ScoreController');
    Route::resource('timetable', 'TimetableController');
    Route::resource('enroll', 'EnrolmentController'); 
    Route::resource('att', 'AttController');
    Route::resource('exam', 'ExamController');
   // Route::get('/pdf','PaymentController@print_pdf');
    Route::get('/download/{file}', 'ExamController@download');
    Route::any('/search', 'AttController@search')->name('search');
    Route::get('/students/{id}', 'StudentController@destroy');
    Route::get('/exams/{id}','ExamController@destroy');
    Route::get('/scores/{id}','ScoreController@destroy');
    Route::get('/timetables/{id}', 'TimetableController@destroy');
    Route::get('/enrolls/{id}', 'EnrolmentController@destroy');
    

});





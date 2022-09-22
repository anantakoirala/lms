<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'Admin'],function(){
    Route::get('login','LoginController@login')->name('login');
    Route::post('postLogin','LoginController@postLogin')->name('postLogin');
});
Route::group(['namespace'=>'Admin','middleware'=>['auth'],'prefix'=>'admin'],function(){
    Route::resource('dashboard','DashboardController');
    Route::get('logout','LoginController@Logout')->name('logout');
    Route::resource('class','ClassController');
    Route::resource('classroom','ClassroomController');
    Route::resource('level','LevelController');
    Route::resource('batch','BatchController');
    Route::resource('shift','ShiftController');
    Route::resource('course','CourseController');
    Route::resource('faculty','FacultyController');
    Route::resource('time','TimeController');
    Route::resource('attendance','AttendanceController');
    Route::resource('academic','AcademicController');
    Route::resource('day','DayController');
    Route::resource('class-assigning','ClassAssigningController');
    Route::resource('role','RoleController');
    Route::resource('semester','SemesterController');
    Route::resource('class-scheduling','ClassSchedulingController');
});

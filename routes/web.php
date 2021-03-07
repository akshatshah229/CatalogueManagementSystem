<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::view('/about', "about");
Route::view('/', "index");
Route::view('/forum', "forum");
Route::view('/signup', "signup");
Route::view('/signin', "signin");

Route::view('/student_home', "student_home");
Route::view('/student_about', "student_about");
Route::view('/student_forum', "student_forum");
Route::view('/student_list_of_courses', "student_list_of_courses");
Route::view('/student_enrolled_courses', "student_enrolled_courses");
Route::view('/student_requested_courses', "student_requested_courses");
Route::view('/student_feedback', "student_feedback");
Route::view('/student_enrolled_form', "student_enrolled_form");

Route::view('/staff_home', "staff_home");
Route::view('/staff_about', "staff_about");
Route::view('/staff_forum', "staff_forum");
Route::view('/staff_upcoming_courses', "staff_upcoming_courses");
Route::view('/staff_view_courses', "staff_view_courses");
Route::view('/staff_view_feedback', "staff_view_feedback");
Route::view('/staff_add_courses', "staff_add_courses");
Route::view('/staff_update_course', "staff_update_course");
Route::view('/staff_delete_courses', "staff_delete_courses");

Route::view('/admin_home', "admin_home");
Route::view('/admin_about', "admin_about");
Route::view('/admin_forum', "admin_forum");
Route::view('/admin_users', "admin_users");
Route::view('/admin_update_form', "admin_update_form");
Route::view('/admin_add_users', "admin_add_users");
Route::view('/admin_delete_users', "admin_delete_users");

Route::post('/store','App\Http\Controllers\MainController@store');
Route::post('/add_courses','App\Http\Controllers\MainController@add_courses');
Route::post('/delete_courses','App\Http\Controllers\MainController@delete_courses');
Route::post('/home','App\Http\Controllers\MainController@home');
Route::post('/enrolled_student','App\Http\Controllers\MainController@enrolled_student');
Route::post('/feedbackdb','App\Http\Controllers\MainController@feedbackdb');
Route::post('/update_course','App\Http\Controllers\MainController@update_course');
Route::post('/delete_course','App\Http\Controllers\MainController@delete_course');
Route::post('/update_users','App\Http\Controllers\MainController@update_users');
Route::post('/add_users','App\Http\Controllers\MainController@add_users');
Route::post('/delete_users','App\Http\Controllers\MainController@delete_users');



Route::get('/choose_course','App\Http\Controllers\MainController@choose_course');
Route::get('/enrolled_courses','App\Http\Controllers\MainController@enrolled_courses');
Route::get('/feedback_courses','App\Http\Controllers\MainController@feedback_courses');
Route::get('/upcoming_courses','App\Http\Controllers\MainController@upcoming_courses');
Route::get('/view_courses','App\Http\Controllers\MainController@view_courses');
Route::get('/view_feedback','App\Http\Controllers\MainController@view_feedback');
Route::get('/admin_users_func','App\Http\Controllers\MainController@admin_users_func');
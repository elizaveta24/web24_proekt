<?php
use App\Lecturer;
use App\Course;
use App\Lesson;
use App\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
 

Route::resource('/teacher', 'TeacherController');
Route::resource('/course', 'CourseController');
Route::resource('/lesson', 'LessonController');

Auth::routes();


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseDetailsController;
use App\Http\Controllers\ElementsControlle;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SingleBlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddCourseController;




Route::get('/', [HomeController::class, 'index']);
Route::get('/about_us', [AboutUsController::class, 'index']);
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/course_details', [CourseDetailsController::class, 'index']);

Route::get('/add_course', [AddCourseController::class, 'index']);
Route::post('/submit-course-form', [AddCourseController::class, 'submitForm']);


Route::get('/elements', [ElementsControlle::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/single_blog', [SingleBlogController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact-form-submit', [ContactController::class, 'contactFormSubmit']);

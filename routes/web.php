<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;

use App\Http\Controllers\View\HomeController;
use App\Http\Controllers\View\AboutUsController;
use App\Http\Controllers\View\CourseController;
use App\Http\Controllers\View\CourseDetailsController;
use App\Http\Controllers\View\ElementsControlle;
use App\Http\Controllers\View\BlogController;
use App\Http\Controllers\View\SingleBlogController;
use App\Http\Controllers\View\ContactController;


Route::get('/',[HomeController::class,'index']);
Route::get('/about_us',[AboutUsController::class,'index']);
Route::get('/courses',[CourseController::class,'index']);
Route::get('/course_details',[CourseDetailsController::class,'index']);
Route::get('/elements',[ElementsControlle::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/single_blog',[SingleBlogController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
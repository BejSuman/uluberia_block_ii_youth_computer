<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseDetailsController extends Controller
{
    public function index(){
        return view('pages.course_details');
    }
}
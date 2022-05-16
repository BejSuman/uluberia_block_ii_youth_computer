<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCourseController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('pages.add-course');
    }

    public function submitForm(Request $request)
    {
        // p($request->all());

        // $result=$request->post('course');
        // p($result);

        $result = $request->post('course');
        if($result == 'cita'){
            // p('Hello world');
            $courseDetails = 'this is cita course';
        }
    }
}

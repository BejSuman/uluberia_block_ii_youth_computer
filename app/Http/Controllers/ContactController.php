<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }
    public function contactFormSubmit(Request $request)
    {
        // p($request->all());

        // $request->flash();

        $validator = Validator::make(
            [
                'name' => $request->post('name'),
                'email' => $request->post('email'),
                'subject' => $request->post('subject'),
                'message' => $request->post('message'),
            ],
            [
                'name' => 'required|max:255',
                'email' => 'required|max:255|email',
                'subject' => 'required|max:255',
                'message' => 'max:500',
            ]
        );

        if ($validator->fails()) {
            return redirect('contact')->withErrors($validator)->withInput();
        }
        // p('success form submit');

        $student = new Student();

        $student->name = $request->post('name');
        $student->email = $request->post('email');
        $student->subject = $request->post('subject');
        $student->message = $request->post('message');

        $student->save();
        return redirect()->back()->withSuccess("Submit Successfully");
        // return redirect('contact')->withSuccess('Submit Successfully');
    }
}

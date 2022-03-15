<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleBlogController extends Controller
{
    public function index(){
        return view('pages.single_blog');
    }
}

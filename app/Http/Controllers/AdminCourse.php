<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCourse extends Controller
{
    public function index() {
    	return view('admin.course.index');
    }
}

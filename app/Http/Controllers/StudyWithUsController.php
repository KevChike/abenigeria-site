<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyWithUsController extends Controller
{
    public function index()
    {
    	return view('study-with-us.index', ['active_menu' => 'study-with-us', 'active_sidebar' => 'study-with-us']);
    }

    public function reasons()
    {
    	return view('study-with-us.reasons', ['active_menu' => 'study-with-us', 'active_sidebar' => 'reasons']);
    }

    public function studyResources()
    {
    	return view('study-with-us.study-resources', ['active_menu' => 'study-with-us', 'active_sidebar' => 'study-resources']);
    }

    public function entryGuidelines()
    {
    	return view('study-with-us.entry-guidelines', ['active_menu' => 'study-with-us', 'active_sidebar' => 'entry-guidelines']);
    }
}

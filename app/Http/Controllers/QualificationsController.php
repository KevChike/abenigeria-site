<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualificationsController extends Controller
{
    public function index()
    {
    	return view('qualifications.index', ['active_menu' => 'qualifications', 'active_sidebar' => 'qualifications']);
    }

    public function businessManagement()
    {
    	return view('qualifications.business-management', ['active_menu' => 'qualifications', 'active_sidebar' => 'business-management']);
    }

    public function businessManagementAndMarketing()
    {
    	return view('qualifications.business-marketing', ['active_menu' => 'qualifications', 'active_sidebar' => 'business-marketing']);
    }

    public function businessManagementAndHr()
    {
    	return view('qualifications.business-hr', ['active_menu' => 'qualifications', 'active_sidebar' => 'business-hr']);
    }

    public function businessStartUp()
    {
    	return view('qualifications.business-start-up', ['active_menu' => 'qualifications', 'active_sidebar' => 'business-start-up']);
    }

    public function shortCourses()
    {
    	return view('qualifications.short-courses', ['active_menu' => 'qualifications', 'active_sidebar' => 'short-courses']);
    }
}

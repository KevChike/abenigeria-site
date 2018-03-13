<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatNextController extends Controller
{
    public function index()
    {
    	return view('what-next.index', ['active_menu' => 'what-next', 'active_sidebar' => 'what-next']);
    }

    public function careerProgression()
    {
    	return view('what-next.career-progression', ['active_menu' => 'what-next', 'active_sidebar' => 'career-progression']);
    }

    public function universityProgression()
    {
    	return view('what-next.university-progression', ['active_menu' => 'what-next', 'active_sidebar' => 'university-progression']);
    }

    public function professionalExemptions()
    {
    	return view('what-next.professional-exemptions', ['active_menu' => 'what-next', 'active_sidebar' => 'professional-exemptions']);
    }
}

<?php

Route::get('/', function () {
    return view('home', ['active_menu' => 'home']);
});

Route::get('/journey-to-success', function () {
    return view('journey-to-success', ['active_menu' => '']);
});

Route::get('/about', function () {
    return view('about', ['active_menu' => '']);
});

Route::get('/fees', function () {
    return view('fees', ['active_menu' => 'fees']);
});

Route::get('/centres', function () {
    return view('centres', ['active_menu' => 'centres']);
});

Route::get('/faq', function () {
    return view('faq', ['active_menu' => '']);
});

Route::get('/contact', 'ContactController@contact');
Route::post('/contact', 'ContactController@postContactForm');

//Redirect event registeration when there is no current event
Route::get('/events/register', function() {
    return redirect('/qualifications');
});

//'Events' routes
/*Route::prefix('events')->group(function() {
	Route::get('/register', 'EventsController@eventRegistration');
	Route::post('/register', 'EventsController@postEventRegistration');
});*/

//'Study With Us' routes
Route::prefix('study-with-us')->group(function() {
	Route::get('/', 'StudyWithUsController@index');
	Route::get('/reasons', 'StudyWithUsController@reasons');
	Route::get('/study-resources', 'StudyWithUsController@studyResources');
	Route::get('/entry-guidelines', 'StudyWithUsController@entryGuidelines');
});

//'Qualifications' routes
Route::prefix('qualifications')->group(function(){
	Route::get('/', 'QualificationsController@index');
	Route::get('/business-management', 'QualificationsController@businessManagement');
	Route::get('/business-management-and-marketing', 'QualificationsController@businessManagementAndMarketing');
	Route::get('/business-management-and-human-resources', 'QualificationsController@businessManagementAndHr');
	Route::get('/business-start-up-and-entrepreneurship', 'QualificationsController@businessStartUp');
	Route::get('/short-courses', 'QualificationsController@shortCourses');
});

//'What Next' routes
Route::prefix('what-next')->group(function(){
	Route::get('/', 'WhatNextController@index');
	Route::get('/career-progression', 'WhatNextController@careerProgression');
	Route::get('/university-progression', 'WhatNextController@universityProgression');
	Route::get('/professional-exemptions', 'WhatNextController@professionalExemptions');
});

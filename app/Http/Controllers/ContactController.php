<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
    	return view('contact', ['active_menu' => 'contact']);
    }

    public function postContactForm(Request $request)
    {
    	$this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::send('emails.feedback', [
                'sender_msg' => $request->message, 
                'sender_email' => $request->email, 
                'sender_name' => $request->name, 
                'sender_phone' => $request->phone, 
                'sender_subject' => $request->subject
        ], function($message) {
            $message->to(config('app.feedback_email'));

            $message->subject(config('app.name') . " Contact Page Feedback");
        });
        
        return redirect()->back()->with('success_msg', 'Thanks for contacting us!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Attendee;
use Mail;

class EventsController extends Controller
{
    public function eventRegistration()
    {
    	return view('events.register');
    }

    public function postEventRegistration(Request $request)
    {
    	$this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'preferred_event_location' => 'required',
            'event_id' => 'required',
            //'occupation' => 'required',
        ]);

    	// Check if email has been used for a particular event
        $checkAttendeeEmail = Attendee::where('email', $request->email)
        						->where('event_id', $request->event_id)
        						->first();

        if(count($checkAttendeeEmail) < 1) {
                        
            $attendee = new Attendee;

	        $attendee->name = ucwords($request->name);
	        $attendee->email = $request->email;
            $attendee->phone = $request->phone;
            $attendee->preferred_event_location = $request->preferred_event_location;
            $attendee->uid = md5(time());
	        $attendee->event_id = $request->event_id;
            //$attendee->attendee_current_status = $request->occupation;



            /* Get the details of the event */
            // $event = Event::where('uid', $request->event_id)->first();

            /* Select email template to be sent based on user's occupation */ 
            if($request->preferred_event_location == 'Abuja') {
                $event_date = '14th February, 2018';
                $venue = 'NAF Conference Centre and Suites, Plot 496 Ahmadu Bello Way, Kado, Abuja, FCT, Nigeria.';
                $time = '9am';
            } elseif ($request->preferred_event_location == 'Kano') {
                $event_date = '15th February, 2018';
                $venue = 'Tahir Guest Palace, 4 Ibrahim Natsugune Road, Kano, Nigeria.';
                $time = '2pm';
            } else {
                $event_date = '16th February, 2018';
                $venue = 'Hotel Seventeen, No. 6 Tafawa Balewa/Lafiya Road Kaduna, Nigeria.';
                $time = '10am';
            }

	        /*
			 * Send confirmation email to attendee
			*/
	        Mail::send('events.emails.seminar.confirmation', [
	                'attendee_name' => $request->name, 
	                'attendee_email' => $request->email,
                    'event_title' => 'ABE Career Advancement and Entrepreneurship Seminar',
                    'date' => $event_date,
                    'venue' => $venue,
                    'time' => $time,
	        ], function($message) use ($request) {
	            $message->to($request->email);

	            $message->subject('Thank you for registering!');
	        });

	        if($attendee->save()) {
	        	return redirect()->back()->with('success_msg', 'Registration was successful!');
	        } else {
	        	return redirect()->back()->with('error_msg', 'Something went wrong!');
	        }

        }
        else{
        	return redirect()->back()->with('error_msg', 'Your email has been used before!');
        }
        
    }
}

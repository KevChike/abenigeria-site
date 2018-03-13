<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $table = 'attendees';

    protected $dates = [
    	'post_on', 'check_in_time'
    ];

    protected $fillable = [
        'name', 'gender', 'email', 'uid', 'phone', 'address', 'city_of_residence', 'attendee_current_status', 
        'age_group', 'preferred_event_location', 'event_info_source', 'event_id', 'posted_on', 'check_in', 'check_in_time'
    ];
}

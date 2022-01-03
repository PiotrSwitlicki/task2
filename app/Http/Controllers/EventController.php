<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
	public function endpoint()
    {
	    $events=Event::with('user')->get();
	    $events=$events->toJson();

	    return view('events', ['events' => $events]);
	    
	}


}

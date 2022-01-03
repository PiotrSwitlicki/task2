<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;

class EventViewController extends Controller
{

	public function index()
    {
        $events = Event::latest()->paginate(5);
        
        return view('events.index', compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $request->validate([
            'name' => 'required',            
        ]);
        */
     
        Event::create(request()->all());

        return redirect()->route('eventview.index')
            ->with('success', 'Event utworzony.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $eventview)
    {
        return view('events.edit', compact('eventview'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $eventview)
    {
        /*$request->validate([
            'name' => 'required',                        
        ]);*/     
   
        $eventview->update(request()->all());

        return redirect()->route('eventview.index')
            ->with('success', 'Event updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $eventview)
    {
        $eventview->delete();

        return redirect()->route('eventview.index')
            ->with('success', 'Event deleted successfully');
    }
}

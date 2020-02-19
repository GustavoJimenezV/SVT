<?php

namespace SVT\Http\Controllers;

use SVT\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view ('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }

        $event = new Event();
        $event -> Name = $request -> input ('Name');
        $event -> Type_event = $request -> input ('TypeEvent');
        $event -> Artist = $request -> input ('Artist');
        $event -> Date = $request -> input ('Date');
        $event -> State = $request -> input ('State');
        $event -> Municipality = $request -> input ('Municipality');
        $event -> Address = $request -> input ('Address');
        $event -> Descripcion = $request -> input ('Descripcion');
        $event -> Image =$name;
        $event -> save();
        return 'Saved';
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //$event = Event::find($id);
        //$event = Event::where('slug','=',$slug)->firstOrFail();
        return view ('events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view ('events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->fill($request->except('Image'));
        if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $event->Image = $name;
            $file->move(public_path().'/images/',$name);
        }
        $event->save();
        return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

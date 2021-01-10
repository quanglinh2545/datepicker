<?php

namespace App\Http\Controllers;
use Calendar;
use Illuminate\Http\Request;
use App\Models\Event;

use Illuminate\Support\Facades\Route;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::all();
        $event = [];
       
        foreach($events as $row){
            $enddate = $row->end_date."24:00:00";
            $event[] = \Calendar::event(
            $row->title,
            //$row->description,
            false,
            new \DateTime($row->start_date),
            new \DateTime($row->end_date),
            
            $row->id,
            [
                'color' =>$row->color,
                'url' => "http://127.0.0.1:8000/events/".$row->id."/edit"
                
            ]
            );
            // $event = \Calendar::event(
            //     "Valentine's Day", //event title
            //     true, //full day event?
            //     '2015-02-14', //start time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg)
            //     '2015-02-14', //end time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg),
            //     1, //optional event ID
            //     [
            //         'url' => 'http://full-calendar.io',
            //         //any other full-calendar supported parameters
            //     ]
            // );
        }
        $calendar = \Calendar::addEvents($event);
        return view('eventpage',compact('events','calendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function display(){
        return view('addevent');
    } 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title' =>'required',
            'color' =>'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        $events = new Event;
        $events->title = $request->input('title');
        $events->description = $request->input('description');
        $events->color = $request->input('color');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
        $events->save();
        return redirect('events') ->with('success','Events added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $events = Event::all();
        return view('display') ->with('events',$events);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $events = Event::find($id);
        return view('editform',compact('events','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'title' => 'required',
            'color' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $events = Event::find($id);
        $events->title = $request->input('title');
        $events->description = $request->input('description');
        $events->color = $request->input('color');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');

        $events->save();
    
        return redirect('events')->with('success','event updated');
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
        $events= Event::find($id);
        $events->delete();
        return redirect('events')->with('success','Data deleted');
    }
}
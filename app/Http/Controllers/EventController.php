<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
  
       }
  
  
  
      public function index(){
          $list_events = Event::all();
          return view('events',['events'=>$list_events]);
  
      }

    


      public function store(EventRequest $request){
        $event = new Event();

        $event->title = $request->input('title');
        $event->lieu = $request->input('lieu');
        $event->description = $request->input('description');
        $event->heure = $request->input('heure');
        $event->date = $request->input('date');
        $event->save();


        return redirect()->route('events.index')

        ->with('success','Evenement ajouté avec success!');
        


      }



      public function edit($id){
        $event = Event::find($id);
        return view('editEvent',['event'=>$event]);

      }

      public function update(Request $request , $id){
        $event = Event::find($id);

        $event->title = $request->input('title');
        $event->lieu = $request->input('lieu');
        $event->description = $request->input('description');
        $event->heure = $request->input('heure');
        $event->date = $request->input('date');
        $event->save();
        return redirect('events');

      }



    public function destroy($id){


    
    $event=Event::find($id);
    $event->delete();
    
    return redirect ('events');           

    }
}

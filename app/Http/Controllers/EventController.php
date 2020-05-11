<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests\EventRequest;
 use Illuminate\Support\Facades\Storage;
 use App\Media;
class EventController extends Controller
{
   
  
  
  
      public function index(){
          $list_events = Event::all();
          return view('events',['events'=>$list_events]);
  
      }

    


      public function store(EventRequest $request){

        
        $hasFile = $request->hasFile('picture');

  
        if($hasFile){
          $file =  $request->file('picture');
          $name = $file->store('eventPicture');
          $lien = Storage::url($name);
          

        }


        $event = new Event();

        $event->title = $request->input('title');
        $event->lieu = $request->input('lieu');
        $event->description = $request->input('description');
        $event->heure = $request->input('heure');
        $event->date = $request->input('date');
        $event->save();

        $media = new Media;
        $media->lien = $lien;
        $media->type = "img";
        

        $event->medias()->save($media);

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

        //$media = Media::find($id);

      }



    public function destroy($id){  
    $event=Event::find($id);
    $event->delete(); 
    return redirect ('events');           
    }



    public function eventdetail($id){
      $event=Event::find($id);
      $medias = $event->medias; 
      return view('event_detail',['event'=>$event , 'medias' =>$medias]);           
    }

    public function eventpage(){
      $event=Event::all();
      return view('events_page',['events'=>$event]);           
    }


}

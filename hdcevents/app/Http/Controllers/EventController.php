<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use Illuminate\Mail\Message;

class EventController extends Controller
{
    //rota principal
    public function index() {
        
        //eventos da aplicacao
        $events = Event::all();

        return view('welcome',['events' => $events]);
    }

    public function create(){
        return View('events.create');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'city' => 'required',
            'private' => 'required',
        ]);

            

                $event = new Event;
                $event->title = $request->title;
                $event->city = $request->city;
                $event->private = $request->private;
                $event->description = $request->description;

                // Image upload
                if($request->hasFile('image') && $request->file('image')->isValid()){

                    $requestImage = $request->image;

                    $extension = $requestImage->extension();

                    $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                    
                    $requestImage->move(public_path('img/events'), $imageName);

                    $event->image = $imageName;
                }
        
                $event->save();
        
                return redirect('/');
            
        

       
    }
}

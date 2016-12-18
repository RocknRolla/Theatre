<?php

namespace App\Http\Controllers;

use Log;
use DB;
use Session;
use Mail;
use Illuminate\Cookie;
use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{

    // Controller for Index/Home page
    public function home(){
        \App::setLocale(session()->get('locale'));

        #$events = Event::all()->orderBy('date', 'asc');
        $events = DB::table('events')
            ->orderBy('date', 'asc')
            ->get();

        if (\App::isLocale('hr')) {
            foreach ($events as $event){
                $event->title = $event->titlehr;
                $event->description = $event->descriptionhr;
            }
        }

        $dates = DB::table('events')
            ->orderBy('date', 'asc')
            ->pluck('date');

        return view('home', [
            'events' => $events,
            'dates' => $dates
        ]);
    }

    // Controller for About page
    public function about(){

        \App::setLocale(session()->get('locale'));

        return view('about');
    }

    // Controller for Contact page
    public function contact(){
        \App::setLocale(session()->get('locale'));
        return view('contact');
    }

    // Controller for displaying data for a specific Event
    public function getEvent($id){

        \App::setLocale(session()->get('locale'));

        $event = Event::where('id', $id)->first();

        if (!$event){
            return redirect()->route('home');
        }

        $events = DB::table('events')
            ->orderBy('date', 'asc')
            ->get();

        if (\App::isLocale('hr')) {

            $event->title = $event->titlehr;
            $event->description = $event->descriptionhr;

            foreach ($events as $e){
                $e->title = $e->titlehr;
                $e->description = $e->descriptionhr;
            }
        }

        $dates = DB::table('events')
            ->orderBy('date', 'asc')
            ->pluck('date');


        
        return view('event', [
            'title' => $event->title,   
            'picture' => $event->picture,   
            'description' => $event->description,   
            'actors' => $event->actors,   
            'date' => $event->date,
            'time' => $event->time,
            'price' => $event->price,
            'location' => $event->location,
            'events' => $events,
            'dates' => $dates
        ]);
    }

    public function changeLanguage($id){


        $locale = "";

        if($id == "en"){
            Session::set('locale', 'en');
        }
        if($id == "hr"){
            Session::set('locale', 'hr');
        }

        Log::info(session()->get('locale'));

        return redirect()->back();
    }

    public function sendEmail(Request $request){

        Log::info($request->all());

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Events;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    public function event_show($id)
    {
        $eventModel = new Events();
        $event = $eventModel->getEventByID($id);
        return view('admin/event', [
            'user' => 'admin',
            'event' => $event
        ]);
    }

    public function event_delete($id)
    {
        $eventModel = new Events();
        $response = $eventModel->deleteEvent($id);

        $eventModel = new Events();
        $events = $eventModel->getEvents();
        return view('admin/events', [
            'user' => 'admin',
            'events' => $events,
            'delete' => true
        ]);
    }

    public function event_edit($id)
    {
        $eventModel = new Events();
        $event = $eventModel->getEventByID($id);
        return view('admin/eventedit', [
            'user' => 'admin',
            'event' => $event,
            'save_form_id' => $id
        ]);
    }

    public function event_save(Request $request, $id)
    {
        $request->validate([
            'event_name' =>         'required',
            'event_type' =>         'required',
            'category_id' =>        'required',
            'city' =>               'required',
            'street' =>             'required',
            'registration_date' =>  'required',
            'start_date' =>         'required',
            'finish_date' =>        'required',
            'event_link' =>         'required',
            'event_status' =>       'required',
            'image_intro' =>        'nullable',
            'image_full' =>         'nullable',
            'meta_title' =>         'required',
            'meta_desc' =>          'required',
            'rating' =>             'required',
            'url' =>                'required',
            'created_at' =>         'required',
            'updated_at' =>         'required',
        ]);

        $eventModel = new Events();
        $eventModel->saveEvent($request, $id);

        $eventModel = new Events();
        $events = $eventModel->getEvents();
        return view('admin/events', [
            'user' => 'admin',
            'events' => $events,
            'update' => true
        ]);
    }

    public function event_create(){
        return view('admin/eventcreate');
    }

    public function event_store(Request $request)
    {
        $request->validate([
            'event_name' =>         'required',
            'event_type' =>         'required',
            'category_id' =>        'required',
            'city' =>               'required',
            'street' =>             'required',
            'registration_date' =>  'required',
            'start_date' =>         'required',
            'finish_date' =>        'required',
            'event_link' =>         'required',
            'event_status' =>       'required',
            'image_intro' =>        'required',
            'image_full' =>         'required',
            'meta_title' =>         'required',
            'meta_desc' =>          'required',
            'rating' =>             'required',
            'url' =>                'required',
            'created_at' =>         'required',
            'updated_at' =>         'required',
        ]);

        $eventModel = new Events();
        $eventModel->createEvent($request);

        $eventModel = new Events();
        $events = $eventModel->getEvents();
        return view('admin/events', [
            'user' => 'admin',
            'events' => $events,
            'create' => true
        ]);
    }
}

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
/*
    public function event_create($id)
    {
        //
    }
*/

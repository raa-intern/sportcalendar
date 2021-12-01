<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Events;

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
        $event = $eventModel->deleteEvent($id);
        return view('admin/eventdelete', [
            'user' => 'admin'
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Front;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{
    public function index()
    {
        $frontModel = new Front();
        $expenses = $frontModel->getSportEventsList();
        return response()->json($expenses);

    }

    public function eventsShowAll()
    {
        $frontModel = new Front();
        $expenses = $frontModel->getSportEventsList();
        return response()->json($expenses);
    }
    // public function eventsShowAll()
    // {
    //     $expenses = Front::all();
    //     print_r($expenses);
    //     return response()->json($expenses);
    // }

    public function eventShowItem($id)
    {
        $frontModel = new Front();
        $expenses = $frontModel->getSportEventByID($id);
        return response()->json($expenses);
    }

}

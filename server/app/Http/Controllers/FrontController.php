<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Front;

class FrontController extends Controller
{
    public function show()
    {
        $expenses = Front::all();
        return response()->json($expenses);
    } 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;

class ManagerController extends Controller
{
    public function dashboard3 () {
        return view('manager/dashboard3', [
            'user' => 'admin'
        ]);
    }

    public function reports_list() {
        return view('manager/reports', [
            'user' => 'admin'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin/dashboard', [
            'user' => 'admin']);
    }

    public function events_list()
    {
        $eventsModel = new Events();
        $events = $eventsModel->getEvents();
        return view('admin/events', [
            'user' => 'admin',
            'events' => $events
        ]);
    }

    public function charts_list()
    {
        return view('admin/charts', [
            'user' => 'admin']);
    }

    public function widgets_list()
    {
        return view('admin/widgets', [
            'user' => 'admin']);
    }

    public function users_list()
    {
        return view('admin/users', [
            'user' => 'admin']);
    }

    public function organizer()
    {
        return view('admin/organizer', [
            'user' => 'admin']);
    }

    public function dashboard2()
    {
        return view('admin/dashboard2', [
            'user' => 'admin']);
    }

    public function bells_list()
    {
        return view('admin/bells', [
            'user' => 'admin']);
    }

    public function letters_list()
    {
        return view('admin/letters', [
            'user' => 'admin']);
    }

    public function logs_monitor()
    {
        return view('admin/logmonitor', [
            'user' => 'admin']);
    }

    public function parsed_list()
    {
        return view('admin/parsed/list', [
            'user' => 'admin']);
    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}

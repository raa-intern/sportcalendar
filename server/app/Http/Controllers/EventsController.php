<?php

namespace App\Http\Controllers;

use App\Models\ExpenseModel;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = ExpenseModel::all();
        return response()->json($expenses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'event_type' => 'required',
            'event_description' => 'required' //optional if you want this to be required
        ]);
        $expense = ExpenseModel::create($request->all());
        return response()->json(['message'=> 'expense created', 
        'expense' => $expense]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExpenseModel  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseModel $expense)
    {
        return $expense;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExpenseModel  $expense
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExpenseModel  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpenseModel $expense)
    {
        $request->validate([
            'event_name' => 'required',
            'event_type' => 'required',
            'event_description' => 'required' //optional if you want this to be required
        ]);
       $expense->update($request->all());
        
        return response()->json([
            'message' => 'Подію відредаговано!',
            'expense' => $expense
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseModel $expense)
    {
        $expense->delete();
        return response()->json([
            'message' => 'Подію видалено!'
        ]);
        
    }
}

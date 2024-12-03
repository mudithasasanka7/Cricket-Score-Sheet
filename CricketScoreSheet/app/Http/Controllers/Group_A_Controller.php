<?php

namespace App\Http\Controllers;

use App\Models\Group_A;
use App\Models\Group_B;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class Group_A_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $City = Group_A::get(); // Fetching Group_A data
    $Citys = Group_B::get(); // Fetching Group_B data

    // Define the location (this could be dynamic based on your application's logic)
    $location = 'Colombo'; // Example static location, or dynamically retrieve this based on user's IP, etc.

    // Pass the data to the view, including the location
    return view('Score.index', compact('City', 'Citys', 'location'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Score.a_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $rules = [
        'name' => 'required|max:50|min:3',
        'age' => 'required|max:2|min:1',
        'email' => 'required|string|email|max:50|min:10',
        'town' => 'required|max:25|min:3',
        'rno' => 'required|max:3|min:2',
        'card' => 'required|max:15|min:2',
        'faculty' => 'required',
        'postures' => 'required',
        'balling_postures' => 'required',
        'batting_side' => 'required',
        'bolling_hand' => 'required',
    ];
    
    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Storing the data
    Group_A::create($request->all());

    // After saving, you can redirect or return a view
    return redirect()->route('Score.index');  // Redirecting to the 'Score.index' route
}
    

    /**
     * Display the specified resource.
     */
    public function show(Group_A $group_A)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group_A $group_A)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group_A $group_A)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group_A $group_A)
    {
        //
    }
}

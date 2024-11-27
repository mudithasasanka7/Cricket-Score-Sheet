<?php

namespace App\Http\Controllers;

use App\Models\Group_B;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class Group_B_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Score.b_create');
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
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect() ->back() ->withErrors($validator)->withInput();
        }

        Group_B::create($request->all());
        return view('Score.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Group_B $group_B)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group_B $group_B)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group_B $group_B)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group_B $group_B)
    {
        //
    }
}

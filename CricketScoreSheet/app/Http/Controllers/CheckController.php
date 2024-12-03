<?php

namespace App\Http\Controllers;
use App\Models\LoginModel;

use Illuminate\Http\Request;

class CheckController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Fetch the user by email
    $user = LoginModel::where('email', $request->email)->first();

    if ($user && $user->password === $request->password) {
        // Successful login: Redirect to the home or account page
        return view('Score.home'); // Replace 'acout' with the actual Blade file name for your home/account page
    } else {
        // Failed login: Return back with an error message
        return back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
    }
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

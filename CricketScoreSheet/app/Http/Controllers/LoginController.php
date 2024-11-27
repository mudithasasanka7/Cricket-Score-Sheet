<?php

namespace App\Http\Controllers;

use App\Models\LoginModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Score.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Score.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        LoginModel::create($request->all());
        return view('Score.login');
    }

    /**
     * Display the specified resource.
     */
    public function show(LoginModel $loginModel)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LoginModel $loginModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LoginModel $loginModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoginModel $loginModel)
    {
        //
    }
}

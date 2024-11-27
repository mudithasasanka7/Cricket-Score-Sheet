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
        $emandpw->phpem = LoginModel::get('email'.value);
        $emandpw->phppw = LoginModel::get('password');

        $reqemandpw->reqem = $request->email;
        $reqemandpw->reqpw = $request->password;
        if($reqemandpw->reqem == $emandpw->phpem || $reqemandpw->reqpw == $emandpw->phppw){
            return view('Score.acout');
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

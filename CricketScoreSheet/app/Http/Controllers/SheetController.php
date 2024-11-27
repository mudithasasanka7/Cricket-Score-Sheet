<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SheetController extends Controller
{
    public function index(){
        return view('Score.scoresheet');
    }
    public function create(){
        return view('Score.team_register');
    }
    public function store(Request $request)
    {
        return view('Score.index');
    }
}

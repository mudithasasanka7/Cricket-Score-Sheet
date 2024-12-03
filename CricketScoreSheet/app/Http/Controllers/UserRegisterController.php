<?php

namespace App\Http\Controllers;
use App\Models\UserRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserRegisterController extends Controller
{
    public function create()
    {
        return view('user_register'); // Blade file for the registration form
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user_registers,email',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Save to database
        UserRegister::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => bcrypt($request->password), // Encrypt password
        ]);

        // Redirect with success message
        return redirect()->route('user_register.create')->with('success', 'User registered successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup',[
        "title" => "Sign Up"
        ]);
    }

    public function store (Request $request) {
        // dd($request->all());
        $request->validate([
            'email' => 'required|unique:users',
            'username' => 'required',
            'password' => 'required',
        ]);
        // dd($request);

        $data = $request->all();
        $data['password'] = Hash::make($request -> password);
        // dd($data);
        User::create($data);
        return redirect(route('login'));

    }
}


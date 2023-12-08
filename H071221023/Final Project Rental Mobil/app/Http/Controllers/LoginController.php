<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {

        return view('login',[
        "title" => "Login"
        ]);
    }

    public function authenticate(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $find = User::where('email', $request->email)->first();
        // dd($find->id);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]) && $find->id == 1 ) {
            $request->session()->regenerate();
            $user = User::where('email', $request->email)->first();
            $id   = $request->session()->put('id', $user->id);
            $fullname         = $request->session()->put('id', $user->fullname);
            $username   = $request->session()->put('username', $user->username);
            $nama       = $request->session()->put('email', $user->email);
            return redirect()->intended(route('dashboard'));
        }
        else if (Auth::attempt(['email' => $request->email, 'password' => $request->password]) && $find->id != 1) {
            $request->session()->regenerate();
            $user = User::where('email', $request->email)->first();
            // dd($user->fullname);

            $id         = $request->session()->put('id', $user->id);
            $fullname   = $request->session()->put('fullname', $user->fullname);
            $username   = $request->session()->put('username', $user->username);
            $nama       = $request->session()->put('email', $user->email);
            // dd();
            return redirect()->intended(route('home.index'));

        }

        return redirect()->route('login')->send()->with('failed', 'Login Gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        Session()->forget('id');
        Session()->forget('nama');
        Session()->forget('username');
        Session()->forget('email');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

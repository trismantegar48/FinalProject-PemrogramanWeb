<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ForgetController extends Controller
{
    public function index()
    {
        return view('forget',[
        "title" => "Forget Password"
        ]);
    }

    public function re_pass (Request $request) {

        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
          ]);

        Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('success', 'Silahkan Cek Email Anda!');

    }

        public function showResetPasswordForm($token) {
            return view('forgetLink', [
                'token' => $token,
                "title" => "Forget Password"
            ]);
        }

        public function submitResetPasswordForm(Request $request)

        {
            $request->validate([
                'email' => 'required|email|exists:users',
                'password' => 'required|confirmed',
            ],[
                'exists' => 'Masukkan Email Yang Anda Gunakan Mendaftar!',
                'confirmed' => 'Password Berbeda Dengan Password Confirmation!'
            ]);

            $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])->first();

            if(!$updatePassword){
                return back()->with('failed', 'Masukkan Email Yang Anda Gunakan Mendaftar!');
            }

            $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

            DB::table('password_resets')->where(['email'=> $request->email])->delete();

            return redirect('/login')->with('success', 'Password Anda Berhasil Diubah!');
        }
}

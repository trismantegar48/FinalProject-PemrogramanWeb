<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;
use App\Models\user;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // eloquent
        $users = user::all();
        return view('/admin/users', [
            "title" => "Users",
            "user" => $users
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\useraccount  $useraccount
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::find($id);
        return response()->json([
            'user' => $user,
            'status' => 200
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuseraccountRequest  $request
     * @param  \App\Models\useraccount  $useraccount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateuserRequest $request)
    {
        $request->validate([
            'password' => 'required'
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $find =  user::find($request->id);

        $find->update($data);
        // dd($request);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $useraccount
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = user::find($id);
        $find->delete();
        return redirect()->route('user.index');
    }
}

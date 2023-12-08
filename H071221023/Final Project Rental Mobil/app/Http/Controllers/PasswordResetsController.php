<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storepassword_resetsRequest;
use App\Http\Requests\Updatepassword_resetsRequest;
use App\Models\password_resets;

class PasswordResetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storepassword_resetsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepassword_resetsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\password_resets  $password_resets
     * @return \Illuminate\Http\Response
     */
    public function show(password_resets $password_resets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\password_resets  $password_resets
     * @return \Illuminate\Http\Response
     */
    public function edit(password_resets $password_resets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepassword_resetsRequest  $request
     * @param  \App\Models\password_resets  $password_resets
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepassword_resetsRequest $request, password_resets $password_resets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\password_resets  $password_resets
     * @return \Illuminate\Http\Response
     */
    public function destroy(password_resets $password_resets)
    {
        //
    }
}

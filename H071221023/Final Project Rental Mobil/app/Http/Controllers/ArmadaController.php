<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorearmadaRequest;
use App\Http\Requests\UpdatearmadaRequest;
use App\Models\Armada;


class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armadas = Armada::where('status', 'available')->get();

        return view('katalog', [
            "title" => "Katalog",
            "armadas" => $armadas
        ]);
    }

    public function indexcars()
    {
        $armadas = Armada::all();
        $data = array(
            "title"     => "Cars",
            'armadas'   => $armadas
        );

        return view('/admin/cars', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorearmadaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorearmadaRequest $request)
    {
        $data = $request->all();

        // $picture = $request->file('picture_url');
        $nama = time() . '.' . $request->picture_url->extension();
        // dd($nama);
        $request->picture_url->move(public_path('image/cars/'), $nama);
        $data['picture_url'] = $nama;

        Armada::create($data);
        // dd($request);
        return back()->with('message', 'Data Armada Berhasil Ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Armada::find($id);
        return response()->json([
            'car' => $car,
            'status' => 200
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatearmadaRequest  $request
     * @param  \App\Models\armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatearmadaRequest $request)
    {
        $data = $request->all();
        $find =  Armada::find($request->id);
        // dd($request->picture_url == $find->picture_url);
        // validasi gambar

        if($request->hasFile('picture_url')){
            $nama = time() . '.' . $request->picture_url->extension();
            $request->picture_url->move(public_path('image/cars/'), $nama);
            $data['picture_url'] = $nama;
        } else {
            $data['picture_url'] = $request->picture_old;
        }

        $find->update($data);
        // dd($request);
        return back()->with('message', 'Data Armada Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = Armada::find($id);
        $find->delete();
        return back()->with('message', 'Data Armada Berhasil Dihapus!');
    }
}

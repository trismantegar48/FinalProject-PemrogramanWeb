<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\testimoni;
use App\Models\transaction;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Models\Armada;


class DashboardController extends Controller
{

    public function index() {

        $data = array(
            'title' => "Dashboard",
            'user' => User::all()->count(),
            'car' => Armada::all()->count(),
            'transaksi' => transaction::all()->count(),
            'pendapatan' => transaction::all()->sum('total'),
            'testimoni' => testimoni::all()->count(),
        );

        return view('admin.dashboard', $data);
    }
}

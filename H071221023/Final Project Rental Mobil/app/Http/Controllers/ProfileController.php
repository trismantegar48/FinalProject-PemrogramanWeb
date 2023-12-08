<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;


class ProfileController extends Controller
{
    public function profile( $id_user, $id_trans) {
        // dump(transaction::find($id_trans));
        // dd($request->id_trans);
        return view('useraccount_profile',
        [
            "title" => "User Profile",
            "user"  => User::find($id_user),
            "trans"  => transaction::find($id_trans),
            'id_trans' => $id_trans
        ]);
    }
    public function transaksi($id_user, $id_trans) {
        // dd($id);
        $find = transaction::where('user_id', $id_user)->get();
        // dd($find);
        // $trans = $find->sortByDesc('id')->take(1);
        return view('useraccount_transaction',
        [
            "title" => "User Transaction",
            "trans"  => $find,
            "id_trans"  => $id_trans,
            "user"  => User::find($id_user),
        ]);
    }

    public function invoice($id_user, $id_trans) {
        // dd($id_user);
        $find =  transaction::where('user_id', $id_user)->get();
        $inv = transaction::all();
        // dd($id_trans);
        return view('useraccount_invoice',
        [
            "title" => "User Invoice",
            "trans"  => $find,
            "id_trans"  => $id_trans,
            "user"  => User::find($id_user),
            'invoice' => $inv
        ]);
    }

    public function print_invoice (Request $request, $id_trans) {
        // dd($id_trans);
        $trans = transaction::find($id_trans);
        $armada1 = $request->armada_name;
        $total = $request->total;
        $price = $request->price;
        $start = $request->start_date;
        $end = $request->end_date;
        $biaya_antar = $request->biaya_antar;
        $durasi_sewa = $request->durasi_sewa;

        $tes = 'Bukti';
        $data1 = $request->all();
        // dd($request->id_trans);

        $customPaper = array(0, 0, 550, 600);
        // dd($d);
        $pdf = PDF::loadview('cetak_invoice', [
            'bookingcode' => $tes,
            'data' => $data1,
            'title' => $tes,
            'armada' => $armada1,
            'total' => $total,
            'start_date' => $start,
            'end_date' => $end,
            'price' => $price,
            'biaya_antar' => $biaya_antar,
            'durasi_sewa' => $durasi_sewa,
            'trans' => $trans
        ])->setPaper($customPaper, 'landscape');

        return $pdf->stream($trans->bookingcode . '.pdf', array("Attachment" => false));
    }
}

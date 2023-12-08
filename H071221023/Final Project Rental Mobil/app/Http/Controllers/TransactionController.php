<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretransactionRequest;
use App\Http\Requests\UpdatetransactionRequest;
use Carbon\Carbon;
use PDF;
// use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Models\Armada;
use App\Models\transaction;
use App\Models\User;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = transaction::all();
        $armada = Armada::where('status', 'available')->get();
        return view(
            '/admin/transaction',
            [
                "title" => "Transaction",
                "transactions" => $transactions,
                "armadas" => $armada
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretransactionRequest $request)
    {
        // dd($request->bookingcode);
        // $request->validate([
        //     'no_telp' => 'numeric|required|min:8|max:11',
        // ]);
        $data = $request->all();
        $namaInvoice = time() . '.' . $request->dp_invoice->extension();
        $namaKtp = time() . '.' . $request->ktp->extension();
        $namaSim = time() . '.' . $request->sim->extension();
        // dd($nama);
        $request->dp_invoice->move(public_path('image/invoice/'), $namaInvoice);
        $request->ktp->move(public_path('image/ktp/'), $namaKtp);
        $request->sim->move(public_path('image/sim/'), $namaSim);

        $data['dp_invoice'] = $namaInvoice;
        $data['ktp'] = $namaKtp;
        $data['sim'] = $namaSim;
        // $data['bookingcode'] += 1;

        transaction::create($data);
        return redirect()->route('katalog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $find = transaction::find($id);
        $data = array(
            'title' => 'Transaction Detail',
            'transaksi' => $find
        );
        return view('admin.transaction_id', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trans = transaction::find($id);
        return response()->json([
            'trans' => $trans,
            'status' => 200
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetransactionRequest  $request
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetransactionRequest $request)
    {
        // dd($request);
        $find = transaction::find($request->id);
        $find_armada = Armada::find($request->armada_id);
        $data = $request->all();

        $find_armada['status'] = 'booked';

        if ($request->btn == 'success') {
            $find['status'] = 'success';
        } else {
            $find['status'] = 'completed';
            $find_armada['status'] = 'available';
        }

        $find_armada->update($data);
        $find->update($data);


        return back()->with('message', 'Status Transaksi Berhasil Diedit!');
    }

    public function update_admin(UpdatetransactionRequest $request)
    {
        // dd($request->all());

        $find = transaction::find($request->id);
        $armada = Armada::find($find->armada_id);

        // dd($request->hasFile('dp_invoice') || $request->hasFile('ktp') || $request->hasFile('sim') );
        $request->validate([
            'dp_invoice' => 'max:2048',
            'ktp' => 'max:2048',
            'sim' => 'max:2048',
        ]);

        $data = $request->all();

        if($request->hasFile('dp_invoice')){
            $namaInvoice = time() . '.' . $request->dp_invoice->extension();
            $request->dp_invoice->move(public_path('image/invoice/'), $namaInvoice);
            $data['dp_invoice'] = $namaInvoice;
        } else {
            $data['dp_invoice'] = $request->dp_invoice_old;
        }

        if($request->hasFile('ktp')){
            $namaKtp = time() . '.' . $request->ktp->extension();
            $request->ktp->move(public_path('image/ktp/'), $namaKtp);
            $data['ktp'] = $namaKtp;
        } else {
            $data['ktp'] = $request->ktp_old;
        }

        if($request->hasFile('sim')){
            $namaSim = time() . '.' . $request->sim->extension();
            $request->sim->move(public_path('image/sim/'), $namaSim);
            $data['sim'] = $namaSim;
        } else {
            $data['sim'] = $request->sim_old;
        }

        if($request->hasFile('pelunasan_invoice')){
            $namaPelunasan = time() . '.' . $request->pelunasan_invoice->extension();
            $request->pelunasan_invoice->move(public_path('image/pelunasan/'), $namaPelunasan);
            $data['pelunasan_invoice'] = $namaPelunasan;
        } else {
            $data['pelunasan_invoice'] = $request->pelunasan_invoice_old;
        }

        //validasi armada id
        if ($request->aramada_id == null) {
            $data['armada_id'] = $find->armada_id;
        }

        $total = $armada->price * $request->durasi_sewa;
        // dd($total);

        $data['total'] = $total;

        // dd($data);
        $find->update($data);
        return back()->with('message', 'Data Transaksi Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_armada)
    {
        // dd($id_armada);
        $find_armada = Armada::find($id_armada);
        $find_armada['status'] = 'available';
        $find = transaction::find($id);

        $find_armada->update();
        $find->delete();
        return back()->with('message', 'Data Transaksi Berhasil Dihapus!');
    }

    public function checkout($id)

    {
        $find = Armada::find($id);
        // dd($find);
        return view('checkout', ['title' => 'Checkout', 'armada' => $find]);
    }

    public function checkout_store(Request $request)
    {

        $find = User::find($request->id);
        $armada = Armada::find($request->armada_id);

        $request->validate([
            'no_telp' => 'numeric|required|digits_between: 10, 13',
            'durasi_sewa' => 'numeric|required'
        ]);

        $data = $request->all();

        // $id = $this->create($data)->id;
        // dd($id);
        $namaKtp = time() . '.' . $request->ktp->extension();
        $namaSim = time() . '.' . $request->sim->extension();
        // dd($nama);
        $request->ktp->move(public_path('image/ktp/'), $namaKtp);
        $request->sim->move(public_path('image/sim/'), $namaSim);

        $data['ktp'] = $namaKtp;
        $data['sim'] = $namaSim;

        $biaya = 0;
        if ($data['biaya_antar'] == 'utara') {
            $biaya = 20000;
            $data['pengantaran'] = "Delivery";
        } else if ($data['biaya_antar'] == 'timur' || $data['biaya_antar'] == 'tengah' || $data['biaya_antar'] == 'barat') {
            $biaya = 30000;
            $data['pengantaran'] = "Delivery";
        } else if ($data['biaya_antar'] == 'selatan') {
            $biaya = 25000;
            $data['pengantaran'] = "Delivery";
        }

        //tambahan
        // $biaya_supir = 0;
        // if ($data ['layanan_supir'] == 'dalam kota'){
        //     $biaya_supir = 150000;
        //     $data['supir'] = "dalam kota";
        // }else if ($data ['layanan_supir'] == 'luar kota'){
        //     $biaya_supir = 250000;
        //     $data['supir'] = "luar kota";
        // }

        $total = $armada->price * $request->durasi_sewa;
        // dd($total);

        $data['total'] = $total;

        // $data['supir'] = $data['layanan_supir'];

        $tr = transaction::create($data);
        // dd($tr->id);
        $id_trans = $tr->id;

        $uang = array(
            'biaya_antar' => $biaya,
            'total' => $total,
            'armada' => $armada,
            'title' => 'Payment',
            'trans' => $data['durasi_sewa'],
            'id_trans' => $id_trans,
            // 'supir' => $data ['supir'],
            //tambahan
            // 'layanan_supir' => $biaya_supir
        );

        return view('payment', $uang);
    }

    public function payment()
    {
        return view('payment', ['title' => 'Payment']);
    }

    public function payment_store(Request $request)
    {
        // dd($request->id_trans);
        $data = $request->all();
        $find = transaction::find($request->id_trans);
        $armada = Armada::find($request->armada_id);

        // validasi gambar

        $namaInvoice = time() . '.' . $request->dp_invoice->extension();
        // dd($nama);
        $request->dp_invoice->move(public_path('image/invoice/'), $namaInvoice);
        $data['dp_invoice'] = $namaInvoice;

        $find->update($data);

        $armada1 = $request->armada_name;
        $total = $request->total;
        $price = $request->price;
        $biaya_antar = $request->biaya_antar;
        $durasi_sewa = $request->durasi_sewa;
        $tgl_skrg = Carbon::now()->isoFormat('D MMMM Y');
        $id_user = $find->user_id;
        $supir = $request->supir;
        //tambahan
        // $layanan_supir = $request->layanan_supir;

        // dd($id_user);

        return view('finish_order', [
            // 'data' => $data,
            'title' => 'Order Complete',
            'armada' => $armada1,
            'total' => $total,
            'price' => $price,
            'biaya_antar' => $biaya_antar,
            //tambahan
            // 'layanan_supir' => $layanan_supir,
            'durasi_sewa' => $durasi_sewa,
            'time' => $tgl_skrg,
            'id_user' => $id_user,
            'id_trans' => $request->id_trans,
            'trans' => $find,
        ]);

    }

    // public function print_payment(Request $request)
    // {
    //     $trans = transaction::find($request->id_trans);
    //     $armada1 = $request->armada_name;
    //     $total = $request->total;
    //     $price = $request->price;
    //     $biaya_antar = $request->biaya_antar;
    //     $durasi_sewa = $request->durasi_sewa;

    //     $tes = 'Bukti';
    //     $data1 = $request->all();
    //     // dd($request->id_trans);

    //     $d = array(
    //         'title' => 'Bukti',
    //         'data' => $data1,

    //     );
    //     $customPaper = array(0, 0, 400, 500);
    //     // dd($d);
    //     $pdf = PDF::loadview('bukti', [
    //         'bookingcode' => $tes,
    //         'data' => $data1,
    //         'title' => $tes,
    //         'armada' => $armada1,
    //         'total' => $total,
    //         'price' => $price,
    //         'biaya_antar' => $biaya_antar,
    //         'durasi_sewa' => $durasi_sewa,
    //         'trans' => $trans
    //     ])->setPaper($customPaper, 'landscape');

    //     return $pdf->stream($trans->bookingcode . '.pdf');
    // }

    public function finish_order()
    {

    }

    public function view_print()
    {
        return view('bukti');
    }
}

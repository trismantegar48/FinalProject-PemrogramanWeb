@extends('layouts.main_admin')

@section('adminpage')
    <!-- Main page content-->
    <div class="container-fluid px-4">
        <div class="row gx-4">
            <div class="col-lg-8">
                <div class="card">
                    <a class="card-header" href="{{ route('transaksi.index') }}"> Back To Transaction </a>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <form action="{{ route('transaksi.update') }}" method="post">
                                {{ method_field('put') }}
                                @csrf
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <input type="hidden" name="id" value="{{ $transaksi->id }}">
                                            <input type="hidden" name="armada_id" value="{{ $transaksi->armada->id }}">
                                            <th>Kode Booking</th>
                                            <td> <b> {{ $transaksi->bookingcode }} </b></td>
                                        </tr>
                                        <tr>
                                            <th>Nama </th>
                                            <td>{{ $transaksi->fullname }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nomor Telp</th>
                                            <td>{{ $transaksi->no_telp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Armada</th>
                                            <td>{{ $transaksi->armada->name }} - (Rp. {{ number_format($transaksi->armada->price, 0, ',', '.') }})</td>
                                        </tr>
                                        <tr>
                                            <th>Start Date</th>
                                            <td>{{ date('d-m-Y', strtotime($transaksi->start_date)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>End Date</th>
                                            <td>{{ date('d-m-Y', strtotime($transaksi->end_date)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Waktu</th>
                                            <td>{{  $transaksi->waktu }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>{{ $transaksi->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <th>Total Transaksi</th>
                                            <td> Rp. {{ number_format($transaksi->total, 0, ',', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Durasi Sewa</th>
                                            <td>{{ $transaksi->durasi_sewa }} hari</td>
                                        </tr>
                                        <tr>
                                            <th>Pengantaran</th>
                                            <td>{{ $transaksi->pengantaran }}</td>
                                        </tr>
                                        <tr>
                                            <th>Layanan Supir</th>
                                            <td>{{ $transaksi->supir }}</td>
                                        </tr>
                                        <tr>
                                            <th>Note</th>
                                            <td>{{  $transaksi->note }}</td>
                                        </tr>
                                        <tr>
                                            <th>Biaya Tambahan</th>
                                            <td> Rp. {{ number_format($transaksi->service, 0, ',', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Grand Total</th>
                                            <td> <strong style="color: red"> Rp. {{ number_format($transaksi->total+$transaksi->service, 0, ',', '.') }}</strong></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td><span
                                                    class="badge bg-{{ $transaksi->status == 'success' ? 'success' : ($transaksi->status == 'completed' ? 'primary' : 'warning') }} rounded">{{ $transaksi->status }}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    <button class="btn btn-warning" value="success" name="btn" type="submit">Approved
                                        Payment</button>
                                    <button class="btn btn-success" value="completed" name="btn"
                                        type="submit">Completed Transaction</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- file uploaded --}}
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">File Uploaded</h5>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Bukti Pembayaran DP
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <img src="{{ asset('image/invoice/' . $transaksi->dp_invoice) }}" width="280"
                                            height="500" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        KTP
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <img src="{{ asset('image/ktp/' . $transaksi->ktp) }}" width="280"
                                            height="250" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        SIM
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <img src="{{ asset('image/sim/' . $transaksi->sim) }}" width="250"
                                            height="250" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        Bukti Pelunasan
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <img src="{{ asset('image/pelunasan/' . $transaksi->pelunasan_invoice) }}"width="280"
                                            height="500" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        Print Invoice
                                    </button>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            </form>
                                            <div class="mt-2">
                                                <form action="{{ route('invoice.print', $transaksi->id) }} "
                                                    class="text-center" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning">Print Invoice</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

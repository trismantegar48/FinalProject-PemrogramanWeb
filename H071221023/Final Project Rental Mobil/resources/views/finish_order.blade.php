@extends('layouts.main')

@section('container')
    <div class="container">
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h2 text-uppercase mb-0"> Order Completed</h1>
                    </div>
                    {{-- <div class="col-lg-6 text-lg-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                <li class="breadcrumb-item"><a class="text-dark" href="#">Preview</a></li>
                                <li class="breadcrumb-item"><a class="text-dark" href="#">Check Out</a></li>
                                <li class="breadcrumb-item"><a class="text-dark" href="#">Payment </li>
                                <li class="breadcrumb-item"><a class="text-dark" href="#"> / Finished</li>
                            </ol>
                        </nav>
                    </div> --}}
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <h3 class="my-5 mx-5" style="text-align: center">Thank You For Your Order</h3>
                        <div class="text-center mb-5" style="color: green">
                            <a>Pembayaran anda sedang dikonfirmasi, silahkan menunggu..</a>
                        </div>
                        <div class="text-center">
                            <h3 class="text-black">{{ $trans['fullname'] }}</h3>
                            <h5 class="text mt-1" style="color: red">Booking Code : {{ $trans['bookingcode'] }}</h5>
                            </h4>
                            <p class="text-black mt-1">{{ $time }}</p>
                            </ul>
                            {{-- <div class="card-body">
                            <h5 class="text-uppercase mb-4">Pesanan Anda</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small fw-bold">{{ $armada }} </strong>
                                    <span class="text-muted small">Rp. {{ number_format($total, 0, ',', '.') }}</span>
                                </li>
                                <span class="text-muted small">Rp. {{ number_format($price, 0, ',', '.') }} x {{ $durasi_sewa }}</span>
                                <li class="border-bottom my-2"></li>

                                <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small fw-bold">Layanan Pengantaran</strong>
                                        <span class="text-muted small"> Rp. {{ number_format($biaya_antar, 0, ',', '.') }}</span>
                                    </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small fw-bold">Layanan Supir</strong>
                                    <span class="text-muted small"> Rp. {{ number_format($layanan_supir , 0, ',', '.') }}</span>

                                        </li>
                                <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="text-uppercase small fw-bold">Total</strong>
                                        <strong>Rp. {{ number_format($total + $biaya_antar + $layanan_supir, 0, ',', '.') }}</strong>
                                </li>
                                <li class="border-bottom my-2"></li>
                            </ul>
                        </div> --}}
                            <div class="text-center mt-5">
                                <a href="{{ route('user-profile', ['id1' => $id_user, 'id2' => $id_trans]) }}"><u
                                        class="text">Cek Status Pesanan</u></a>
                            </div>
                            <div class="text-center">
                                <a>Apabila anda tidak menerima pesan konfirmasi dari admin melalui whatsapp dalam waktu 30 Menit,
                                    hubungi</a> <a href="https://wa.me/085247768054">(Chat Now)</a>
                            </div>
                        </div>
                    </div>
        </section>
    </div>
@endsection

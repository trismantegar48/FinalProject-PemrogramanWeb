{{-- @extends('layouts.main') --}}

{{-- @section('container') --}}
{{-- {{ dd() }} --}}
<style>

    
    .container {
        background-color: #f8f9fa;
        width: 450px;
        height: 280px;
        padding: 1.5rem;
        margin: 40px auto;
    }

    .header,
    li {
        font: 20px Heebo, sans-serif;
    }

    .header {
        text-transform: uppercase;
        margin-bottom: 1.5rem;
        font-weight: bold;
    }

    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    ul li {
        /* display: flex; */
        font-size: 12.8px;
        margin-bottom: 10px;
    }

    ul .my-li {
        /* justify-content: space-between;
        align-content: center; */
    }

    .text-muted {
        color: #6c757d;
    }

    .head {
        display: inline-block;
    }

    .code {
        margin-top: -50px;
        margin-left: 180px;
    }
</style>

<div class="container">

    <section class="py-5">
        <!-- BILLING ADDRESS-->
        <div class="col-lg-6">
            <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                    <div class="head">

                        <h5 class="text-uppercase header mb-4">Pesanan Anda   </h5>
                        <h5 class="code header" style="color: red; ">#{{$trans->bookingcode}} </h5>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-center justify-content-between my-li">
                            <strong  class="small fw-bold">{{ $armada }} </strong>
                            <span style="margin-right: auto; float:right;" class="text-muted small">Rp.
                                {{ number_format($total, 0, ',', '.') }}
                            </span>
                        </li>

                        <span class="text-muted small">Rp. {{ number_format($price, 0, ',', '.') }} x
                            {{ $durasi_sewa }}
                        </span>

                        {{-- <li class="border-bottom my-2"></li> --}}
                        <hr>
                        <li class=" my-li"><strong class="small fw-bold">Layanan Pengantaran</strong>
                            <span style="margin-right: auto; float:right;" class="text-muted small">
                                Rp. {{ number_format($biaya_antar, 0, ',', '.') }}
                            </span>
                        </li>
                        <hr>
                        <li class="border-bottom my-2"></li>
                            <li class=" my-li"><strong 
                                class="text-uppercase small fw-bold">Total</strong>
                                <span style="margin-right: auto; float:right;"><strong > Rp.
                                    {{ number_format($total + $biaya_antar, 0, ',', '.') }} </strong></span>
                                </li>
                        <hr>
                        {{-- <li class="border-bottom my-2"></li> --}}
                        <li class=" my-li">
                            <strong class="text-uppercase small fw-bold" style="color: red;">DP
                                (50%)
                            </strong>
                            <span style=" margin-right: auto; float:right;">
                                <strong > Rp.
                                    {{ number_format($total / 2, 0, ',', '.') }}
                                </strong>
                            </span>
                        </li>
                        <li>

                            <span class="text-muted small">*Total DP 50% dari Total Penyewaan Mobil </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>
</section>
</div>
</div>
</section>
{{-- @endsection --}}

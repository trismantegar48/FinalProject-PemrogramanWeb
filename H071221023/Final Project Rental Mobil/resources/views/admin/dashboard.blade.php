@extends('layouts.main_admin')

@section('adminpage')
    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-xxl-5 col-md-6">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Revenue</a></span>
                                </h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bx-dollar-circle"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6> {{ number_format($pendapatan, 0, ',', '.') }}</h6>
                                        <span class="text-muted small pt-2 ps-1 fw-bold">Total Income</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xxl-5 col-md-4">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('cars.index') }} "> Armada</a> <span>| All</span>
                                </h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bxs-car-garage"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6> {{ $car }} </h6>
                                        <span class="text-muted small pt-2 ps-1 fw-bold">Bus & Cars</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-5 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('user.index') }} ">Users</a> <span>| All</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bx-user-check"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $user }}</h6>
                                        <span class="text-muted small pt-2 ps-1 fw-bold">Users</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-5 col-md-6">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title"> <a href="{{ route('transaction.index') }}  ">Transaction <span></a>|
                                    All</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi-nintendo-switch"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6> {{ $transaksi }} </h6>
                                        <span class="text-danger small pt-1 fw-bold"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>




        </div>

        <div class="row">

            <div class="col-xxl-12 col-md-8">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title"><a href=" {{ route('testi.index') }} ">Testimoni</a> <span>| All</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i
                                    class="bi-person-badge-fill"></i></div>
                            <div class="ps-3">
                                <h6> {{ $testimoni }} </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </main>
    @include('partials.footerAdmin')
@endsection

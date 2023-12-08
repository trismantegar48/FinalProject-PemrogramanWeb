@extends('layouts.main')

@section('container')
    <div class="container">
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h2 text-uppercase mb-0">Checkout</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                <li class="breadcrumb-item"><a class="text-dark" href="/katalog">Preview</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <!-- Rent Information-->
            <h2 class="h5 text-uppercase mb-4">Transaction Form</h2>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('checkout.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="user_id" value="{{ Session()->get('id', '') }}">
                        <input type="hidden" name="armada_id" value="{{ $armada->id }} ">
                        <div class="row gy-3">
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="firstName">Nama Lengkap </label>
                                <input class="form-control form-control-lg" name="fullname" type="text" value="{{ Session()->get('fullname', '') }}" id="firstName" placeholder="" required>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="email">Email </label>
                                <input class="form-control form-control-lg" name="email"
                                    value="{{ Session()->get('email', '') }}" disabled type="email" id="email" placeholder="">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="phone">Nomor Telepon (WA) </label>
                                <input class="form-control form-control-lg" name="no_telp" type="" id="phone" placeholder="" required>
                            </div>
                            <div class="col-lg-3">
                                <label class="form-label text-sm text-uppercase" for="instagram"> Durasi Sewa</label>
                                <input class="form-control form-control-lg" type="" id="sarfarazrentcar" placeholder="...Hari" name="durasi_sewa" required>
                            </div>
                            <div class="col-lg-3">
                                <label class="form-label text-sm text-uppercase" for="waktu"> Jam</label>
                                <input class="form-control form-control-lg" type="time" id="sarfarazrentcar" placeholder="" name="waktu" required>
                            </div>
                            <div class="col-lg-12">
                                <label class="form-label text-sm text-uppercase" for="address">Alamat Lengkap </label>
                                <input class="form-control form-control-lg" type="text" name="alamat" id="address" placeholder="" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="formFile" class="form-label">KTP</label>
                                <input class="form-control" type="file" name="ktp" id="formFile" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="formFile" class="form-label">SIM</label>
                                <input class="form-control" type="file" name="sim" id="formFile" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="formFile" class="tm form-label">Start Date</label>
                                <input class="form-control form-control-lg" name="start_date" type="date" id="formFile"
                                    required data-date-format="DD/MMM/YYYY" placeholder="dd/mm/yyyy" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="formFile" class="tm form-label">End Date</label>
                                <input class="form-control form-control-lg" name="end_date" type="date" id="formFile"
                                    required data-date-format="DD/MMM/YYYY" placeholder="dd/mm/yyyy" required>
                            </div>

                            <div class="col-lg-12">
                                <label class="form-label text-sm text-uppercase" for="checkbox">
                                    <h6> Layanan Supir</h6>
                                </label>
                                {{-- <div class="input-group mb-3">
                                    <select class="form-select" name="supir" id="inputGroupSelect01">
                                        <option value="tanpa supir" selected> Lepas Kunci </option>
                                        <option value="dalam kota">Dalam Kota</option>
                                        <option value="luar kota">Luar Kota
                                        </option>
                                    </select>
                                </div> --}}
                                <div class="input-group mb-3">
                                    <select class="form-select" name="supir" id="inputGroupSelect01">
                                        <option value="tanpa supir" selected> Lepas Kunci</option>
                                        <option value="dalam kota">Dalam Kota (Start From : Rp. 150.000/12 Jam)</option>
                                        <option value="luar kota">Luar Kota (Start From : Rp. 250.000 - Rp. 300.000/ 12 Jam)</option>
                                    </select>
                                </div>
                                <div class="text-danger">* Include Driver (Harga sudah termasuk layanan supir) : silahkan
                                    pilih "lepas kunci"</div>
                                {{-- <div class="text-danger">* Biaya layanan supir dan lainnya dibayar bersamaan pada saat
                                    pelunasan biaya rental</div> --}}
                                    <div class="text-danger">* Harap menghubungi admin untuk Informasi mengenai tambahan biaya layanan supir</div>
                            </div>

                            <div class="col-lg-12">
                                <label class="form-label text-sm text-uppercase" for="checkbox">
                                    <h6> Layanan Pengantaran</h6>
                                </label>
                                <div class="input-group mb-3">
                                    <select class="form-select" name="biaya_antar" id="inputGroupSelect01">
                                        <option value="0" selected> Ambil Sendiri (Self Pick-Up)</option>
                                        <option value="utara">Balikpapan Utara (+ Rp. 20.000)</option>
                                        <option value="timur">Balikpapan Timur (+ Rp. 30.000)</option>
                                        <option value="selatan">Balikpapan Selatan (+ Rp. 25.000)</option>
                                        <option value="tengah">Balikpapan Tengah (+ Rp. 30.000)</option>
                                        <option value="barat">Balikpapan Barat (+ Rp. 30.000)</option>
                                        <option value="0">Bandara Sultan Aji Muhammad Sulaiman Sepinggan (Free)
                                        </option>
                                    </select>
                                </div>
                                {{-- <div class="text-danger">*biaya pengantaran diberikan secara langsung kepada supir</div> --}}
                            </div>
                            <input type="hidden" name="total" value="0">
                            <div class="col-lg mt-3">
                                <button class="btn btn-primary" type="submit"> Pesan Sekarang </button>
                            </div>

                        </div>
                    </form>
                    {{-- <a href="{{ route('view_print') }} ">tes view</a> --}}
                </div>
            </div>
        </section>
    </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
    <script>

        $(".tm").on("change", function() {
        this.setAttribute(
            "data-date",
            moment(this.value, "YYYY-MM-DD")
            .format( this.getAttribute("data-date-format") )
        )
        }).trigger("change")

    </script>
    @endsection

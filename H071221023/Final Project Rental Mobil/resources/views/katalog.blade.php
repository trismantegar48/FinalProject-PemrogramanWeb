@extends('layouts.main')

@section('container')
    <div class="loader"></div>
    <main class="shop-page">
        <div class="container">
            <div class="page-header wow fadeInUp">
                <h4 class="page-title">Katalog Armada (Mobil & Bus)</h4>
            </div>

            <div class="row">
                @foreach ($armadas as $data)
                    <div class="col-md-3 product-card wow fadeInUp">
                        <div class="product-thumbnail-wrapper">
                            <img src="{{ asset('image/cars/' . $data->picture_url) }}" alt="product"
                                class="product-thumbnail">
                        </div>
                        <h5 class="product-title"> {{ strtoupper($data->name) }} </h5>
                        <p class="product-desc"> {{ strtoupper($data->transmission) }} - {{ strtoupper($data->status) }}
                        </p>
                        <p class="product-price"> Rp. {{ number_format($data->price, 0, ',', '.') }} /Hari</p>
                        <div class="btn-wrapper">
                            <a href="{{ Session()->get('username') == "" ? 'login' : route('checkout', $data->id ) }}"
                                class="btn btn-add-to-cart">
                                Pesan</a>
                        </div>
                    </div>
                @endforeach
            </div>

        {{-- modal --}}
        <div class="modal fade" id="scrollingModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Transaction</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('transaksi.store') }} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-6">
                                <div class="col-md-12">
                                    <label for="start-date">Nama Lengkap</label>
                                    <input type="text" placeholder="Nama Lengkap..." name="fullname"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="armada_id" class="col-sm-3 col-form-label">Armada</label>


                                <div class="col-sm-12">
                                    <select name="armada_id" class="form-control selectx">
                                        <option value=""> Pilih Armada </option>
                                        @foreach ($armadas as $item)
                                            <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('armada_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="start-date">Start-Date</label>
                                        <input type="date" name="start_date" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="start-date">End-Date</label>
                                        <input type="date" name="end_date" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="address">Phone Number</label>
                                        <input name="no_telp" class="form-control" placeholder="08xx..." required></input>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="start-date">Durasi Sewa</label>
                                        <input type="number" name="durasi_sewa" placeholder="... hari" class="form-control"
                                            placeholder="">
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="address">Alamat</label>
                                        <input type="adress" name="alamat" class="form-control" placeholder="Alamat..">
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="invoice">Bukti Pembayaran</label>
                                        <input type="file" name="dp_invoice" class="form-control" placeholder="Upload..">
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="ktp">KTP</label>
                                        <input type="file" name="ktp" class="form-control" placeholder="Upload..">
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="sim">SIM</label>
                                        <input type="file" name="sim" class="form-control"
                                            placeholder="Upload..">
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <label for="armada_id" class="col-sm-3 col-form-label">Supir</label>
                                    <div class="col-sm-12">
                                        <select name="pengantaran" class="form-control selectx">
                                            <option value="self pick-up">Lepas Kunci</option>
                                            <option value="Delivery">Delivery</option>
                                        </select>
                                    </div>
                                    @error('driver_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection

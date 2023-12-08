@extends('layouts.main_admin')

@section('adminpage')
    <section class="section transaction">
        <div class="col-12">
            <div class="card top-selling overflow-auto">
                <div class="card-body pb-0 mt-5">
                    {{-- <h5 class="card-title">Transaction List <span>| --}}
                    </h5>
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th scope="col">Booking Code</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Armada</th>
                                <th scope="col">Grand Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $data)
                                <tr>
                                    <th scope="row"> <a href="{{ route('transaksi.detail', $data->id) }} ">
                                            {{ $data->bookingcode }} </a></th>
                                    <td> {{ ucwords($data->fullname) }}</td>
                                    <td> {{ date('d-m-Y', strtotime($data->start_date)) }} </a></td>
                                    <td> {{ date('d-m-Y', strtotime($data->end_date)) }}</td>
                                    <td>{{ $data->armada->name }}</td>
                                    <td>Rp. {{ number_format($data->total+$data->service, 0, ',', '.') }}</td>
                                    <td>
                                        <span
                                            class="badge bg-{{ $data->status == 'success' ? 'success' : ($data->status == 'completed' ? 'primary' : 'warning') }} rounded">{{ $data->status }}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <form class="me-2"
                                                action="{{ route('transaksi.destroy', ['id1' => $data->id, 'id2' => $data->armada->id]) }} "
                                                method="post">
                                                {{ method_field('delete') }}
                                                @csrf
                                                <input type="hidden" name="armada_id" value="{{ $data->armada->id }}">
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                            <button type="button" value="{{ $data->id }}"
                                                class="btn me-2 editBtn btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            {{-- <a href="{{ route('transaksi.detail', $data->id) }}"
                                                class="badge  bg-{{ $data->status == 'success' ? 'success disabled' : ($data->status == 'completed' ? 'secondary disabled' : 'warning') }}">
                                                {{ $data->status == 'success' ? 'DP sudah dibayar' : ($data->status == 'completed' ? 'transaksi selesai' : 'proses dibayar') }}
                                            </a> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        {{-- modal edit --}}
        <div class="modal fade" id="editModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Transaction</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    {{-- <form action="{{ route('transaction.store') }}" method="post"> --}}
                    <form action="{{ route('transaksi.admin.update') }} " id="editForm" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="modal-body">
                            <div class="mb-6">
                                <div class="col-md-12">
                                    <label for="start-date">Nama Lengkap</label>
                                    <input type="text" placeholder="Nama Lengkap..." id="name_old" name="fullname"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="col-md-12">
                                    <label for="start-date">Start-Date</label>
                                    <input type="date" id="start_date_old" name="start_date" class="form-control">
                                </div>
                            </div>

                            <div class="mb-6">
                                <div class="col-md-12">
                                    <label for="start-date">End-Date</label>
                                    <input type="date" id="end_date_old" name="end_date" class="form-control"
                                        placeholder="">
                                </div>
                            </div>

                            <div class="mb-6">
                                <div class="col-md-12">
                                    <label for="address">Phone Number</label>
                                    <input name="no_telp" id="no_telp_old" class="form-control"
                                        placeholder="08xx..."></input>
                                </div>
                            </div>

                            <div class="mb-6">
                                <div class="col-md-12">
                                    <label for="start-date">Durasi Sewa</label>
                                    <input type="number" id="durasi_old" name="durasi_sewa" placeholder="... hari"
                                        class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="mb-6">
                                <div class="col-md-12">
                                    <label for="address">Alamat</label>
                                    <input type="adress" id="alamat_old" name="alamat" class="form-control"
                                        placeholder="Alamat..">
                                </div>
                            </div>

                            <div class="mb-6">
                                <div class="col-md-12">
                                    <label for="note">Note</label>
                                    <input type="text" id="note_old" name="note" class="form-control"
                                        placeholder="Catatan..">
                                </div>
                            </div>

                            <div class="mb-6">
                                <div class="col-md-12">
                                    <label for="note">Biaya Tambahan</label>
                                    <input type="text" id="service_old" name="service" class="form-control"
                                        placeholder="Rp. ">
                                </div>
                            </div>

                            <div class="mb-6">
                                <div class="col-md-12">
                                    <label for="invoice">Bukti Pembayaran</label>
                                    <input type="file" id="dp_invoice_old" name="dp_invoice" class="form-control"
                                        placeholder="Upload..">
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
                                    <input type="file" name="sim" class="form-control" placeholder="Upload..">
                                </div>
                            </div>

                            <div class="mb-6">
                                <div class="col-md-12">
                                    <label for="pelunasan">Bukti Pelunasan</label>
                                    <input type="file" name="pelunasan_invoice" class="form-control"
                                        placeholder="Upload..">
                                </div>
                            </div>

                            <input type="hidden" name="dp_invoice_old" id="invoice_old">
                            <input type="hidden" name="ktp_old" id="ktp_old">
                            <input type="hidden" name="sim_old" id="sim_old">
                            <input type="hidden" name="armada_id_old" id="armada_id_old">

                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    {{-- @include('partials.footerAdmin') --}}
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.editBtn', function() {
                var id = $(this).val();
                // alert(id);
                $('#editModal').modal('show');

                $.ajax({
                    type: "GET",
                    url: "/admin/transaksi/edit/" + id,
                    success: function(response) {
                        console.log(response.trans);
                        $('#name_old').val(response.trans.fullname);
                        $('#no_telp_old').val(response.trans.no_telp);
                        $('#start_date_old').val(response.trans.start_date);
                        $('#end_date_old').val(response.trans.end_date);
                        $('#durasi_old').val(response.trans.durasi_sewa);
                        $('#alamat_old').val(response.trans.alamat);
                        $('#invoice_old').val(response.trans.dp_invoice);
                        $('#ktp_old').val(response.trans.ktp);
                        $('#sim_old').val(response.trans.sim);
                        $('#note_old').val(response.trans.note);
                        $('#service_old').val(response.trans.service);
                        $('#pelunasan_old').val(response.trans.pelunasan_invoice);
                        // $('#total_old').val(response.trans.total);
                        // $('#armada_id_old').val(response.trans.armada_id);
                        $('#id').val(id);
                    }
                });

            });
        });
    </script>
@endsection

@push('addon-style')
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
@endpush

@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".selectx").select2({
            theme: "bootstrap-5"
        });
    </script>
@endpush

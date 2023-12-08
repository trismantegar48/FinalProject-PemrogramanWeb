@extends('layouts.main_admin')

@section('adminpage')
    <section class="section cars">
        <div class="col-12">
            <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">
                    <h5 class="card-title">Cars List <span>|
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#verticalycentered">
                                {{-- <a href="{{ route('Armada.create') }}"></a> --}}
                                Tambah Data
                            </button>
                    </h5>
                    <table class="table table-sm datatable">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Preview</th>
                                <th scope="col">Armada Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($armadas as $i => $data)
                                <tr>
                                    <th>
                                        <p class="card-title-desc"> {{ ++$i }}</p>
                                    </th>
                                    <th scope="row">
                                        <img src={{ '/image/cars/' . $data->picture_url }} alt=""
                                            class="card-img-preview">
                                    </th>
                                    <th><a href="#"> </a>
                                        <h5 class="card-title product-name"> {{ strtoupper($data->name) }}</h5>
                                        <span class="badge bg-success"> {{ $data->transmission }}</span>
                                        <span class="badge bg-dark"> {{ $data->plat }}</span>
                                    </th>
                                    <th>
                                        <p class="card-title-desc"> Rp. {{ number_format($data->price, 0, ',', '.') }} </p>
                                    </th>
                                    <th>
                                        <button class="btn btn-{{ $data->status == 'booked' ? 'secondary' : 'primary'}} rounded"> {{ $data->status }} </button></th>
                                    <th>
                                        <div class="d-flex">

                                            <form class="me-2" action="{{ route('cars.destroy', $data->id) }} " method="post">
                                                {{ method_field('delete') }}
                                                @csrf
                                                <button type="submit" class="btn {{ $data->status == 'booked' ? 'disabled' : '' }} btn-danger">
                                                    <i class="bi bi-trash"> </i>
                                                </button>
                                            </form>
                                            <button type="button" value="{{ $data->id }}" class="btn editBtn btn-primary">
                                                <i class="bi bi-pencil-square"> Edit </i>
                                            </button>
                                        </div>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- modal tambah --}}
        <div class="modal fade" id="verticalycentered" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Cars</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">
                        {{-- <form action="" method="post"> --}}
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="name">Armada Name</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Masukan Nama Armada.." required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="address">Price</label>
                                    <input name="price" class="form-control" placeholder="Masukan Harga.."
                                        required></input>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="address">Plat</label>
                                    <input name="plat" type="text" class="form-control" placeholder="Masukan Plat.."
                                        required></input>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="address">Transmisi</label>
                                    <select class="form-control" name="transmission" id="">
                                        <option value="matic">Matic</option>
                                        <option value="manual">Manual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="email">Picture</label>
                                    <input type="file" name="picture_url" class="form-control"
                                        placeholder="Upload Picture" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- modal edit --}}
        <div class="modal fade" id="editModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Cars</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('cars.update') }}" method="post" id="editForm" enctype="multipart/form-data">
                        {{ method_field('put') }}
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="name">Armada Name</label>
                                    <input type="text" name="name" class="form-control" id="name_old"
                                        placeholder="Masukan Nama Armada.." required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="address">Price</label>
                                    <input name="price" class="form-control" id="price_old"
                                        placeholder="Masukan Harga.." required></input>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="address">Plat</label>
                                    <input name="plat" id="plat_old" type="text" class="form-control" placeholder="Masukan Plat Kendaraan"
                                        required></input>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="address">Transmisi</label>
                                    <select class="form-control" name="transmission" id="trans_old">
                                        <option value="matic">Matic</option>
                                        <option value="manual">Manual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="email">Picture</label>
                                    <input type="file" name="picture_url" id="picture" class="form-control"
                                        placeholder="Upload Picture" >
                                    <input type="hidden" name="picture_old" id="picture_old">
                                </div>
                                <div class="form-row text-center">
                                    <div class="form-group col-md-12">
                                        <img class="rounded img-fluid" id="showImage">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

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
                url: "/admin/cars/edit/"+id,
                success : function (response) {
                    console.log(response.car.picture_url);
                    $('#name_old').val(response.car.name);
                    $('#price_old').val(response.car.price);
                    $('#picture_old').val(response.car.picture_url);
                    $('#plat_old').val(response.car.plat);
                    $('#trans_old').val(response.car.transmission);
                    $('#id').val(id);
                    $('#showImage').attr('src', "{{ asset('image/cars') }}/" + response.car.picture_url);
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

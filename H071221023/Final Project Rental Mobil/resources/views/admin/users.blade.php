@extends('layouts.main_admin')

@section('adminpage')
    <section class="section user">
        <div class="col-12">
            <div class="card">
                <div class="card-body mt-5">
                    {{-- <h5 class="card-title ">User Account <span>| All</span></h5> --}}
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Username</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                {{-- <th scope="col">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</a></th>
                                    <td><span>{{ $data->username }} </span></td>
                                    <td><span>{{ $data->fullname }} </span></td>
                                    <td>{{ $data->email }} </a></td>
                                    {{-- <td>
                                        <div class="d-flex">
                                            <form class="me-2" action="{{ route('user.destroy', $data->id) }} "
                                                method="post">
                                                {{ method_field('delete') }}
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi bi-trash"> Hapus</i>
                                                </button>
                                            </form>
                                            <button type="button" value="{{ $data->id }}"
                                                class="btn editBtn btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                        </div>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- modal edit --}}
        <div class="modal fade" id="editModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    {{-- <form action="{{ route('cars.store') }}" method="post"> --}}
                    <form action="{{ route('user.update') }} " method="post">
                        {{ method_field('put') }}
                        @csrf
                        <input type="hidden" id="id" name="id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="name">Username</label>
                                    <input type="text" name="username" id="username_old" class="form-control"
                                        placeholder="Username baru" required >
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="address">Email</label>
                                    <input name="email" class="form-control" id="email_old" placeholder="Email baru"
                                        required></input>
                                </div>
                            </div>
                            {{-- <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="address">Password</label>
                                    <input type="password" name="password" class="form-control" id="password_old" placeholder="Password baru"
                                        required></input>
                                </div>
                            </div> --}}
                        </div>
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
                    url: "/admin/user/edit/" + id,
                    success: function(response) {
                        console.log(response.user);
                        $('#username_old').val(response.user.username);
                        $('#email_old').val(response.user.email);
                        $('#password_old').val(response.user.password);
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

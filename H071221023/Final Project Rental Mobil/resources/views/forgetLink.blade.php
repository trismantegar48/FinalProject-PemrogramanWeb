@extends('layouts.main')

@section('container')

    <body>
        <div class="loader"></div>
        <main class="d-flex align-items-center min-vh-75 mt-5 mb-5">
            <div class="container">
                <div class="card login-card">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="/image/loginpict.jpg" alt="login" class="login-card-img">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <p class="login-card-description">Reset Password</p>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $v)
                                        <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                                            <strong> {{$v}} </strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endforeach
                                @endif
                                @if($message = Session::get('failed'))
                                    <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                                        <strong> {{$message}} </strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <form action="{{ route('reset.password.post') }} " method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="form-group">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" name="email" id="emailtest" class="form-control"
                                            placeholder="Email address">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="password" class="sr-only">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Enter New Password">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="password" class="sr-only">Password Confirmation</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                                            placeholder="Enter Confirmation New Password">
                                    </div>
                                    <button id="login" class="btn btn-block login-btn mb-4" type="submit">
                                        Change Password
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>
    {{-- @include('partials.footer') --}}
@endsection

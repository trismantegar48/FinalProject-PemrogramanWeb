@extends('layouts.main')

@section('container')

    <body>
        <div class="loader">
            <main class="d-flex align-items-center mt-5 mb-5">
                <div class="container">
                    <div class="card login-card">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <img src="/image/loginpict.jpg" alt="login" class="login-card-img">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <p class="login-card-description">Forget Password </p>
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $v)
                                            <li class="list-group-item list-group-item-danger mb-2">{{ $v }}</li>
                                        @endforeach
                                    @endif
                                    @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                                            <strong> {{$message}} </strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <p>Masukkan Akun Email Anda, Untuk Dikirimi Link Reset Password</p>
                                    <form action="{{ route('re-pass') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email" class="sr-only">Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Email address" required autofocus>
                                        </div>
                                        <button id="login" class="btn btn-block login-btn mb-4"
                                        type="submit">Send Link</button>
                                    </form>
                                    <a href="{{ route('login') }} " class="text-secondary">Back </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>


    {{-- @include('partials.footer') --}}
@endsection

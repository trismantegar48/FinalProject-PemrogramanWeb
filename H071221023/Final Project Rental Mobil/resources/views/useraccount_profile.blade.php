@extends('layouts.main', ['title' => 'User Profile'])

@section('container')
    <div class="container">
        {{-- {{ dd($user) }} --}}
        <section>
            <div class="container padding-bottom-3x mb-2">
                <div class="row">
                    <div class="col-lg-4">
                        <aside class="user-info-wrapper">
                            <div class="user-cover"  style="">
                                <img src="/image/admin.jpg" alt="cover">
                            </div>
                            <div class="user-info">
                                <div class="user-avatar">
                                    <a class="edit-avatar" href="#"></a><img
                                        src="/image/user-profile.jpg" alt="User">
                                </div>
                                <div class="user-data">
                                    <h4 style="color: white"> {{ Session()->get('username', '') }} </h4>
                                </div>
                            </div>
                        </aside>
                        @include('nav-profile')
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body pt-3">
                                <div class="tab-content pt-2">
                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title">Email</h5>
                                        <p class="label ">{{ $user->email }} </p>
                                        <h5 class="card-title">Full Name</h5>
                                        <p class="label ">{{ strtoupper ($user->fullname) }} </p>
                                        <h5 class="card-title">Username</h5>
                                        <p class="label ">{{ $user->username }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

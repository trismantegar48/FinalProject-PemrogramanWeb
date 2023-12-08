@extends('layouts.main')

@section('container')
    <div class="container">
        <section>
            <div class="container padding-bottom-3x mb-2">
                <div class="row">
                    <div class="col-lg-4">
                        <aside class="user-info-wrapper">
                            <div class="user-cover">
                                <img src="/image/admin.jpg" alt="cover">
                            </div>
                            <div class="user-info">
                                <div class="user-avatar">
                                    <a class="edit-avatar" href="#"></a>
                                    <img src="/image/user-profile.jpg" alt="User">
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
                                <div class="padding-top-2x mt-2 hidden-lg-up"></div>

                                <!-- Transaction Table-->
                                <div class="table-responsive wishlist-table margin-bottom-none">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <h4>Transaksi</h4>
                                            </tr>
                                        </thead>
                                        @foreach ($trans as $item)
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="product-item">
                                                            <div class="product-info">
                                                                <h3 class="invoice-id">
                                                                    <a> <strong style="color: rebeccapurple"> #{{ $item->bookingcode }}</strong> </a>
                                                                </h3>
                                                                <div class="text-lg fw-bold"> {{ $item->armada->name }}
                                                                </div>
                                                                <div class="text-lg text-bold text-muted">Rp.
                                                                    {{ number_format($item->total, 0, ',', '.') }} </div>
                                                                <div> Status:
                                                                    <div
                                                                        class="badge bg-{{ $item->status == 'success' ? 'success' : ($item->status == 'completed' ? 'primary' : 'warning') }} rounded">
                                                                        {{ $item->status }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

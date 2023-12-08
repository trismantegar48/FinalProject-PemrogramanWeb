@extends('layouts.main')

@section('container')
    <div class="container">
        <section>
            <div class="container padding-bottom-3x mb-2">
                <div class="row">
                    <div class="col-lg-4">
                        <aside class="user-info-wrapper">
                            <div class="user-cover" style="">
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

                    <div class="col-lg-8 border">
                        @foreach ($trans as $item)
                            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                            <!-- Invoice -->
                            <form action="{{ route('invoice.print', $item->id) }} " method="POST">
                                @csrf
                                <input type="hidden" name="id_trans" value="{{ $id_trans }}">

                                <body>
                                    <img src="/image/logo.png" alt="logo" height="50">
                                    <table class="table mt-2">
                                        <tbody>
                                            <tr>
                                                <td class="border-0 pl-0" width="70%">
                                                    <h4 class="text-uppercase"><strong> Sarfaraz Rent Car</strong></h4>
                                                </td>
                                                <td class="border-0">
                                                    <h4 class="text-uppercase"> {{ $item->status }}</h4>
                                                    <p> Booking Code : {{ $item->bookingcode }} </p>
                                                    <p> {{ date('d-m-Y', strtotime($item->start_date)) }} -
                                                        {{ date('d-m-Y', strtotime($item->end_date)) }}</p>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    {{-- Seller - Buyer --}}
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="border-0 pl-0 party-header" width="48.5%"></th>
                                                <th class="border-0" width="3%"></th>
                                                <th class="border-0 pl-0 party-header"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="px-0">
                                                    <p class="seller-name fw-bold">Pemilik</p>
                                                    <p> Sarfaraz Rent Car</p>
                                                    <p class="seller-address"> Perumahan Puri Mandastana Blok Q No.3</p>
                                                    <p> 08123456789 </p>
                                                </td>
                                                <td class="border-0"></td>
                                                <td class="px-0">
                                                    <p> <strong> Penyewa</strong></p>
                                                    <p> {{ $item->fullname }} </p>
                                                    <p> {{ $item->alamat }} </p>
                                                    <p> {{ $item->no_telp }} </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    {{-- Table --}}
                                    <table class="table table-items">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="border-0 pl-0">Armada</th>
                                                <th scope="col" class="text-center border-0"> Durasi </th>
                                                <th scope="col" class="text-center border-0"> Harga </th>
                                                <th scope="col" class="text-right border-0"> Total </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pl-0"> {{ $item->armada->name }}</td>
                                                <td class="text-center">{{ $item->durasi_sewa }} Hari</td>
                                                <td class="text-center">Rp.
                                                    {{ number_format($item->armada->price, 0, ',', '.') }}</td>
                                                <td class="text-right">Rp. {{ number_format($item->total, 0, ',', '.') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0"> Layanan Supir</td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-right">{{ $item->supir }}</td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0"> Layanan Pengantaran Unit</td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-right">{{ $item->pengantaran }}</td>
                                                {{-- <td class="text-right">{{ $item->pelunasan_invoice }}</td> --}}
                                            </tr>
                                            <tr>
                                                <td class="pl-0"> Biaya Layanan</td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-right"> Rp.{{ number_format($item->service, 0, ',', '.') }}</td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0 fw-bold"> Grand Total</td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-right fw-bold">
                                                    Rp. {{ number_format($item->total+$item->service, 0, ',', '.') }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-grid gap-2">
                                                        <button type="submit" class="btn btn-dark">Print Invoice</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </body>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
    </section>
@endsection

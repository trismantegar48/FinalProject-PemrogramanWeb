@extends('layouts.main_admin')

@section('adminpage')
    <section class="section setting">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item"> <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Overview</button></li>
                        <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#profile-edit">Berkas</button></li>

                    </ul>
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">About</h5>
                            <p class="small fst-italic">Rental mobil balikpapan terpercaya yang mengutamakan pelayanan yang
                                cepat & tepat dengan harga terjangkau</p>
                            <h5 class="card-title">Company Details</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Company Name</div>
                                <div class="col-lg-9 col-md-8">CV. Sarfaraz Borneo Utama</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Name</div>
                                <div class="col-lg-9 col-md-8">Sarfaraz Rent Car</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Address</div>
                                <div class="col-lg-9 col-md-8">Jl.Soekarno Hatta 4.5 Perumahan Puri Mandastana Blok Q no 3,
                                    Batu Ampar
                                    Kota Balikpapan, Kalimantan Timur</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                <div class="col-lg-9 col-md-8">085247768054</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">sarfarazrentcar@gmail.com</div>
                            </div>
                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                              <form>
                                 <div class="row mb-3">
                                    <label for="fullName" class="col-lg-3 col-md-4 labell"> Perizinan </label>
                                    <div class="col-md-8 col-lg-9"> <a href="/image/berkas/perizinan.jpeg" class="text-primary">Perizinan Berusaha Berbasis Risiko</a></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="fullName" class="col-lg-3 col-md-4 labell"> Perizinan </label>
                                    <div class="col-md-8 col-lg-9"> <a href="/image/berkas/Surat Pernyataan Usaha Mikro.jpeg"" class="text-primary">Pernyataan Usaha Mikro atau Usaha Kecil Terkait Tata Ruang</a></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="fullName" class="col-lg-3 col-md-4 labell"> Perizinan </label>
                                    <div class="col-md-8 col-lg-9"> <a href="/image/berkas/SPPL.jpeg"  class="text-primary">Pernyataan Kesanggupan Pengelolaan dan Pemantauan Lingkungan Hidup (SPPL)</a></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="fullName" class="col-lg-3 col-md-4 labell"> NPWP </label>
                                    <div class="col-md-8 col-lg-9"> <a href="/image/berkas/npwp.jpeg" class="text-primary">CV. Sarfaraz Borneo Utama</a></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="fullName" class="col-lg-3 col-md-4 labell"> Surat </label>
                                    <div class="col-md-8 col-lg-9"> <a href="/image/berkas/suketterdaftar.jpeg" class="text-primary">Keterangan Terdaftar</a></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="fullName" class="col-lg-3 col-md-4 labell"> Perizinan </label>
                                    <div class="col-md-8 col-lg-9"> <a href="/image/berkas/lampiransuratpernyataan.jpeg" class="text-primary">Surat Pernyataan</a></div>
                                 </div>
                              </form>
                           </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
    @include('partials.footerAdmin')
@endsection

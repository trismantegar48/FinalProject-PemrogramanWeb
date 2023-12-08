@extends('layouts.main')

@section('container')

    <body>
        <main class="about-page">
            <div class="container">
                <h2 class="oleez-page-title wow fadeInUp">About Us</h2>
                <img src="/image/aboutus.jpg" alt="about" class="w-100 wow fadeInUp">
                <section class="oleez-about-features">
                    <div class="row">
                        <div class="col-md-4 mb-5 mb-md-0 feature-card wow fadeInUp">
                            <h5 class="feature-card-title">Pelayanan</h4>
                                <p class="feature-card-content">Rental mobil balikpapan terpercaya yang mengutamakan
                                    pelayanan yang cepat & tepat dengan harga terjangkau </p>
                        </div>
                        <div class="col-md-4 mb-5 mb-md-0 feature-card wow fadeInUp">
                            <h5 class="feature-card-title">Keamanan</h4>
                                <p class="feature-card-content">Setiap armada memiliki kondisi mesin yang terawat sehingga
                                    aman dan nyaman digunakan</p>
                        </div>
                        <div class="col-md-4 mb-5 mb-md-0 feature-card wow fadeInUp">
                            <h5 class="feature-card-title">Kebersihan</h4>
                                <p class="feature-card-content">Seluruh armada dijaga kebersihannya sebelum diberikan kepada
                                    anda sehingga sangat nyaman digunakan</p>
                        </div>
                    </div>
                </section>
                <main class="blog-standard">
                    <div class="container">
                        <h1 class="oleez-page-title wow fadeInUp">Information</h1>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                *Syarat dan Ketentuan
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Jaminan Identitas Asli (KTP, SIM, ID CARD)</li>
                                                    <li>Memiliki SIM Yang Masih Berlaku</li>
                                                    <li>Jaminan Kendaraan Bermotor atau Deposit Uang</li>
                                                    <li>Bersedia Foto Untuk Dokumentasi</li>
                                                    <li>Pembayaran Di Depan Saat Serah Terima Kendaraan</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                1. Apabila dalam perjalanan mobil mengalami mogok atau kerusakan lain
                                                seperti ban bocor, bagaimana sistem perbaikannya? </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Hal tersebut ditanggung oleh pengguna/customer
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="false" aria-controls="flush-collapseThree">
                                                2. Apabila mobil rental mengalami kerusakan seperti lecek, ditabrak,
                                                menabrak atau kehilangan, siapa yang bertanggung jawab? </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Hal tersebut ditanggung oleh pengguna/customer
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                                aria-expanded="false" aria-controls="flush-collapseFour">
                                                3. Apabila mobil dibawa oleh supir, kemudian megnalami kerusakan seperti
                                                yang tersebutkan pada pertanyaan sebelumnya, siapa yang bertanggung jawab?
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Hal tersebut ditanggung oleh supir/driver
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingfive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsefive"
                                                aria-expanded="false" aria-controls="flush-collapsefive">
                                                4. Bagaimana kebijakan Sarfaraz Rent Car saya mengajukan pembatalan (cancel)
                                                jauh sebelum hari penyewaan?</button>
                                        </h2>
                                        <div id="flush-collapsefive" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Pengembalian dana pelanggan dengan pengurangan 50% dari harga unit (contoh :
                                                Harga unit Pajero Sport 2021 Rp. 1.600.000 maka pengembalian dana pelanggan
                                                sebesar 50% dari harga tersebut yaitu Rp.800.000 </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingsix">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsesix"
                                                aria-expanded="false" aria-controls="flush-collapsesix">
                                                5. Apa saja yang dilakukan oleh Sarfaraz Rent Car dalam menjaga keamanan
                                                setiap unit yang disewakan? </button>
                                        </h2>
                                        <div id="flush-collapsesix" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Sarfaraz Rent Car rutin melakukan service setiap
                                                bulan dan melakukan pengecekan kembali sebelum serah terima unit kepada
                                                customer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="sidebar-widget wow fadeInUp">
                                    <h5 class="widget-title">Tags</h5>
                                    <div class="widget-content">
                                        <a href="" class="post-tag">Rental Mobil</a>
                                        <a href="" class="post-tag">Balikpapan</a>
                                        <a href="" class="post-tag">Kalimantan</a>
                                        <a href="" class="post-tag">Rental Bus</a>
                                        <a href="" class="post-tag">Terjangkau</a>
                                        <a href="" class="post-tag">Fasilitas Lengkap</a>
                                    </div>
                                </div>
                                <div class="sidebar-widget wow fadeInUp">
                                    <h5 class="widget-title">Gallery</h5>
                                    <div class="widget-content">
                                        <div class="gallery">
                                            <a href="https://www.instagram.com/sarfarazrentcar/" class="gallery-grid-item"
                                                data-fancybox="widget-gallery">
                                                <img src="/image/galeri1.jpg" alt="gallery item">
                                            </a>
                                            <a href="https://www.instagram.com/sarfarazrentcar/" class="gallery-grid-item"
                                                data-fancybox="widget-gallery">
                                                <img src="/image/galeri2.jpg" alt="gallery item">
                                            </a>
                                            <a href="https://www.instagram.com/sarfarazrentcar/" class="gallery-grid-item"
                                                data-fancybox="widget-gallery">
                                                <img src="/image/galeri3.jpg" alt="gallery item">
                                            </a>
                                            <a href="https://www.instagram.com/sarfarazrentcar/" class="gallery-grid-item"
                                                data-fancybox="widget-gallery">
                                                <img src="/image/galeri4.jpg" alt="gallery item">
                                            </a>
                                            <a href="https://www.instagram.com/sarfarazrentcar/" class="gallery-grid-item"
                                                data-fancybox="widget-gallery">
                                                <img src="/image/galeri5.jpg" alt="gallery item">
                                            </a>
                                            <a href="https://www.instagram.com/sarfarazrentcar/" class="gallery-grid-item"
                                                data-fancybox="widget-gallery">
                                                <img src="/image/galeri6.jpg" alt="gallery item">
                                            </a>
                                            <a href="https://www.instagram.com/sarfarazrentcar/" class="gallery-grid-item"
                                                data-fancybox="widget-gallery">
                                                <img src="/image/galeri7.jpg" alt="gallery item">
                                            </a>
                                            <a href="https://www.instagram.com/sarfarazrentcar/" class="gallery-grid-item"
                                                data-fancybox="widget-gallery">
                                                <img src="/image/galeri8.jpg" alt="gallery item">
                                            </a>
                                            <a href="https://www.instagram.com/sarfarazrentcar/" class="gallery-grid-item"
                                                data-fancybox="widget-gallery">
                                                <img src="/image/galeri9.jpg" alt="gallery item">
                                            </a>
                                            <a href="https://www.instagram.com/sarfarazrentcar/" class="gallery-grid-item"
                                                data-fancybox="widget-gallery">
                                                <img src="/image/galeri10.jpg" alt="gallery item">
                                            </a>
                                            <a href="https://www.instagram.com/sarfarazrentcar/" class="gallery-grid-item"
                                                data-fancybox="widget-gallery">
                                                <img src="/image/galeri11.png" alt="gallery item">
                                            </a>
                                            <a href="https://www.instagram.com/sarfarazrentcar/" class="gallery-grid-item"
                                                data-fancybox="widget-gallery">
                                                <img src="/image/galeri12.png" alt="gallery item">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </main>
    </body>
@endsection

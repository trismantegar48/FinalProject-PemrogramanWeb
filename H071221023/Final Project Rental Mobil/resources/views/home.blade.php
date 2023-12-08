@extends('layouts.main')

@section('container')
    <main>
        <section>
            <div class="container wow fadeIn">
                <div id="oleezLandingCarousel" class="oleez-landing-carousel carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="/image/homepage1.jpg" width="350px" height="600px" alt="First slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Rental Mobil & Bus</span></h2>
                                <h2 data-animation="animated fadeInRight"><span>Balikpapan</span></h2>
                                <a href="/katalog" class="carousel-item-link" data-animation="animated fadeInRight">EXPLORE
                                    ARMADA</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/image/homepage2.jpg" width="400px" height="600px" alt="Second slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Aman </span></h2>
                                <h2 data-animation="animated fadeInRight"><span> & Nyaman</span></h2>
                                <a href="/katalog" class="carousel-item-link" data-animation="animated fadeInRight">EXPLORE
                                    ARMADA</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/image/homepage3.jpg" width="400px" height="600px" alt="Third slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Kebersihan</span></h2>
                                <h2 data-animation="animated fadeInRight"><span>Terjaga </span></h2>
                                <a href="/katalog" class="carousel-item-link" data-animation="animated fadeInRight">EXPLORE
                                    ARMADA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="oleez-landing-section oleez-landing-section-about">
            <div class="container">
                <div class="oleez-landing-section-content">
                    <div class="oleez-landing-section-verticals wow fadeIn">
                        <span class="number">01</span>
                    </div>
                    <div class="row landing-about-content wow fadeInUp">
                        <div class="col-md-6">
                            <h2>Keunggulan Menggunakan Sarfaraz Rent Car</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 landing-about-feature wow fadeInUp">
                            <img src="assets/images/icon_1.svg" alt="document" class="about-feature-icon">
                            <h5 class="about-feature-title">Pelayanan 24 Jam</h5>
                            <p class="about-feature-description">Menyediakan rental mobil dan bus sesuai kebutuhan anda
                                dengan pelayanan 24 jam</p>
                        </div>
                        <div class="col-md-4 landing-about-feature wow fadeInUp">
                            <img src="assets/images/icon_2.svg" alt="document" class="about-feature-icon">
                            <h5 class="about-feature-title">Berlokasi di Balikpapan</h5>
                            <p class="about-feature-description">Memiliki pelanggan yang berasal dari berbagai kota di
                                Indonesia</p>
                        </div>
                        <div class="col-md-4 landing-about-feature wow fadeInUp">
                            <img src="assets/images/icon_3.svg" alt="document" class="about-feature-icon">
                            <h5 class="about-feature-title">Dipercayai Pelanggan</h5>
                            <p class="about-feature-description">Banyak pelanggan maupun perusahaan yang telah menggunakan
                                armada Sarfaraz Rent Car</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="oleez-landing-section oleez-landing-section-client">
            <div class="container">
                <div class="oleez-landing-section-content">
                    <div class="oleez-landing-section-verticals wow fadeIn">
                        <span class="number">02</span>
                    </div>
                    <h2 class="section-title mb-1 wow fadeInUp">Langganan Kami</h2>
                    <p class="client-section-subtitle">Sudah banyak perusahaan besar yang telah menggunakan jasa kami,
                        bagaimana dengan anda?</p>
                    <div class="row">
                        <div class="col-md-4 client-logo-wrapper wow flipInX">
                            <div class="client-logo">
                                <img src="/image/partner1.png" alt="client" height="80px">
                            </div>
                        </div>
                        <div class="col-md-4 client-logo-wrapper wow flipInX">
                            <div class="client-logo">
                                <img src="/image/partner2.jpg" alt="client" height="80px">
                            </div>
                        </div>
                        <div class="col-md-4 client-logo-wrapper wow flipInX">
                            <div class="client-logo">
                                <img src="image/partner3.png" alt="client" height="80px">
                            </div>
                        </div>
                        <div class="col-md-4 client-logo-wrapper wow flipInX">
                            <div class="client-logo">
                                <img src="/image/partner4.png" alt="client" height="80px">
                            </div>
                        </div>
                        <div class="col-md-4 client-logo-wrapper wow flipInX">
                            <div class="client-logo">
                                <img src="/image/partner5.png" alt="client" height="80px">
                            </div>
                        </div>
                        <div class="col-md-4 client-logo-wrapper wow flipInX">
                            <div class="client-logo">
                                <img src="/image/partner6.jpg" alt="client" height="80px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="oleez-landing-section oleez-landing-section-news">
            <div class="container">
                <div class="oleez-landing-section-content">
                    <div class="oleez-landing-section-verticals wow fadeIn">
                        <span class="number">03</span>
                    </div>
                    <h2 class="section-title wow fadeInUp">Testimoni Kami</h2>
                    <p class="news-section-subtitle wow fadeInUp">Ulasan para pelanggan Sarfaraz Rent Car</p>
                    <div class="row">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="news-card news-card-1 wow fadeInUp">
                                <div class="card-body">
                                    <div class="author-info media">
                                        <img src="/image/testi2.jpeg" alt="author" class="author-avatar">
                                        <div class="media-body">
                                            <h6 class="author-name">Posted by Syamsuryadi</h6>
                                            <p class="news-post-date">October 09, 2022</p>
                                        </div>
                                    </div>
                                    <div class="post-meta">
                                    </div>
                                    <h5 class="post-title">
                                        Pelayanan Ramah
                                        Driver hafal jalan..
                                        Harga Terjangkau..
                                        Unit Bersih, Harum, dan Nyaman Digunakan, Masih Baru Kesempatan naik mobil baru...
                                    </h5>
                                    <a href="https://goo.gl/maps/bEAnGJGNiYwcugCJA" class="post-permalink">Read more </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="news-card news-card-2 wow fadeInUp">
                                <div class="card-body">
                                    <div class="author-info media">
                                        <img src="/image/testi1.jpeg" alt="author" class="author-avatar">
                                        <div class="media-body">
                                            <h6 class="author-name">Posted by Dedy Tyahyadi</h6>
                                            <p class="news-post-date">July 5, 2021</p>
                                        </div>
                                    </div>
                                    <div class="post-meta">
                                    </div>
                                    <h5 class="post-title">Menyediakan kendaraan rental berkualitas dengan supir yang
                                        handal dan ramah</h5>
                                    <a href="https://goo.gl/maps/swcq9wUqvqzfG2Pu8" class="post-permalink">Read more </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="news-card news-card-3 wow fadeInUp">
                                <div class="card-body">
                                    <div class="author-info media">
                                        <img src="/image/testi2.jpeg" alt="author" class="author-avatar">
                                        <div class="media-body">
                                            <h6 class="author-name">Rinto_ Ramdhan03</h6>
                                            <p class="news-post-date">October 5, 2022</p>
                                        </div>
                                    </div>
                                    <div class="post-meta">
                                    </div>
                                    <h5 class="post-title">Sangat Baik Dan Mudah proses nya </h5>
                                    <a href="https://goo.gl/maps/iAMDxLHQ7qc8prfq9" class="post-permalink">Read more </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

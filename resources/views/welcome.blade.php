<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <!--====== Title ======-->
        <title>Sistem Pakar</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{asset('consult/assets/images/favicon.png" type="image/png')}}">

        <!--====== Slick CSS ======-->
        <link rel="stylesheet" href="{{asset('consult/assets/css/slick.css')}}">

        <!--====== Font Awesome CSS ======-->
        <link rel="stylesheet" href="{{asset('consult/assets/css/font-awesome.min.css')}}">

        <!--====== Line Icons CSS ======-->
        <link rel="stylesheet" href="{{asset('consult/assets/css/LineIcons.css')}}">

        <!--====== Animate CSS ======-->
        <link rel="stylesheet" href="{{asset('consult/assets/css/animate.css')}}">

        <!--====== Magnific Popup CSS ======-->
        <link rel="stylesheet" href="{{asset('consult/assets/css/magnific-popup.css')}}">

        <!--====== Bootstrap CSS ======-->
        <link rel="stylesheet" href="{{asset('consult/assets/css/bootstrap.min.css')}}">

        <!--====== Default CSS ======-->
        <link rel="stylesheet" href="{{asset('consult/assets/css/default.css')}}">

        {{--Swal Css--}}
        <link rel="stylesheet" href="{{asset('sweetalert/sweetalert2.css')}}">

        <!--====== Style CSS ======-->
        <link rel="stylesheet" href="{{asset('consult/assets/css/style.css')}}">

    </head>
    <body>

    <?php
    $connect = mysqli_connect("localhost","root","","db_tht");
    // mencari kode barang dengan nilai paling besar
    $query = "SELECT max(id) as maxKode FROM pasien";
    $hasil = mysqli_query($connect,$query);
    $datapas = mysqli_fetch_array($hasil);
    $id_pas = $datapas['maxKode'];

    $noUrut = (int) substr($id_pas, 3, 3);

    $noUrut++;

    $char = "PAS";
    $id_pas = $char . sprintf("%03s", $noUrut);
    ?>

    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area headroom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="" style="color: black;">
                                Sistem<b style="color: #F14836;">Pakar THT</b>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent" >
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a href="#beranda">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tentang">Tentang </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#layanan">Layanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#kontak">Kontak</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->

                            {{-- @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <div class="navbar-btn d-none d-sm-inline-block">
                                            <a class="main-btn" href="{{ url('/beranda') }}">Beranda</a>
                                        </div>
                                    @else
                                        <div class="navbar-btn d-none d-sm-inline-block">
                                            <a class="main-btn mr-2" href="{{ route('login') }}">Masuk</a>
                                        </div>

                                        @if (Route::has('register'))
                                            <div class="navbar-btn d-none d-sm-inline-block">
                                                <a class="main-btn" href="{{ route('register') }}">Daftar</a>
                                            </div>
                                        @endif
                                    @endauth
                                </div>
                            @endif --}}

                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="beranda" class="header-hero bg_cover d-lg-flex align-items-center" style="background-image: url({{asset('consult//assets/images/header-hero.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-hero-content">
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>Partner</b> <span>Konsultasi</span> anda yang <b>terpercaya.</b></h1>
                            <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Di Indonesia, penderita penyakit THT berjumlah sekitar 190-230 per-1000 penduduk. Hasil tersebut didapatkan dari badan Survey Kesehatan Rumah Tangga (SKRT) pada tahun 2006 - <i>Fachir, 2014</i></p>
                            <div class="header-singup wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                                <button type="button"  data-toggle="modal" data-target="#createModalLong" class="main-btn">
                                    Mulai Konsultasi
                                </button>

                            </div>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="1.1s">
                <div class="image">
                    <img src="{{asset('consult/assets/images/hero-image.png')}}" alt="Hero Image">
                </div>
            </div> <!-- header hero image -->
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="tentang" class="about-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="about-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="welcome">Selamat Datang</h6>
                        <h3 class="title"><span>Ini adalah <b style="color:#F14836;">Sistem Pakar</b> untuk </span> diagnosa penyakit THT anda.</h3>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-image mt-60 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{asset('consult/assets/images/about.png')}}" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="about-content pt-45">
                        <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">Aplikasi ini bertujuan untuk mengembangkan sistem pakar diagnosis jenis penyakit THT menggunakan inferensi <i>forward chaining</i> dan metode <i>certainty factor</i>.
                            Sistem pakar (expert system) adalah sistem yang berusaha mengadopsi pengetahuan manusia ke komputer, agar komputer dapat
                            menyelesaikan masalah seperti yang bisa dilakukan oleh para ahli.
                        </p>


                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== OUR SERVICE PART START ======-->

    <section id="layanan" class="our-services-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-9">
                    <div class="section-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6 class="sub-title">Layanan Kami</h6>
                        <h4 class="title">Berbagai macam layanan <span>untuk kebutuhan diagnosa</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-services-tab pt-30">
                        <ul class="nav justify-content-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="true">
                                    <i class="lni-briefcase"></i> <span>Diagnosa <br> Penyakit</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="digital-tab" data-toggle="tab" href="#digital" role="tab" aria-controls="digital" aria-selected="false">
                                    <i class="lni-bullhorn"></i> <span>Metode <br> Diagnosa</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market" aria-selected="false">
                                    <i class="lni-stats-up"></i> <span>Solusi <br> Penyakit</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="{{asset('consult/assets/images/our-service-1.jpg')}}" alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Diagnosa dari gejala <span>untuk pencarian solusi.</span></h3>
                                            <p class="text">Diagnosa gejala pada penyakit THT merupakan diagnosa yang dapat membantu pendeteksian penyakit agar penyakit dapat ditangani sesegera mungkin.</p>
                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>

                            <div class="tab-pane fade" id="digital" role="tabpanel" aria-labelledby="digital-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="{{asset('consult/assets/images/our-service-1.jpg')}}" alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Metode Diagnosa <span>yang digunakan adalah FC & CF.</span></h3>
                                            <p class="text">Metode inferensi <i>forward chaining</i> digunakan sebagai penalaran, sedangkan metode <i>certainty factor</i> digunakan
                                                untuk menunjukkan tingkat kepastian jenis penyakit THT yang diderita.</p>

                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>

                            <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="{{asset('consult/assets/images/our-service-1.jpg')}}" alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Solusi Penyakit  <span>untuk tindakan selanjutnya.</span></h3>
                                            <p class="text">Disini kami memberikan solusi untuk pasien secara langsung setelah proses konsultasi untuk menyarankan tindakan yang akan dilakukan selanjutnya. </p>
                                            <div class="our-services-progress d-flex align-items-center mt-55">
                                                <div class="circle" id="circles-3"></div>
                                                <div class="progress-content">
                                                    <h4 class="progress-title">Market Analysis <br> Agency Skill.</h4>
                                                </div>
                                            </div>
                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>
                        </div> <!-- tab content -->
                    </div> <!-- our services tab -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== OUR SERVICE PART ENDS ======-->

    <!--====== SERVICE PART START ======-->

    <section id="#mengapa" class="service-area pt-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6 class="sub-title">Mengapa kami</h6>
                        <h4 class="title">Alasan memilih kami <span>sebagai sistem diagnosa penyakit THT</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="service-wrapper mt-60 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="row no-gutters justify-content-center">
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service d-flex">
                            <div class="service-icon">
                                <img src="{{asset('consult/assets/images/service-1.png')}}" alt="Icon">
                            </div>
                            <div class="service-content media-body">
                                <h4 class="service-title">Telah Berpengalaman</h4>
                                <p class="text">Sistem ini dipakari oleh dokter spesialis THT yang telah berpengalaman sejak lama menangani pasien di pulau lombok.</p>
                            </div>
                            <div class="shape shape-1">
                                <img src="{{asset('consult/assets/images/shape/shape-1.svg')}}" alt="shape">
                            </div>
                            <div class="shape shape-2">
                                <img src="{{asset('consult/assets/images/shape/shape-2.svg')}}" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service service-border d-flex">
                            <div class="service-icon">
                                <img src="{{asset('consult/assets/images/service-2.png')}}" alt="Icon">
                            </div>
                            <div class="service-content media-body">
                                <h4 class="service-title">Banyak Layanan</h4>
                                <p class="text">Terdapat banyak layanan dari sistem ini, mulai dari proses diagnosa, hasil diagnosa, dan solusi dari hasil diagnosa .</p>
                            </div>
                            <div class="shape shape-3">
                                <img src="{{asset('consult/assets/images/shape/shape-3.svg')}}" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service d-flex">
                            <div class="service-icon">
                                <img src="{{asset('consult/assets/images/service-3.png')}}" alt="Icon">
                            </div>
                            <div class="service-content media-body">
                                <h4 class="service-title">Akurasi tinggi</h4>
                                <p class="text">Akurasi tingkat kebenaran dari diagnosa ini sebesar %, untuk ketepatan hasil diagnosa penyakit.</p>
                            </div>
                            <div class="shape shape-4">
                                <img src="{{asset('consult/assets/images/shape/shape-4.svg')}}" alt="shape">
                            </div>
                            <div class="shape shape-5">
                                <img src="{{asset('consult/assets/images/shape/shape-5.svg')}}" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-btn text-center pt-25 pb-15">
                            <a class="main-btn main-btn-2" href="#">All Services</a>
                        </div> <!-- service btn -->
                    </div>
                </div> <!-- row -->
            </div> <!-- service wrapper -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICE PART ENDS ======-->


    <!--====== TESTIMONIAL PART START ======-->

    <section id="#testimonial" class="testimonial-area pt-70 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial-left-content mt-45 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="section-title">
                            <h6 class="sub-title">Testimonial</h6>
                            <h4 class="title">Apa yang user katakan, tentang kami</h4>
                        </div> <!-- section title -->
                        <ul class="testimonial-line">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <p class="text">Kami melakukan wawancara terhadap orang yang telah menggunakan aplikasi ini.<br> <br>
                            Mari kita baca apa yang mereka katakan</p>
                    </div> <!-- testimonial left content -->
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-right-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="quota">
                            <i class="lni-quotation"></i>
                        </div>
                        <div class="testimonial-content-wrapper testimonial-active">
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Aplikasi ini sangat mudah digunakan, fitur-fiturnya pun sangat <i>friendly</i> untuk digunakan.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-name media-body">
                                            <h5 class="name">Bhintang Dirgantara Calon S.Kom</h5>
                                            <span class="sub-title">Asisten Dosen, Universitas Bumigora</span>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Disamping mempersingkat waktu diagnosa, Sistem pakar juga memudahkan pasien dalam berkonsultasi.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-name media-body">
                                            <h5 class="name">Hairani, M.Eng</h5>
                                            <span class="sub-title">Dosen, Universitas Bumigora</span>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                        </div> <!-- testimonial content wrapper -->
                    </div> <!-- testimonial right content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="kontak" class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="sub-title">Kontak</h6>
                        <h4 class="title">Tak kenal maka,<br><span>tak sayang.</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="contact-info-icon">
                                <i class="lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">Meninting Garden, Blok C-2 <br> Lombok Barat, NTB <br> 83355, Indonesia.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="contact-info-icon">
                                <i class="lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">bddeddy06@gmail.com</p>
                                <p class="text">1610630133@stmikbumigora.ac.id</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                            <div class="contact-info-icon">
                                <i class="lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">+62 821 9999 4445</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->

        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <div class="modal fade" id="createModalLong" tabindex="-1" role="dialog" aria-labelledby="createModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLongTitle">Masukan data diri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('submit_pasien.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id">ID Pasien</label>
                            <input name="id" type="text" class="form-control" id="id" aria-describedby="emailHelp" value="<?= $id_pas?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama" required oninvalid="this.setCustomValidity('Nama Harus Terisi')" oninput="setCustomValidity('')">
                        </div>

                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input name="umur" type="number" class="form-control" id="umur" aria-describedby="emailHelp" placeholder="Umur" required oninvalid="this.setCustomValidity('Umur Harus Terisi')" oninput="setCustomValidity('')">
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <br>
                            <div class="form-check">
                                <input value="Laki-laki" class="form-check-input" type="radio" name="jenis_kelamin" checked>
                                <label class="form-check-label mr-4">Laki-laki</label>

                                <input value="Perempuan" class="form-check-input" type="radio" name="jenis_kelamin">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                            <div class="form-check">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" aria-describedby="emailHelp" placeholder="Pekerjaan" required oninvalid="this.setCustomValidity('Pekerjaan Harus Terisi')" oninput="setCustomValidity('')">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Alamat pasien" required oninvalid="this.setCustomValidity('Alamat Harus Terisi')" oninput="setCustomValidity('')"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area bg_cover" style="background-image: url({{asset('consult/assets/images/footer-bg.jpg')}})">
        <div class="container">
            <div class="footer-widget pt-30 pb-70">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 order-sm-1 order-lg-1">
                        <div class="footer-about pt-40">
                            <a href="#" style="color: black;">
                                Sistem<b style="color: #F14836;">Pakar</b> THT
                            </a>
                            <p class="text">Aplikasi ini dibuat untuk memenuhi syarat kelulusan S1 Universitas Bumigora</p>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-sm-6 order-sm-3 order-lg-2">
                        <div class="footer-link pt-40">
                            <div class="footer-title">
                                <h5 class="title">Layanan</h5>
                            </div>
                            <ul>
                                <li>Diagnosa Penyakit</li>
                                <li>Metode Diagnosa</li>
                                <li>Solusi Penyakit</li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6 order-sm-4 order-lg-3">
                        <div class="footer-link pt-40">
                            <div class="footer-title">
                                <h5 class="title">Tentang</h5>
                            </div>
                            <ul>
                                <li>Mengapa Kami</li>
                                <li>Testimonial</li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6 order-sm-2 order-lg-4">
                        <div class="footer-contact pt-40">
                            <div class="footer-title">
                                <h5 class="title">Info Kontak</h5>
                            </div>
                            <div class="contact pt-10">
                                <p class="text">Meninting Garden, Blok C-2 <br>
                                    Lombok Barat, NTB <br> 83355, Indonesia.</p>
                                <p class="text">bddeddy06@gmail.com</p>
                                <p class="text">+62 821 9999 4445</p>


                            </div> <!-- contact -->
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright text-center">
                <p class="text">© 2020 Crafted by <a href="https://uideck.com" rel="nofollow">UIdeck</a> All Rights Reserved.</p>
            </div>
        </div> <!-- container -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="{{asset('consult/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('consult/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('consult/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('consult/assets/js/bootstrap.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('consult/assets/js/slick.min.js')}}"></script>

    <!--====== Isotope js ======-->
    <script src="{{asset('consult/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('consult/assets/js/isotope.pkgd.min.js')}}"></script>

    <!--====== Counter Up js ======-->
    <script src="{{asset('consult/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('consult/assets/js/jquery.counterup.min.js')}}"></script>

    <!--====== Circles js ======-->
    <script src="{{asset('consult/assets/js/circles.min.js')}}"></script>

    <!--====== Appear js ======-->
    <script src="{{asset('consult/assets/js/jquery.appear.min.js')}}"></script>

    <!--====== WOW js ======-->
    <script src="{{asset('consult/assets/js/wow.min.js')}}"></script>

    <!--====== Headroom js ======-->
    <script src="{{asset('consult/assets/js/headroom.min.js')}}"></script>

    <!--====== Jquery Nav js ======-->
    <script src="{{asset('consult/assets/js/jquery.nav.js')}}"></script>

    <!--====== Scroll It js ======-->
    <script src="{{asset('consult/assets/js/scrollIt.min.js')}}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{asset('consult/assets/js/jquery.magnific-popup.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('consult/assets/js/main.js')}}"></script>

    {{--sweet alert--}}
    <script src="{{asset('sweetalert/sweetalert2.js')}}"></script>
    </body>
</html>

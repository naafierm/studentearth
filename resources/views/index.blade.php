<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>StudentEarth</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.ico">



    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div> -->
                            <!--navigation-->
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-center">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="{{route('dashboard')}}">Beranda</a></li>
                                                <li><a href="{{route('tentang')}}">Tentang</a></li>
                                                <li><a href="{{route('artikel')}}">Artikel</a></li>
                                                <li><a href="#">Aksi</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{route('hutan')}}">Hutan</a></li>
                                                        <li><a href="{{route('air')}}">Air</a></li>
                                                        <li><a href="{{route('sampah')}}">Sampah</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{route('kontak')}}">Kontak</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="{{route('donasi')}}" class="btn header-btn">Donasi</a>
                                    </div>
                                </div>
                            </div>
                            <!--authetication user-->
                            <div class="col-xl-2 col-lg-2">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="authentication d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation" style="float: none;">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>
        <!-- slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active dot-style">
                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Lindungi Hutanmu</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s">Untuk masa depan yang lebih baik</P>
                                    <!-- Hero-btn-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg2 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Bebas Plastik</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s">Bebaskan bumi kita dari polusi plastik </P>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg3 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Jernihkan Sungai</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s">Untuk ekosistem yang lebih stabil</P>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!--? Visit Our Tailor Start -->

        <div class="visit-tailor-area fix">
            <!--Right Contents  -->
            <div class="tailor-offers"></div>
            <!-- left Contents -->
            <div class="tailor-details">
                <span>Aksi Kita</span>
                <h2>Gerak Bersih</h2>
                <p>Dalam rangka "World Clean Day" kami komunitas
                    student earth mengajak teman untuk bersama-sama
                    membersihkan lingkungan sekitarnya. Ayo ajak
                    teman, saudara, keluargamu semua untuk bergabung
                    dalam gerakan ini. Jadikan Indonesia lebih nyaman.
                    </p>
                </div>
            </div>
        </div>
        <!-- Visit Our Tailor End -->

        <!--? Services Area Start -->

        <div class="service-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/reboisasi(2) - Copy.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Reboisasi</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/aksi/sampah_aksi.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Pembersihan Sungai</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/sampah.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Daur Ulang</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->

        <!--? About Area Start -->
        <section class="support-company-area fix pt-10">
            <div class="support-wrapper align-items-center">
                <div class="left-content">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-30">
                        <h2>Selamatkan bumi untuk anak cucumu </h2>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top">Bumi semakin hari kian tua. Pembangunan yang terjadi banyak berdampak pada kelestarian lingkungan. Salah satunya pembukaan hutan untuk kepentingan pemukiman.
                            Menyebabkan beragam makhluk hidup yang didalamnya harus ikut punah. Kejadian tersebut terus terjadi berulang kali. Bersama "StudentEarth" mari kita jaga dan lestarikan bumi kita.
                            Dengan begitu kamu telah menyumbang keberlangsungan hidup di masa depan.</p>
                        <a href="#" class="border-btn">Gabung Sekarang</a>
                    </div>
                </div>
                <div class="right-content">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/index/activity.jpg" alt="">
                    </div>
                    <div class="support-img-cap text-center d-flex">
                        <div class="single-one">
                            <span>3</span>
                            <p>Àgenda Aksi</p>
                        </div>
                        <div class="single-two">
                            <span>20</span>
                            <p>Relawan StudentEarth</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->

        <!--? Blog Area Start -->
        <section class="home-blog-area pb-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-11">
                        <div class="section-tittle text-center mb-90">
                            <h2>Artikel Terbaru</h2>
                            <p>Dapatkan informasi terbaru tentang kondisi lingkungan dan bantu selamatkan bumi! </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/dinas lh.jpg" alt="">
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="{{route('artikel')}}">Dinas LH Tangsel Akui Sulit Temukan Sumber Limbah yang Cemari Kali Jaletreng</a></h3>
                                    <p style="font-weight: 200;"><span>Indri Bagaskara</span></p>
                                    <p>Dinas Lingkungan Hidup (LH) Kota Tangerang Selatan (Tangsel) mengaku kesulitan menemukan sumber limbah yang
                                       dibuang dan mencemari Kali Jaletreng di kawasan Serpong. Pasalnya, banyak sekali perusahaan dan tempat usaha
                                    yang beraktivitas sekitar Kali Jaletreng, termasuk di kawaasan Taman Tekno. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/olah.jpg" alt="">
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="{{route('artikel')}}">Olah Sampah Bantargebang Jadi Energi Terbarukan</a></h3>
                                    <p style="font-weight: 200;"><span>Ardhito </span></p>
                                    <p>Kolaborasi antara Pemerintah DKI dengan PT Uniliver Indonesia dan PT Solusi Bangun Indonesia ,
                                       pihak swasta mendukung kegiatan penambangan sampah (landfill mining) pada zona tidak aktif di
                                       TPST Bantargebang. Sampah plastik diproses menjadi material yang dapat digunakan kembali sebagai
                                       bahan bakar alternatif (Refuse Derived Fuel/RDF) pengganti batu bara di industri semen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>


    <footer>
        <div class="footer-wrapper">
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                                <br>
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy; <script>document.write(new Date().getFullYear());</script> StudentEarth
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>

      <!-- Scroll Up
      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div> -->

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <!--<script src="./assets/js/owl.carousel.min.js"></script>-->
    <script src="./assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba landing is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with
        unlimited possibilities.">
    <meta name="keywords" content="landing template, Cuba landing template,responsive landing
        template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets_landing/images/favicon.webp') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets_landing/images/favicon.webp') }}" type="image/x-icon">
    <title>Sikecil - Landing Page</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&amp;display=swap" rel="stylesheet">
    <!-- Swiper css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/vendors/swiper/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets_landing/css/vendors/swiper/swiper-bundle.min.css') }}">

    <!-- Font awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/vendors/fontawesome/all.css') }}">

    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/vendors/animate.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/style.css') }}">
</head>

<body class="layout-2">
    <div class="loader-wrapper">
        <div class="loader-index"> <span></span></div><svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <div class="tap-top"><i class="fa-solid fa-angles-up"></i></div>
    <main>
        <!-- Header start -->
        <header class="header-absolute">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="custom-container container">
                    <a class="navbar-brand m-0" href="index.html">
                        <img src="../assets/images/logo/logo.webp" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a href="{{ route('login') }}" class="btn btn-primary rounded-pill">Login Aplikasi</a>
                </div>
            </nav>
        </header>
        <!-- Home section start -->
        <section class="home-style-1 home-style-2">
            <div class="custom-container container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="home-content">
                            <h1>Sistem Kesehatan Cilincing <b> Sikecil</b></h1>
                            <p>Save everyone time by harnessing your team's collective knowledge into easy-to-find
                                information.</p>
                            <div class="home-details">
                                <form class="grouping-input mb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="input-icon">
                                            <svg>
                                                <use href="{{ asset('assets_landing/svg/icon_sprite.svg#envelope') }}">
                                                </use>
                                            </svg>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Enter your email.."
                                            required>
                                    </div>
                                    <button type="submit" class="btn btn-primary rounded-pill">
                                        <span>Login</span>
                                        <svg>
                                            <use href="{{ asset('assets_landing/svg/icon_sprite.svg#arrow-right') }}">
                                            </use>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-lg-block d-none">
                        <div class="home-image text-end d-md-block d-none">
                            <img class="img-fluid"
                                src="{{ asset('assets_landing/images/app-landing/home/1 copy.png') }}" alt="mobile">
                            <img class="img-fluid left-image"
                                src="{{ asset('assets_landing/images/app-landing/home/2 copy.png') }}" alt="card">
                            <img class="img-fluid right-image"
                                src="{{ asset('assets_landing/images/app-landing/home/3 copy.png') }}" alt="card">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home section end -->


        <!-- About section start -->
        <section class="about-style-2" id="about-us">
            <div class="container custom-container">
                <div class="row justify-content-lg-between justify-content-center gy-md-5 gy-3">
                    <div class="col-lg-6">
                        <div class="title-style-1">
                            <h5># No 1 Trending Apps</h5>
                            <h2>Pengukuran Kebugaran Jasmani</h2>
                        </div>
                        <div class="about-content">
                            <p>
                                Aplikasi pengukur hasil kebugaran jasmani hadir sebagai solusi modern untuk membantu
                                individu memahami kondisi fisik mereka secara lebih akurat, praktis, dan terukur. Di
                                tengah gaya hidup yang semakin dinamis, kebutuhan akan pemantauan kebugaran tidak lagi
                                terbatas pada atlet, tetapi juga masyarakat umum yang ingin menjaga kesehatan tubuh
                                secara optimal..
                            </p>
                            <figure>
                                <blockquote class="blockquote">
                                    <p>"Aplikasi ini dirancang dengan antarmuka yang sederhana dan mudah digunakan,
                                        sehingga dapat diakses oleh berbagai kalangan usia. Pengguna hanya perlu
                                        memasukkan data dasar seperti usia, jenis kelamin, tinggi badan, dan berat
                                        badan. Selanjutnya, aplikasi akan memandu pengguna untuk melakukan serangkaian
                                        tes kebugaran jasmani, seperti tes daya tahan (lari atau jalan), kekuatan otot
                                        (push-up atau sit-up), kelentukan (sit and reach), serta pengukuran denyut
                                        nadi."</p>
                                </blockquote>
                            </figure>
                            <button type="button" class="btn btn-primary rounded-pill">See More Tracking</button>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-sm-8 col-10">
                        <div class="about-image">
                            <img class="img-fluid"
                                src="{{ asset('assets_landing/images/app-landing/about copy.png') }}" alt="mobile">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section end -->

        <!-- why choose us section start -->
        <section class="choose-style-2">
            <div class="container custom-container">
                <div class="row justify-content-lg-between justify-content-center gy-4">
                    <div class="col-lg-6 col-md-8">
                        <div class="choose-image">
                            <img class="img-fluid"
                                src="{{ asset('assets_landing/images/app-landing/choose-us/1.png') }}"
                                alt="to do app">
                            <img class="img-fluid right-image"
                                src="{{ asset('assets_landing/images/app-landing/choose-us/2.webp') }}"
                                alt="chart card">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-5">
                        <div class="title-style-1">
                            <h5>Why choose App?</h5>
                            <h2>Risk Manajemen dan Laporan Kecelakaan Kerja.</h2>
                        </div>
                        <div class="choose-content">
                            <ul>
                                <li>
                                    <div class="choose-icon primary">
                                        <svg>
                                            <use href="{{ asset('assets_landing/svg/icon_sprite.svg#dollar') }}">
                                            </use>
                                        </svg>
                                    </div>
                                    <div class="choose-details">
                                        <h3>Program Latihan Kebugaran </h3>
                                        <p>fitur rekomendasi latihan yang disesuaikan dengan hasil tes pengguna.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="choose-icon primary">
                                        <svg>
                                            <use href="{{ asset('assets_landing/svg/icon_sprite.svg#user-right') }}">
                                            </use>
                                        </svg>
                                    </div>
                                    <div class="choose-details">
                                        <h3>Pelaporan Kecelakaan Kerja</h3>
                                        <p>Kemampuannya untuk menyimpan riwayat data pengguna, sehingga memungkinkan
                                            evaluasi jangka panjang.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="choose-icon primary">
                                        <svg>
                                            <use href="{{ asset('assets_landing/svg/icon_sprite.svg#power') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="choose-details">
                                        <h3>Risk Manajemen</h3>
                                        <p>Aplikasi pengukur hasil kebugaran jasmani tidak hanya menjadi alat ukur,
                                            tetapi juga menjadi pendamping gaya hidup sehat.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- why choose us section end -->

        <!-- Service section start -->
        <section class="service-style-1 service-style-2" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-style-1 text-center">
                            <h5>Monitoring APAR</h5>
                            <h2>Monitoring penggunaan APAR (Alat Pemadam Api Ringan)</h2>
                            <p>Sistem ini menjadi langkah proaktif dalam meminimalisir risiko serta memastikan setiap
                                alat keselamatan berfungsi secara optimal saat dibutuhkan.</p>
                        </div>
                    </div>
                </div>
                <div class="row service-wrapper gy-4 mb-0">
                    <div class="col-md-6">
                        <div class="light-card">
                            <div class="service-content">
                                <div class="service-content-wrap">
                                    <h3>APAR Manajement</h3>
                                    <p>Monitoring penggunaan APAR (Alat Pemadam Api Ringan) merupakan bagian penting
                                        dalam sistem keselamatan kerja, khususnya dalam upaya pencegahan dan
                                        penanggulangan kebakaran di lingkungan kerja. Dengan adanya sistem monitoring
                                        yang baik, setiap penggunaan APAR dapat tercatat, terpantau, dan dievaluasi
                                        secara sistematis sehingga meningkatkan efektivitas penanganan keadaan darurat.
                                    </p>
                                </div>
                            </div>
                            <div class="service-image">
                                <img class="img-fluid"
                                    src="{{ asset('assets_landing/images/app-landing/service/APAR.png') }}"
                                    alt="card">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="light-card">
                            <div class="service-content">
                                <div class="service-content-wrap">
                                    <h3>Monitoring APAR</h3>
                                    <p>Fitur lain yang tidak kalah penting adalah pelacakan kondisi APAR. Pengguna dapat
                                        mengetahui status alat, apakah dalam kondisi baik, perlu pengisian ulang, atau
                                        sedang dalam perbaikan. Bahkan, dengan integrasi teknologi seperti QR code atau
                                        barcode, proses identifikasi setiap unit APAR menjadi lebih cepat dan akurat.
                                    </p>
                                </div>
                            </div>
                            <div class="service-image">
                                <img class="img-fluid"
                                    src="{{ asset('assets_landing/images/app-landing/service/2.png') }}"
                                    alt="card">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service section end -->
        <!-- Footer section start -->
        <footer class="footer-style-1">
            <div class="main-footer">
                <div class="container">
                    <div class="row gx-xl-5 gy-md-5 gy-4 gx-4">
                        <div class="col-xl-4">
                            <div class="footer-contact">
                                <a href="index.html">
                                    <img src="../assets/images/logo/logo_dark.webp" alt="logo">
                                </a>
                                <p>Outlived no dwelling denoting in peculiar as he believed. Behavior excellent
                                    middleton be as it curiosity departure ourselves very extreme future.</p>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://in.pinterest.com/"><i class="fa-brands fa-pinterest"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-6">
                            <div class="footer-content">
                                <h3>Quick Link</h3>
                                <ul class="footer-links">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Home </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>About Us</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Features</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Blog Page</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Login</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-6">
                            <div class="footer-content">
                                <h3>Community</h3>
                                <ul class="footer-links">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Career</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Leadership</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Strategy</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Services</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>History</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <div class="footer-content">
                                <h3>Contact Info</h3>
                                <ul class="footer-location">
                                    <li>
                                        <div class="d-flex">
                                            <div class="footer-icon">
                                                <svg>
                                                    <use href="../assets/svg/icon_sprite.svg#map-pin"></use>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6>Address :</h6>
                                                <p>2118 Thorndike Cir. Syracuse, Connecticut 35624</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <div class="footer-icon">
                                                <svg>
                                                    <use href="../assets/svg/icon_sprite.svg#inbox"></use>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6>email :</h6>
                                                <p>info@cubatheme.com</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="sub-footer">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p>© Copyright 2024. All Rights Reserved by </p>
                        </div>
                        <div class="col-md-6">
                            <ul class="footer-links sub-footer-links">
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer section end -->

    </main>

    <!-- bootstrap js -->
    <script src="{{ asset('assets_landing/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- swiper js -->
    <script src="{{ asset('assets_landing/js/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/custom-swiper.js') }}"></script>

    <!-- font awesome js -->
    <script src="{{ asset('assets_landing/js/vendors/fontawesome/all.min.js') }}"></script>


    <script src="{{ asset('assets_landing/js/script.js') }}"></script>

</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Temukan panduan wisata, rental mobil, dan paket tur yang lengkap untuk menjelajahi destinasi impian Anda. Nikmati pengalaman traveling yang tak terlupakan bersama Jadi Trip">
    <meta name="keywords"
        content="jadi trip, tour guide, jasa tour guide, tour guide, private tour guide banyuwangi, bali tour guide service, tour guide lombok, car rental banyuwangi, rent car banyuwangi, self-drive car rental, travel packages, family travel packages, tour guide pribadi, layanan tour guide bali, tour guide lombok, sewa mobil bali, sewa mobil banyuwangi, sewa mobil lepas kunci, paket perjalanan, paket perjalanan keluarga">
    <meta name="jadi trip" content="themeperch">
    <title>Jadi Trip | Layanan perjalanan terbaik se-Indonesia</title>
    <link rel="icon" href="{{ url('assets/logo/logo.ico') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- css -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/venobox.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/new.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="page">
        <!-- Header ======================-->
        <header class="section-header header-1 sticky-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-xl hover-menu">
                    <div class="d-flex w-100 justify-content-between align-items-center">
                        <a class="navbar-brand" href="/" aria-label="nav-brands" rel="nofollow">
                            <img src="assets/logo/Jadi Trip Bhitam.png" style="height: 70px"
                                class="logo-light img-fluid" alt="logo-white">
                            {{-- <img src="assets/logo/Jadi Trip Bputih.png" style="height: 70px" class="logo-dark"
                                alt="logo-dark"> --}}
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasmobile-menu" aria-controls="offcanvasmobile-menu"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <!-- <span class="navbar-toggler-icon"></span>		 -->
                            <span class="menu-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 12H21M3 6H21M3 18H21" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </button>

                        <div class="d-none d-xl-block">
                            <div class="d-flex gap-70 align-items-center">
                                <ul class="gap-20 navbar-nav mb-2 me-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                                            aria-current="page" href="{{ url('blog', ['kategori' => 'destinasi']) }}"
                                            aria-label="nav-links">
                                            Destinasi
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                                            aria-current="page" href="{{ url('blog', ['kategori' => 'aktifitas']) }}"
                                            aria-label="nav-links">
                                            Aktifitas
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                                            href="{{ url('blog', ['kategori' => 'kuliner']) }}" aria-label="nav-links"
                                            aria-expanded="true">
                                            Kuliner
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                                            href="{{ url('paket') }}" aria-label="nav-links" aria-expanded="true">
                                            Paket
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                                            href="{{ url('blog') }}" aria-label="nav-links" aria-expanded="true">
                                            Blog
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                                            aria-current="page" href="{{ url('about') }}" aria-label="nav-links">
                                            About
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                                            aria-current="page" href="{{ url('kontak') }}" aria-label="nav-links">
                                            Kontak
                                        </a>
                                    </li>
                                </ul>

                                {{-- SEARCH MANUAL --}}
                                <div class="box-search" id="box-search">
                                    <form action='{{ url('/search') }}' id='search' method="GET">
                                        {{-- <i class='bx bx-search'></i> --}}
                                        <i class='bx bx-x' id="close-search"></i>
                                        <input aria-label='ketik lalu tekan ENTER' autocomplete='off'
                                            id='search-input' name='input' placeholder='ketik lalu tekan ENTER'
                                            type='text' />
                                    </form>
                                </div>

                                <div class="d-flex gap-20 align-items-center">

                                    <a class="serch-icon px-2" id="show-search">

                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19 19L13.0001 13M15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 4.13401 4.13401 1 8 1C11.866 1 15 4.13401 15 8Z"
                                                stroke="1" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </a>

                                    {{-- <a class="serch-icon px-2" data-bs-toggle="search-input"
                                        data-bs-target="#search-input" aria-controls="search-input">

                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19 19L13.0001 13M15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 4.13401 4.13401 1 8 1C11.866 1 15 4.13401 15 8Z"
                                                stroke="" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </a> --}}

                                    {{-- LOGO PROFIL KANAN ATAS --}}
                                    {{-- PROFIL KETIKA SUDAH LOGIN SCRIPT DIBAWAH --}}
                                    @if (Auth::check())
                                        <div class="box-profile" style="width: 40px; height: 40px; overflow: hidden;">
                                            <img width="40"
                                                src="{{ asset('profile/images/' . Auth::user()->photo) }}"
                                                class="user_pic" alt="" id="toggle-button" width="50">
                                        </div>

                                        <div class="sub-menu-wrap" id="subMenu">
                                            <div class="sub-menu">
                                                <div class="user-info">
                                                    <h3>{{ Auth::user()->username }}</h3>
                                                    <img src="{{ asset('profile/images/' . Auth::user()->photo) }}">

                                                </div>
                                                <hr>

                                                @if (Auth::user()->is_admin == 1)
                                                    <div class="sub-menu-link">
                                                        <span class="material-icons-sharp sub-icon">
                                                            account_circle
                                                        </span>
                                                        <a href="{{ url('/profil') }}">CMS</a>
                                                    </div>
                                                @else
                                                    <div class="sub-menu-link">
                                                        <span class="material-icons-sharp sub-icon">
                                                            account_circle
                                                        </span>
                                                        <a href="profil">Profile</a>
                                                    </div>
                                                @endif

                                                <div class="sub-menu-link">
                                                    <span class="material-icons-sharp sub-icon">
                                                        logout
                                                    </span>
                                                    <a href="logout">Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (!Auth::check())
                                        {{-- PROFIL KETIKA BELUM LOGIN SCRIPT DIBAWAH --}}
                                        <div class="box-profile" style="width: 40px; height: 40px; overflow: hidden;">
                                            <img width="40" src="{{ asset('profile/images/noprofile.png') }}"
                                                class="user_pic" alt="" id="toggle-button">
                                        </div>

                                        <div class="sub-menu-wrap" id="subMenu">
                                            <div class="sub-menu">
                                                <div class="sub-menu-link">
                                                    <span class="material-icons-sharp sub-icon">
                                                        login
                                                    </span>
                                                    <a href="login">Login</a>

                                                </div>

                                                <div class="sub-menu-link">
                                                    <span class="material-icons-sharp sub-icon">
                                                        how_to_reg
                                                    </span>
                                                    <a href="register">Register</a>
                                                </div>

                                            </div>
                                        </div>
                                    @endif
                                    <script>
                                        document.getElementById('toggle-button').addEventListener('click', function(event) {
                                            const menu = document.getElementById('subMenu');
                                            menu.classList.toggle('open-menu');
                                            event.stopPropagation();
                                        });

                                        document.addEventListener('click', function(event) {
                                            const menu = document.getElementById('subMenu');
                                            const button = document.getElementById('toggle-button');
                                            if (!menu.classList.contains('subMenu') && !menu.contains(event.target) && !button.contains(event
                                                    .target)) {
                                                menu.classList.remove('open-menu');
                                            }
                                        });
                                    </script>

                                    {{-- END OF PROFIL JIKA BELUM LOGIN --}}

                                    {{-- <a class="menu-icon"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasDesktop" aria-controls="offcanvasDesktop">
                                                        <span class="menu-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 12H21M3 6H21M3 18H21" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                        </a> --}}



                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Header ======================-->

        <!-- of canvas Mobile menu start -->
        <div class="offcanvas offcanvas-end offcanvasmobile-menu" id="offcanvasmobile-menu" data-bs-backdrop="static"
            tabindex="-1">
            <div class="offcanvas-header pb-30">
                <a class="navbar-brand dark-light-logo" href="/" aria-label="nav-brands" rel="nofollow">
                    <img src="assets/logo/Jadi Trip Bhitam.png" data-src="assets/logo/Jadi Trip Bputih.png"
                        class="logo-dark gambar-logo" alt="jadi trip">
                    <img src="assets/logo/Jadi Trip Bhitam.png" data-src="assets/logo/Jadi Trip Bhitam.png"
                        class="logo-light gambar-logo" alt="jadi trip">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex justify-content-start">
                <ul class="navbar-nav custom-navbar-nav mb-2  mb-lg-0 hover-menu">
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" rel="nofollow"
                            href="{{ url('blog', ['kategori' => 'destinasi']) }}" aria-label="nav-links">
                            Destinasi
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                            href="{{ url('blog', ['kategori' => 'aktifitas']) }}" aria-label="nav-links">
                            Aktifitas
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow" aria-current="page"
                            href="{{ url('blog', ['kategori' => 'kuliner']) }}" aria-label="nav-links"
                            aria-expanded="false">
                            Kuliner
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow" aria-current="page"
                            href="{{ url('paket') }}" aria-label="nav-links" aria-expanded="false">
                            Paket
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow" aria-current="page"
                            href="{{ url('blog') }}" aria-label="nav-links" aria-expanded="false">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow" aria-current="page"
                            href="{{ url('about') }}" aria-label="nav-links" aria-expanded="false">
                            About
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow" aria-current="page"
                            href="{{ url('kontak') }}" aria-label="nav-links" aria-expanded="false">
                            Kontak
                        </a>
                    </li>
                </ul>


            </div>

            <!-- <div class="text-center d-flex justify-content-center px-30">

                <div class="author-socials">
                    <a href="https://www.facebook.com" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com" class="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com" class="youtube"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.pinterest.com" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="https://twitter.com" class="twitter"><svg width="16" height="14"
                            viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.8092 15.98H11.1569L6.89801 9.78339L1.56807 15.98H0.19043L6.28619 8.89157L0.19043 0.0195312H4.84276L8.87486 5.88989L13.9234 0.0195312H15.301L9.48808 6.77751L15.8092 15.98ZM11.8079 14.9929H13.9234L4.18054 1.05696H2.06508L11.8079 14.9929Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div> -->
        </div>
        <!-- of canvas Mobile menu End -->

        <!-- Offcanvas Serch -->
        {{-- <div class="offcanvas offcanvas-top offcanvasserch py-lg-100 py-40" data-bs-scroll="false" tabindex="-1"
            id="offcanvasserch" data-bs-backdrop="false">
            <div class="offcanvas-header py-0 justify-content-end">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">

                            <h2 class="serch-modal-title mb-lg-60 mb-30">What are you looking for?</h2>
                            <div class="serch-form mb-lg-60 mb-40">
                                <form>
                                    <div class="d-flex flex-wrap gap-40 justify-content-center">
                                        <input type="search" name="search" class="form-control"
                                            placeholder="Search..." required>
                                        <button type="submit" class="btn btn-primary search-btn">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <h2 class="modal-post-title text-start mb-lg-40 mb-30">Recent Searches</h2>
                    <div class="search-tag mb-lg-60 mb-40">
                        <a href="#">Hike Highs: Elevate Your Spirit with Nature <span><i
                                    class="fa-light fa-xmark"></i> </span></a>
                        <a href="#">Sun, Sand, and Serenity: Beach Bliss <span><i class="fa-light fa-xmark"></i>
                            </span></a>
                        <a href="#">Secret Lakes: Hidden Gems of Natural Beauty <span><i
                                    class="fa-light fa-xmark"></i> </span></a>
                        <a href="#">Tent Talks: Outdoor Adventures Unleashed <span><i
                                    class="fa-light fa-xmark"></i> </span></a>
                        <a href="#">Beyond Shores: Discovering Idyllic Lake Paradises <span><i
                                    class="fa-light fa-xmark"></i> </span></a>
                    </div>
                    <h2 class="modal-post-title text-start mb-lg-40 mb-30">Recent Searches</h2>
                    <div class="row custom-row-gap">

                        <div class="col-xxl-4 col-lg-6">
                            <!-- mini-card-style -->
                            <div class="mini-card-style mb-lg-40 mb-30">
                                <div class="card-image-wrapper">
                                    <a href="/article"><img src="assets/images/placeholder.svg"
                                            data-src="assets/images/feature-images/feature-image-1.jpg"
                                            class="card-img-top" alt="Breakfast"> </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="/article"
                                            class="blog-title">Quick and Easy Flaky Pastry for Tasty Breakfast</a></h5>
                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                        <li>By <a href="author-1" class="fw-bold">Mike Aiden</a></li>
                                        <li>January 27, <span class="dynamic-year"> </span>.</li>
                                    </ul>
                                </div>

                            </div>
                            <!-- mini-card-style -->
                            <div class="mini-card-style mb-lg-40 mb-30">
                                <div class="card-image-wrapper">
                                    <a href="/article"> <img src="assets/images/placeholder.svg"
                                            data-src="assets/images/feature-images/feature-image-7.jpg"
                                            class="card-img-top" alt="Stories"> </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="/article"
                                            class="blog-title">Footprints in the Wilderness: Hiking Stories</a></h5>
                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                        <li>By <a href="about" class="fw-bold">Serba Tau</a></li>

                                        <li>January 25, <span class="dynamic-year"> </span>.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-lg-6">
                            <!-- mini-card-style -->
                            <div class="mini-card-style mb-lg-40 mb-30">
                                <div class="card-image-wrapper">
                                    <a href="/article"> <img src="assets/images/placeholder.svg"
                                            data-src="assets/images/feature-images/feature-image-3.jpg"
                                            class="card-img-top" alt="Stories"> </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="/article"
                                            class="blog-title">Lost Treasures: Top 10 Ancient City Sites</a></h5>
                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                        <li>By <a href="about" class="fw-bold">Serba Tau</a></li>

                                        <li>January 07, <span class="dynamic-year"> </span>.</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- mini-card-style -->
                            <div class="mini-card-style mb-lg-40 mb-30">
                                <div class="card-image-wrapper">
                                    <a href="/article"> <img src="assets/images/placeholder.svg"
                                            data-src="assets/images/feature-images/feature-image-4.jpg"
                                            class="card-img-top" alt="Stories"> </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="/article"
                                            class="blog-title">Beyond Shores: Discovering Idyllic Lake Paradises</a>
                                    </h5>
                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                        <li>By <a href="about" class="fw-bold">Mike Aiden</a></li>

                                        <li>January 18, <span class="dynamic-year"> </span>.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-lg-6">
                            <!-- mini-card-style -->
                            <div class="mini-card-style mb-lg-40 mb-30">
                                <div class="card-image-wrapper">
                                    <a href="/article"> <img src="assets/images/placeholder.svg"
                                            data-src="assets/images/feature-images/feature-image-5.jpg"
                                            class="card-img-top" alt="Stories"> </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="/article"
                                            class="blog-title">Seaside Serenity: Beachside Beauty Uncovered</a></h5>
                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                        <li>By <a href="about" class="fw-bold">Serba Tau</a></li>

                                        <li>January 15, <span class="dynamic-year"> </span>.</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- mini-card-style -->
                            <div class="mini-card-style mb-lg-40 mb-30">
                                <div class="card-image-wrapper">
                                    <a href="/article"> <img src="assets/images/placeholder.svg"
                                            data-src="assets/images/feature-images/feature-image-3.jpg"
                                            class="card-img-top" alt="Stories"> </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="/article"
                                            class="blog-title">Lost Treasures: Top 10 Ancient City Sites</a></h5>
                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                        <li>By <a href="about" class="fw-bold">Serba Tau</a></li>

                                        <li>February 07, <span class="dynamic-year"> </span>.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        <!-- Offcanvas Serch -->

        <!-- start to top button -->
        <div class="scroll_to_top to_top-2">
            <i class="fa-regular fa-angle-up"></i>
        </div>
        <!-- eND to top button -->

        <!-- proloder -->
        <!-- <div class="loader_main">
                <div class="loader_area">
                    <div class="loader"></div>
                </div>
            </div> -->
        <!-- proloder -->

        <!-- dark-light-Buttons -->
        <div class="dark-light-theme-btn" id="toggleBtn">
            <span class="light-icon"><i class="fa-light fa-sun-bright"></i></span>
            <span class="dark-icon"><i class="fa-solid fa-moon"></i></span>
        </div>
        <!-- dark-light-buttons -->

        <div class="main" data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%"
            data-bs-smooth-scroll="true">

            <!--Hero Section ======================-->
            <section class="section-hero hero-3 position-relative overlay">
                <div class="hero-wrapper mx-auto position-relative parallax">
                    <div class="container">
                        <div class="hero-inner-text position-relative text-center mb-5 mb-xxl-70">
                            <h3 class="display-5 lh-1 text-white exp-text-animate-1">Let's Go!</h1>
                                <p style="margin-bottom: 2rem" class="display-6 lh-1 exp-text-animate-1">Temukan
                                    Destinasi Impian Anda dengan Mudah</p>

                                <a href="#rekomendasi" id="lihat">Jelajahi</a>
                        </div>
                    </div>

                    <div class="card-swiper-wrapper card-swiper-wrapper-2 position-relative">
                        <h6 style="text-align: center">LAYANAN KAMI</h6>
                        <div class="swiper swiper-card-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card card-style-18">
                                        <div class="card-image-wrapper">
                                            <img src="assets/images/card/hiking.jpg" class="card-img-top"
                                                alt="img-top">
                                        </div>

                                        <div class="card-body text-center">
                                            <a href="{{ url('paket', ['kategori' => 'Open Trip']) }}">
                                                <p class="small mb-0 fw-extrabold text-white text-uppercase">Jasa Open
                                                    Trip</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- card-style-18 -->
                                </div>
                                <!-- swiper-slide -->

                                <div class="swiper-slide">
                                    <div class="card card-style-18">
                                        <div class="card-image-wrapper">
                                            <img src="assets/images/card/desert.jpg" class="card-img-top"
                                                alt="img-top">
                                        </div>

                                        <div class="card-body text-center">
                                            <a href="{{ url('paket', ['kategori' => 'Paket Wisata']) }}">
                                                <p class="small mb-0 fw-extrabold text-white text-uppercase">Paket
                                                    Wisata</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- card-style-18 -->
                                </div>
                                <!-- swiper-slide -->

                                <div class="swiper-slide">
                                    <div class="card card-style-18">
                                        <div class="card-image-wrapper">
                                            <img src="assets/images/card/camping.jpg" class="card-img-top"
                                                alt="img-top">
                                        </div>

                                        <div class="card-body text-center">
                                            <a href="{{ url('paket', ['kategori' => 'Rental Mobil']) }}">
                                                <p class="small mb-0 fw-extrabold text-white text-uppercase">Sewa Mobil
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- card-style-18 -->
                                </div>
                                <!-- swiper-slide -->
                            </div>

                            <!-- If we need navigation buttons -->
                            {{-- <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div> --}}
                            <!-- If we need scrollbar -->
                        </div>
                        <!-- hero-wrapper -->
                        <div class="swiper-scrollbar"></div>

            </section>
            <!--Hero Section ======================-->

            <!--feature Section Start ====================== -->
            <section class="feature-section pt-lg-200 pt-150 pb-lg-60 pb-50">
                <div id="rekomendasi" class="container">
                    <h4 class="section-title mb-lg-60 mb-md-40 md-20 text-center" data-wow-delay="0.4s">Rekomendasi
                        Paket Wisata</h4>
                    <div class="row custom-row-gap wow fadeInUp" data-wow-delay="0.4s">
                        @foreach ($pakets as $paket)
                            <div class="col-lg-6 mb-2">
                                <div class="card card-style-14">
                                    <div class="card-image-wrapper">
                                        <a href="{{ url('paket/' . $paket->tipe . '/' . $paket->slug) }}"><img
                                                src="assets/images/placeholder.svg"
                                                data-src="{{ url('assets/images/paket/' . $paket->thumbnail) }}"
                                                class="card-img-top" alt="Unleashed"></a>
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="fs-4 text-white card-title fw-extrabold"><a
                                                href="{{ url('paket/' . $paket->tipe . '/' . $paket->slug) }}"
                                                rel="nofollow" class="text-white blog-title">{{ $paket->title }}</a>
                                        </h5>
                                        <h6 class="text-white card-title fw-extrabold"><a
                                                href="{{ url('paket/' . $paket->tipe . '/' . $paket->slug) }}"
                                                rel="nofollow"
                                                class="text-white blog-title">{{ $paket->deskripsi }}</a></h6>
                                        <ul class="list-unstyled card-meta-style-3 mb-0 justify-content-center">
                                            <div class="clickHere">
                                                <a href="{{ url('paket/' . $paket->tipe . '/' . $paket->slug) }}"
                                                    rel="nofollow">Lihat Paket</a>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!--feature Section End ====================== -->

            <!--article Section Start ====================== -->
            <section class="section-article  pb-10  pb-lg-50">
                <div class="container">

                    <div class="row custom-row-gap">
                        <div class="col-lg-4 ">
                            <div class="sticky-elements">
                                <div class="d-flex flex-column gap-40">
                                    <!-- Iklan 1 -->
                                    @foreach ($iklans as $iklan)
                                        @if ($iklan->type === 'Iklan 1' && $iklan->status == 'On')
                                            <a href="{{ $iklan->tautan }}" title="{{ $iklan->perusahaan }}"
                                                target="_blank">
                                                <div class="about-me wow fadeInUp" data-wow-delay="0.4s">
                                                    <img id="iklan1-1"
                                                        src="assets/images/iklan/{{ $iklan->sampul }}"
                                                        alt="{{ $iklan->perusahaan }}">
                                                    <img id="iklan1-2"
                                                        src="assets/images/iklan/{{ $iklan->sampul }}"
                                                        alt="{{ $iklan->perusahaan }}">
                                                </div>
                                            </a>
                                        @endif
                                    @endforeach
                                    <!-- Iklan 1 End -->

                                    <!-- Socials -->
                                    <div class="widget widget-style-2 mb-10 wow fadeInUp" data-wow-delay="0.4s">
                                        <h4 class="fs-1 mb-3 mb-lg-20 text-white text-center">Social Link</h4>
                                        <p class="mb-20 mb-lg-30 text-white text-center">Follow Me On Social Media</p>

                                        <div
                                            class="social-icons d-flex align-items-center justify-content-center flex-wrap gap-20">
                                            <a href="https://www.facebook.com">
                                                <span class="">
                                                    <svg width="10" height="16" viewBox="0 0 11 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.13046 2.63679V0.036944C9.13046 0.036944 6.47179 0.0117188 6.29118 0.0117188C5.08995 0.0117188 3.36232 1.37817 3.36232 2.92941C3.36232 4.67665 3.36232 5.71267 3.36232 5.71267H0.873047V8.66395H3.32872V15.9876H6.2352V8.63036H8.80428L9.13046 5.74627H6.2688C6.2688 5.74627 6.2688 3.97383 6.2688 3.62803C6.2688 3.11981 6.65242 2.62141 7.22643 2.62141C7.60864 2.62141 9.13046 2.63679 9.13046 2.63679Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>

                                            <a href="https://www.instagram.com">
                                                <span class="">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.0524 15.9895H4.94685C2.22518 15.9895 0.0117188 13.776 0.0117188 11.0544V4.9488C0.0117188 2.22713 2.22518 0.0136719 4.94685 0.0136719H11.0524C13.7741 0.0136719 15.9875 2.22713 15.9875 4.9488V11.0544C15.9889 13.776 13.7741 15.9895 11.0524 15.9895ZM4.94685 1.79451C3.208 1.79451 1.79256 3.20996 1.79256 4.9488V11.0544C1.79256 12.7932 3.208 14.2087 4.94685 14.2087H11.0524C12.7912 14.2087 14.2067 12.7932 14.2067 11.0544V4.9488C14.2067 3.20996 12.7912 1.79451 11.0524 1.79451H4.94685Z">
                                                        </path>
                                                        <path
                                                            d="M8.00046 12.0849C5.7492 12.0849 3.91797 10.2537 3.91797 8.00242C3.91797 5.75116 5.7492 3.91992 8.00046 3.91992C10.2517 3.91992 12.083 5.75116 12.083 8.00242C12.083 10.2537 10.2517 12.0849 8.00046 12.0849ZM8.00046 5.52156C6.63263 5.52156 5.5196 6.63458 5.5196 8.00242C5.5196 9.37025 6.63263 10.4833 8.00046 10.4833C9.3683 10.4833 10.4813 9.37025 10.4813 8.00242C10.4813 6.63458 9.3683 5.52156 8.00046 5.52156Z">
                                                        </path>
                                                        <path
                                                            d="M12.982 3.68044C12.982 4.06125 12.6726 4.37069 12.2918 4.37069C11.911 4.37069 11.6016 4.06125 11.6016 3.68044C11.6016 3.29963 11.911 2.99023 12.2918 2.99023C12.6726 2.99023 12.982 3.29823 12.982 3.68044Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>

                                            <a href="https://www.youtube.com">
                                                <span class="">
                                                    <svg width="18" height="12" viewBox="0 0 18 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.4105 0.0820312H3.591C1.89275 0.0820312 0.503906 1.47084 0.503906 3.16909V8.83366C0.503906 10.5319 1.89275 11.9207 3.591 11.9207H14.4105C16.1087 11.9207 17.4975 10.5319 17.4975 8.83366V3.16909C17.4975 1.47084 16.1087 0.0820312 14.4105 0.0820312ZM9.47816 7.67723L6.84188 9.30826V6.04617V2.78408L9.47816 4.41514L12.1144 6.04617L9.47816 7.67723Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>

                                            <a href="https://twitter.com">
                                                <span class="">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.8092 15.98H11.1569L6.89801 9.78339L1.56807 15.98H0.19043L6.28619 8.89157L0.19043 0.0195312H4.84276L8.87486 5.88989L13.9234 0.0195312H15.301L9.48808 6.77751L15.8092 15.98ZM11.8079 14.9929H13.9234L4.18054 1.05696H2.06508L11.8079 14.9929Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>

                                            <a href="https://www.pinterest.com">
                                                <span class="">
                                                    <svg width="14" height="18" viewBox="0 0 14 18"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.21932 8.5049C4.21932 8.5049 3.5417 6.42445 4.33972 5.28762C5.13774 4.15079 5.81536 4.0052 6.68619 4.22361C7.55701 4.44201 7.77542 5.57882 7.58081 6.54625C7.38761 7.51367 6.8794 9.23153 6.8556 9.49753C6.8318 9.76354 6.7828 10.5378 7.53322 10.8528C8.28364 11.1678 9.49327 10.78 10.1219 9.49753C10.7505 8.2151 10.9927 6.49724 10.8961 5.84483C10.7995 5.19101 10.7029 3.57118 8.76664 2.84456C6.83039 2.11794 5.29595 2.83617 4.92074 3.06718C4.36073 3.41159 3.30089 4.1956 2.86688 5.23583C2.59668 5.88405 2.49729 6.63306 2.56449 7.18467C2.64009 7.80629 2.9607 8.45591 3.2267 8.73452C3.49271 9.01313 3.3961 9.30292 3.3597 9.52132C3.3233 9.73973 3.2421 10.3445 3.0335 10.57C2.82349 10.7954 2.37967 10.8247 2.20187 10.7365C2.02406 10.6483 1.18826 10.2116 0.695443 9.35893C0.18163 8.46711 -0.0367782 7.08387 0.325831 5.29462C0.688441 3.50398 2.18787 1.89954 3.78251 1.10292C5.36875 0.310501 7.28401 -0.0871181 9.07466 0.429495C10.8653 0.946109 12.4445 1.92612 13.3154 3.81337C14.1862 5.70062 13.8236 8.14369 13.412 9.28192C13.0004 10.4188 12.2583 11.718 10.8555 12.5076C9.45266 13.2986 8.22623 13.2818 7.82302 13.1852C7.41981 13.0886 6.48459 12.7988 6.06458 12.3298C6.06458 12.3298 5.46816 14.6525 5.22596 15.2811C4.98375 15.9097 4.56934 16.9387 4.20533 17.3251C3.84272 17.7115 3.67332 17.846 3.33451 17.797C2.9957 17.748 2.8025 17.4455 2.7423 16.5383C2.68209 15.6311 3.12869 13.0228 3.3065 12.264C3.4857 11.5052 4.13112 8.86051 4.21932 8.5049Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>

                                            <a href="https://www.linkedin.com">
                                                <span class="">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.10708 6.41797H1.4502V16.6369H5.10708V6.41797Z">
                                                        </path>
                                                        <path
                                                            d="M6.99243 6.41898H9.8149V7.83861C9.8149 7.83861 10.2489 6.40637 12.8586 6.40637C15.0118 6.40637 16.5533 7.24499 16.5533 9.54945C16.5533 10.8235 16.5533 16.6379 16.5533 16.6379H13.539C13.539 16.6379 13.5558 10.6765 13.5726 10.4931C13.5894 10.3097 13.406 8.80606 11.8701 8.80606C10.3343 8.80606 9.8499 9.90786 9.8499 10.7423C9.8499 11.5767 9.8499 16.6365 9.8499 16.6365H6.99523V6.41898H6.99243Z">
                                                        </path>
                                                        <path
                                                            d="M4.56523 4.4804C5.27928 3.76636 5.27928 2.60864 4.56523 1.8946C3.85119 1.18055 2.69347 1.18055 1.97943 1.8946C1.26538 2.60864 1.26538 3.76636 1.97943 4.4804C2.69347 5.19445 3.85119 5.19445 4.56523 4.4804Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>

                                        </div>
                                        <!-- social-icons -->
                                    </div>
                                    <!-- Iklan 2 -->
                                    {{-- @foreach ($iklans as $iklan)
                                        @if ($iklan->type == 'Iklan 2')
                                            <div class="add-image d-none d-xl-block ml-auto wow fadeInUp"
                                                title="{{ $iklan->company }}" data-wow-delay="0.4s">
                                                <a href="{{ $iklan->link }}" rel="nofollow" target="__blank"><img
                                                        style="border-radius: 1rem;"
                                                        src="assets/images/iklan/{{ $iklan->image }}"
                                                        class="img-fluid" alt="{{ $iklan->company }}"></a>
                                            </div>
                                        @endif
                                    @endforeach --}}
                                    <!-- Iklan 2 End -->
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-8">
                            <h2 class="section-title mb-lg-50  mb-md-30 md-20">Postingan Terbaru</h2>
                            <div class="row custom-row-gap">
                                @foreach ($datas as $data)
                                    <div class="col-lg-12 col-xl-6">
                                        <!-- single card -->
                                        <div class="card card-style-2 card-border mb-lg-40 mb-20  wow fadeInUp"
                                            data-wow-delay="0.4s">
                                            <div class="card-image-wrapper">
                                                <a href="/article/{{ $data->slug }}"><img
                                                        src="{{ asset('assets/images/placeholder.svg') }}"
                                                        data-src="{{ asset('post_media/' . $data->thumbnail) }}"
                                                        class="card-img-top" alt="Discovering" /></a>
                                            </div>

                                            <div class="card-body">
                                                <div class="card-header text-uppercase">
                                                    <a href="/category">{{ $data->kategori->name }}</a>
                                                </div>
                                                <h6 class="fs-4 card-title"><a href="/article/{{ $data->slug }}"
                                                        class="blog-title">{{ $data->title }}</a></h6>
                                                <ul class="list-unstyled card-meta  align-items-center">
                                                    <li>By <a href="author-1" class="blog-author fw-bold">Jadi
                                                            Trip</a></li>
                                                    <li>
                                                        {{-- {{ \Carbon\Carbon::parse($data->created_at)->format('F d, Y') }} --}}
                                                        {{ $data->created_at->diffForHumans() }}
                                                    </li>
                                                </ul>

                                                <p class="card-text small">
                                                    {{ Str::limit($data->description, 100, '...') }}</p>
                                                </ul>
                                                <a href="/article/{{ $data->slug }}">Read
                                                    more &raquo;</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <!-- BUtton -->
                                <div class="load-more-btn pt-lg-20  pt-10 d-flex justify-content-end  wow fadeInUp"
                                    data-wow-delay="0.4s">
                                    <a href="blog" class="btn btn-secondary">Load More</a>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </section>
            <!--article Section End ====================== -->

            <!--Cta Section Start ====================== -->
            <!-- <section class="section-cta wow fadeInUp" data-bs-theme="light" data-wow-delay="0.4s">

                    <div class="container">
                        <div class="cta-area cta-area-2 pt-lg-60 pb-lg-90 pt-30 pb-30">

                            <div class="row justify-content-end">
                                <div class="col-lg-6">
                                    <div class="cta-content cta-content-2 pl-lg-100">
                                        <p class="fs-6 text-white mb-10">Keep in Touch</p>
                                        <h3 class=" fs-3 text-white  mb-30 ">Explore the world</h3>
                                        <form>
                                            <div class="form-group d-flex gap-30">
                                                <input type="email" class="form-control" name="email" placeholder="Your email address" required>
                                                <button type="submit" class="btn">Subscribe</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section> -->
            <!--Cta Section End ====================== -->

            <!--Instragram Section Start ====================== -->
            <section class="section-instragram py-lg-70 py-30">
                <div class="container">
                    <div class="section-instragram-header mb-lg-60  mb-md-40 md-20  wow fadeInUp"
                        data-wow-delay="0.4s">
                        <span class="d-flex justify-content-center mb-10 instagram-icon">
                            <i class="fa-brands fa-instagram"></i>
                        </span>
                        <h2 class="section-title text-center">Instagram</h2>
                        <p class="text-center">Follow Me on Instagram</p>
                    </div>

                    <div class=" swiper instagram-slider wow fadeInUp" id="swiper-wrapper" data-wow-delay="0.4s">
                        <div class="swiper-wrapper">

                            @foreach ($mediaData as $media)
                                <div class="swiper-slide" id="swiper-slide">
                                    <a href="{{ $media['permalink'] }}" target="__blank">
                                        <div class="instagram-image-wrapper image-hover">
                                            <img src="assets/images/placeholder.svg"
                                                data-src="{{ $media['media_url'] }}" alt="instagram-image">

                                            <span class="d-flex justify-content-center mb-10"> <svg width="40"
                                                    height="40" viewBox="0 0 40 40" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M27.6435 40H12.3565C5.54201 40 0 34.458 0 27.6435V12.3565C0 5.54202 5.54201 0 12.3565 0H27.6435C34.4579 0 40 5.54202 40 12.3565V27.6435C40.0035 34.458 34.4579 40 27.6435 40ZM12.3565 4.45884C8.0028 4.45884 4.45884 8.0028 4.45884 12.3565V27.6435C4.45884 31.9972 8.0028 35.5412 12.3565 35.5412H27.6435C31.9972 35.5412 35.5411 31.9972 35.5411 27.6435V12.3565C35.5411 8.0028 31.9972 4.45884 27.6435 4.45884H12.3565Z"
                                                        fill="#363636" />
                                                    <path
                                                        d="M20.0029 30.2168C14.3663 30.2168 9.78125 25.6318 9.78125 19.9951C9.78125 14.3585 14.3663 9.77344 20.0029 9.77344C25.6396 9.77344 30.2246 14.3585 30.2246 19.9951C30.2246 25.6318 25.6396 30.2168 20.0029 30.2168ZM20.0029 13.7836C16.5782 13.7836 13.7914 16.5704 13.7914 19.9951C13.7914 23.4199 16.5782 26.2066 20.0029 26.2066C23.4277 26.2066 26.2145 23.4199 26.2145 19.9951C26.2145 16.5704 23.4277 13.7836 20.0029 13.7836Z"
                                                        fill="#363636" />
                                                    <path
                                                        d="M32.4758 9.18126C32.4758 10.1347 31.7011 10.9095 30.7477 10.9095C29.7942 10.9095 29.0195 10.1347 29.0195 9.18126C29.0195 8.22779 29.7942 7.45312 30.7477 7.45312C31.7011 7.45312 32.4758 8.22429 32.4758 9.18126Z"
                                                        fill="#fff" />
                                                </svg>
                                            </span>


                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <a href="https://www.instagram.com/jaditrip_travel" target="__blank"><span
                                class="text-white follow-txt">Follow Me</span></a>
                    </div>

                </div>
            </section>
            <!--Instragram Section End ====================== -->

        </div>
        <!--Footer Section ======================-->
        <footer class="section-footer section-footer-2  parallax pt-40 pt-md-60 pt-lg-130">
            <div class="footer-wrapper position-relative py-20 py-lg-60 py-xl-100">
                <div class="container">
                    <div class="footer-top-contents pb-30">
                        <div class="row align-items-center gy-30 gy-lg-0">
                            <div class="col-lg-6">

                                {{-- jangan di hapus, buat space --}}
                                <!-- footer-links -->
                            </div>
                            <!-- col-6 -->

                            <div class="col-lg-6">
                                <div class="social-icons  d-flex align-items-center justify-content-lg-end gap-20">
                                    <a href="https://www.facebook.com" rel="nofollow">
                                        <span class="text-white">
                                            <svg width="10" height="16" viewBox="0 0 11 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.13046 2.63679V0.036944C9.13046 0.036944 6.47179 0.0117188 6.29118 0.0117188C5.08995 0.0117188 3.36232 1.37817 3.36232 2.92941C3.36232 4.67665 3.36232 5.71267 3.36232 5.71267H0.873047V8.66395H3.32872V15.9876H6.2352V8.63036H8.80428L9.13046 5.74627H6.2688C6.2688 5.74627 6.2688 3.97383 6.2688 3.62803C6.2688 3.11981 6.65242 2.62141 7.22643 2.62141C7.60864 2.62141 9.13046 2.63679 9.13046 2.63679Z" />
                                            </svg>
                                        </span>
                                    </a>

                                    <a href="https://www.instagram.com/" rel="nofollow">
                                        <span class="text-white">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.0524 15.9895H4.94685C2.22518 15.9895 0.0117188 13.776 0.0117188 11.0544V4.9488C0.0117188 2.22713 2.22518 0.0136719 4.94685 0.0136719H11.0524C13.7741 0.0136719 15.9875 2.22713 15.9875 4.9488V11.0544C15.9889 13.776 13.7741 15.9895 11.0524 15.9895ZM4.94685 1.79451C3.208 1.79451 1.79256 3.20996 1.79256 4.9488V11.0544C1.79256 12.7932 3.208 14.2087 4.94685 14.2087H11.0524C12.7912 14.2087 14.2067 12.7932 14.2067 11.0544V4.9488C14.2067 3.20996 12.7912 1.79451 11.0524 1.79451H4.94685Z" />
                                                <path
                                                    d="M8.00046 12.0849C5.7492 12.0849 3.91797 10.2537 3.91797 8.00242C3.91797 5.75116 5.7492 3.91992 8.00046 3.91992C10.2517 3.91992 12.083 5.75116 12.083 8.00242C12.083 10.2537 10.2517 12.0849 8.00046 12.0849ZM8.00046 5.52156C6.63263 5.52156 5.5196 6.63458 5.5196 8.00242C5.5196 9.37025 6.63263 10.4833 8.00046 10.4833C9.3683 10.4833 10.4813 9.37025 10.4813 8.00242C10.4813 6.63458 9.3683 5.52156 8.00046 5.52156Z" />
                                                <path
                                                    d="M12.982 3.68044C12.982 4.06125 12.6726 4.37069 12.2918 4.37069C11.911 4.37069 11.6016 4.06125 11.6016 3.68044C11.6016 3.29963 11.911 2.99023 12.2918 2.99023C12.6726 2.99023 12.982 3.29823 12.982 3.68044Z" />
                                            </svg>
                                        </span>
                                    </a>

                                    <a href="https://twitter.com" rel="nofollow">
                                        <span class="text-white">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.8092 15.98H11.1569L6.89801 9.78339L1.56807 15.98H0.19043L6.28619 8.89157L0.19043 0.0195312H4.84276L8.87486 5.88989L13.9234 0.0195312H15.301L9.48808 6.77751L15.8092 15.98ZM11.8079 14.9929H13.9234L4.18054 1.05696H2.06508L11.8079 14.9929Z" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="https://www.youtube.com" rel="nofollow">
                                        <span class="text-white">
                                            <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.4095 0.0820312H3.59002C1.89177 0.0820312 0.50293 1.47084 0.50293 3.16909V8.83366C0.50293 10.5319 1.89177 11.9207 3.59002 11.9207H14.4095C16.1078 11.9207 17.4966 10.5319 17.4966 8.83366V3.16909C17.4966 1.47084 16.1078 0.0820312 14.4095 0.0820312ZM9.47718 7.67723L6.8409 9.30826V6.04617V2.78408L9.47718 4.41514L12.1134 6.04617L9.47718 7.67723Z"
                                                    fill="#4C9BB3" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="https://www.linkedin.com" rel="nofollow">
                                        <span class="text-white">
                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.10708 6.41797H1.4502V16.6369H5.10708V6.41797Z"
                                                    fill="#4C9BB3" />
                                                <path
                                                    d="M6.99219 6.41898H9.81465V7.83861C9.81465 7.83861 10.2487 6.40637 12.8583 6.40637C15.0116 6.40637 16.553 7.24499 16.553 9.54945C16.553 10.8235 16.553 16.6379 16.553 16.6379H13.5388C13.5388 16.6379 13.5556 10.6765 13.5724 10.4931C13.5892 10.3097 13.4057 8.80606 11.8699 8.80606C10.3341 8.80606 9.84965 9.90786 9.84965 10.7423C9.84965 11.5767 9.84965 16.6365 9.84965 16.6365H6.99499V6.41898H6.99219Z"
                                                    fill="#4C9BB3" />
                                                <path
                                                    d="M4.56523 4.4804C5.27928 3.76636 5.27928 2.60864 4.56523 1.8946C3.85119 1.18055 2.69347 1.18055 1.97943 1.8946C1.26538 2.60864 1.26538 3.76636 1.97943 4.4804C2.69347 5.19445 3.85119 5.19445 4.56523 4.4804Z"
                                                    fill="#4C9BB3" />
                                            </svg>

                                        </span>
                                    </a>

                                    <a href="https://www.pinterest.com" rel="nofollow">
                                        <span class="text-white">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.21932 8.5049C4.21932 8.5049 3.5417 6.42445 4.33972 5.28762C5.13774 4.15079 5.81536 4.0052 6.68619 4.22361C7.55701 4.44201 7.77542 5.57882 7.58081 6.54625C7.38761 7.51367 6.8794 9.23153 6.8556 9.49753C6.8318 9.76354 6.7828 10.5378 7.53322 10.8528C8.28364 11.1678 9.49327 10.78 10.1219 9.49753C10.7505 8.2151 10.9927 6.49724 10.8961 5.84483C10.7995 5.19101 10.7029 3.57118 8.76664 2.84456C6.83039 2.11794 5.29595 2.83617 4.92074 3.06718C4.36073 3.41159 3.30089 4.1956 2.86688 5.23583C2.59668 5.88405 2.49729 6.63306 2.56449 7.18467C2.64009 7.80629 2.9607 8.45591 3.2267 8.73452C3.49271 9.01313 3.3961 9.30292 3.3597 9.52132C3.3233 9.73973 3.2421 10.3445 3.0335 10.57C2.82349 10.7954 2.37967 10.8247 2.20187 10.7365C2.02406 10.6483 1.18826 10.2116 0.695443 9.35893C0.18163 8.46711 -0.0367782 7.08387 0.325831 5.29462C0.688441 3.50398 2.18787 1.89954 3.78251 1.10292C5.36875 0.310501 7.28401 -0.0871181 9.07466 0.429495C10.8653 0.946109 12.4445 1.92612 13.3154 3.81337C14.1862 5.70062 13.8236 8.14369 13.412 9.28192C13.0004 10.4188 12.2583 11.718 10.8555 12.5076C9.45266 13.2986 8.22623 13.2818 7.82302 13.1852C7.41981 13.0886 6.48459 12.7988 6.06458 12.3298C6.06458 12.3298 5.46816 14.6525 5.22596 15.2811C4.98375 15.9097 4.56934 16.9387 4.20533 17.3251C3.84272 17.7115 3.67332 17.846 3.33451 17.797C2.9957 17.748 2.8025 17.4455 2.7423 16.5383C2.68209 15.6311 3.12869 13.0228 3.3065 12.264C3.4857 11.5052 4.13112 8.86051 4.21932 8.5049Z" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                                <!-- social-icons -->
                            </div>
                            <!-- col-6 -->

                        </div>
                        <!-- row -->
                    </div>
                    <!-- footer-top-contents -->

                    <div class="footer-bottom-contents mt-30 text-white">

                        <div
                            class="d-flex flex-column flex-sm-row gap-3 gap-lg-0 align-items-lg-center justify-content-lg-between justify-content-center">

                            <div class="d-flex justify-content-center gap-10">
                                <p class="mb-0 lead">A product of <span style="color: rgb(0, 134, 157)"><b><i>Myos
                                                Studio</i></b></span></p>
                                {{-- <a class="footer-logo" href="/" aria-label="nav-brands">
                                    <img src="{{ url('assets/images/placeholder.svg') }}"
                                        data-src="{{ url('assets/images/logo-primary.png') }}"
                                        class="logo-light img-fluid" alt="footer-logo-two">
                                </a> --}}
                            </div>
                            <p class="mb-0 text-center lead">&copy; <span class="dynamic-year"> </span>. Jadi Trip.
                                All rights reserved</p>
                        </div>
                    </div>
                    <!-- footer-bottom-contents -->

                </div>
                <!-- container -->
            </div>
        </footer>
        <!--Footer Section ======================-->


    </div>
    <!-- page -->



    <!-- js link -->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/venobox.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/gsap/gsap.min.js"></script>
    <script src="assets/js/gsap/SplitText.min.js"></script>
    <script src="assets/js/gsap/ScrollTrigger.min.js"></script>
    <script src="assets/js/gsap/split-type-0.3.3.min.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/lazy.image.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/search.js"></script>


</body>

</html>

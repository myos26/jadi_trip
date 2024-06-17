<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jadi Trip is your ultimate destination for travel inspiration, tips, and guides. Discover hidden gems, plan your next adventure, and make the most out of your travels with our expertly curated content. Join our community of wanderers and explore the world with Jadi Trip.">
    <meta name="keywords" content="blog, blogging, blogger, articles, posts, content, writing, writers, blogosphere, online journal, web log, topics, ideas, tips, advice">
    <meta name="author" content="themeperch">
    <title>Jadi Trip</title>
    <link rel="icon" href="{{asset('assets/logo/logo.ico')}}" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
                            <a class="navbar-brand" href="/" aria-label="nav-brands">
                                <img src="assets/logo/Jadi Trip Bhitam.png" style="height: 70px" class="logo-light img-fluid" alt="logo-white">
                                {{-- <img src="assets/logo/Jadi Trip Bputih.png" style="height: 70px" class="logo-dark" alt="logo-dark"> --}}
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasmobile-menu" aria-controls="offcanvasmobile-menu" aria-expanded="false" aria-label="Toggle navigation">
                                <!-- <span class="navbar-toggler-icon"></span>		 -->
                                <span class="menu-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 12H21M3 6H21M3 18H21" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </button>

                            <div class="d-none d-xl-block">
                                <div class="d-flex gap-70 align-items-center">
                                    <ul class="gap-20 navbar-nav mb-2 me-2 mb-lg-0">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow" aria-current="page" href="{{ route('blog', ['kategori'=>'Destinasi']) }}" aria-label="nav-links">
                                                Destinasi
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow" aria-current="page" href="{{ route('blog', ['kategori'=>'aktifitas']) }}" aria-label="nav-links">
                                                Aktifitas
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"  href="{{ route('blog', ['kategori'=>'kuliner']) }}" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="true">
                                                Kuliner
                                                <span class="dropdown-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                                    </svg>
                                                </span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('blog', ['kategori'=>'kuliner banyuwangi']) }}" rel="nofollow" aria-label="single-pages">Banyuwangi</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('blog', ['kategori'=>'kuliner malang']) }}" rel="nofollow" aria-label="single-pages">Malang</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"  href="" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="true">
                                                Paket
                                                <span class="dropdown-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                                    </svg>
                                                </span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="blog" rel="nofollow" aria-label="single-pages">Open Trip</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog" rel="nofollow" aria-label="single-pages">Paket Wisata</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"  href="" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="true">
                                                Blog
                                                <span class="dropdown-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                                    </svg>
                                                </span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('blog')}}" rel="nofollow" aria-label="single-pages">Blog 1</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow" aria-current="page" href="about" aria-label="nav-links">
                                                About
                                            </a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow" aria-current="page" href="contact" aria-label="nav-links">
                                                Kontak
                                            </a>
                                        </li>
                                    </ul>


                                    <div class="d-flex gap-20 align-items-center">

                                        <a class="serch-icon px-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasserch" aria-controls="offcanvasserch">

                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19 19L13.0001 13M15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 4.13401 4.13401 1 8 1C11.866 1 15 4.13401 15 8Z" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>

                                        </a>

                                        <a class="menu-icon"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasDesktop" aria-controls="offcanvasDesktop">
                                                        <span class="menu-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 12H21M3 6H21M3 18H21" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- Header ======================-->

            <!-- of canvas Mobile menu start -->
            <div class="offcanvas offcanvas-end offcanvasmobile-menu" id="offcanvasmobile-menu" data-bs-backdrop="static" tabindex="-1">
                <div class="offcanvas-header pb-30">
                    <a class="navbar-brand dark-light-logo" href="/" aria-label="nav-brands">
                        <img src="assets/images/placeholder.svg" data-src="assets/images/logo-dark.png" class="logo-dark img-fluid" alt="logo">
                        <img src="assets/images/placeholder.svg" data-src="assets/images/logo-white.png" class="logo-light img-fluid" alt="logo">
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex justify-content-start">
                    <ul class="navbar-nav custom-navbar-nav mb-2  mb-lg-0 hover-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link active d-flex gap-2 align-items-center" aria-current="page" href="blog" aria-label="nav-links">
                                Destinasi
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex gap-2 align-items-center"  href="blog" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="true">
                                Aktifitas
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="blog" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Kuliner
                                <span class="dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="blog" aria-label="single-pages">Malang</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog" aria-label="single-pages">Banyuwangi</a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="blog" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Paket
                                <span class="dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="blog" aria-label="single-pages">Contact 1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog" aria-label="single-pages">Contact 2</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="blog" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Blog
                                <span class="dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="/article" aria-label="single-pages">Article 1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/article" aria-label="single-pages">Article 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="about" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="contact" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Kontak
                            </a>
                        </li>
                    </ul>


                </div>

                <div class="text-center d-flex justify-content-center px-30">

                    <!-- author-socials -->
                    <div class="author-socials">
                        <a href="https://www.facebook.com" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com" class="youtube"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.pinterest.com" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                       <a href="https://twitter.com" class="twitter"><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8092 15.98H11.1569L6.89801 9.78339L1.56807 15.98H0.19043L6.28619 8.89157L0.19043 0.0195312H4.84276L8.87486 5.88989L13.9234 0.0195312H15.301L9.48808 6.77751L15.8092 15.98ZM11.8079 14.9929H13.9234L4.18054 1.05696H2.06508L11.8079 14.9929Z"></path>
                                </svg>
                            </a>
                    </div>
                </div>
            </div>
            <!-- of canvas Mobile menu End -->

            <!-- Offcanvas Serch -->
            <div class="offcanvas offcanvas-top offcanvasserch py-lg-100 py-40" data-bs-scroll="false" tabindex="-1" id="offcanvasserch" data-bs-backdrop="false">
                <div class="offcanvas-header py-0 justify-content-end">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">

                                <h2 class="serch-modal-title mb-lg-60 mb-30">What are you looking for?</h2>
                                <div class="serch-form mb-lg-60 mb-40">
                                    <form>
                                        <div class="d-flex flex-wrap gap-40 justify-content-center">
                                            <input type="search" name="search" class="form-control" placeholder="Search..." required>
                                            <button type="submit" class="btn btn-primary search-btn">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <h2 class="modal-post-title text-start mb-lg-40 mb-30">Recent Searches</h2>
                        <div class="search-tag mb-lg-60 mb-40">
                            <a href="#">Hike Highs: Elevate Your Spirit with Nature <span><i class="fa-light fa-xmark"></i> </span></a>
                            <a href="#">Sun, Sand, and Serenity: Beach Bliss <span><i class="fa-light fa-xmark"></i> </span></a>
                            <a href="#">Secret Lakes: Hidden Gems of Natural Beauty <span><i class="fa-light fa-xmark"></i> </span></a>
                            <a href="#">Tent Talks: Outdoor Adventures Unleashed <span><i class="fa-light fa-xmark"></i> </span></a>
                            <a href="#">Beyond Shores: Discovering Idyllic Lake Paradises <span><i class="fa-light fa-xmark"></i> </span></a>
                        </div>
                        <h2 class="modal-post-title text-start mb-lg-40 mb-30">Recent Searches</h2>
                        <div class="row custom-row-gap">

                            <div class="col-xxl-4 col-lg-6">
                                <!-- mini-card-style -->
                                <div class="mini-card-style mb-lg-40 mb-30">
                                    <div class="card-image-wrapper">
                                        <a href="/article"><img src="assets/images/placeholder.svg" data-src="assets/images/feature-images/feature-image-1.jpg" class="card-img-top" alt="Breakfast"> </a>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title lead fw-extrabold mb-0"><a href="/article" class="blog-title">Quick and Easy Flaky Pastry for Tasty Breakfast</a></h5>
                                        <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                            <li>By <a href="author-1" class="fw-bold">Mike Aiden</a></li>
                                            <li>January 27, <span class="dynamic-year"> </span>.</li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- mini-card-style -->
                                <div class="mini-card-style mb-lg-40 mb-30">
                                    <div class="card-image-wrapper">
                                        <a href="/article"> <img src="assets/images/placeholder.svg" data-src="assets/images/feature-images/feature-image-7.jpg" class="card-img-top" alt="Stories"> </a>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title lead fw-extrabold mb-0"><a href="/article" class="blog-title">Footprints in the Wilderness: Hiking Stories</a></h5>
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
                                        <a href="/article"> <img src="assets/images/placeholder.svg" data-src="assets/images/feature-images/feature-image-3.jpg" class="card-img-top" alt="Stories"> </a>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title lead fw-extrabold mb-0"><a href="/article" class="blog-title">Lost Treasures: Top 10 Ancient City Sites</a></h5>
                                        <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                            <li>By <a href="about" class="fw-bold">Serba Tau</a></li>

                                            <li>January 07, <span class="dynamic-year"> </span>.</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- mini-card-style -->
                                <div class="mini-card-style mb-lg-40 mb-30">
                                    <div class="card-image-wrapper">
                                        <a href="/article"> <img src="assets/images/placeholder.svg" data-src="assets/images/feature-images/feature-image-4.jpg" class="card-img-top" alt="Stories"> </a>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title lead fw-extrabold mb-0"><a href="/article" class="blog-title">Beyond Shores: Discovering Idyllic Lake Paradises</a></h5>
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
                                        <a href="/article"> <img src="assets/images/placeholder.svg" data-src="assets/images/feature-images/feature-image-5.jpg" class="card-img-top" alt="Stories"> </a>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title lead fw-extrabold mb-0"><a href="/article" class="blog-title">Seaside Serenity: Beachside Beauty Uncovered</a></h5>
                                        <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                            <li>By <a href="about" class="fw-bold">Serba Tau</a></li>

                                            <li>January 15, <span class="dynamic-year"> </span>.</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- mini-card-style -->
                                <div class="mini-card-style mb-lg-40 mb-30">
                                    <div class="card-image-wrapper">
                                        <a href="/article"> <img src="assets/images/placeholder.svg" data-src="assets/images/feature-images/feature-image-3.jpg" class="card-img-top" alt="Stories"> </a>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title lead fw-extrabold mb-0"><a href="/article" class="blog-title">Lost Treasures: Top 10 Ancient City Sites</a></h5>
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
            </div>
            <!-- Offcanvas Serch -->

            <!-- start to top button -->
            <div class="scroll_to_top to_top-2" >
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

            <div class="main"  data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">

                <!--Hero Section ======================-->
                <section class="section-hero hero-3 position-relative overlay">
                    <div class="hero-wrapper mx-auto position-relative parallax">
                        <div class="container">
                            <div class="hero-inner-text position-relative text-center mb-5 mb-xxl-70">
                                <h3 class="display-5 lh-1 text-white exp-text-animate-1">Let's Go!</h1>
                                <p style="margin-bottom: 2rem" class="display-6 lh-1 exp-text-animate-1">Temukan Destinasi Impian Anda dengan Mudah</p>

                                <a href="#rekomendasi" id="lihat">Jelajahi</a>
                            </div>
                        </div>

                        <div class="card-swiper-wrapper card-swiper-wrapper-2 position-relative">
                            <h6 style="text-align: center">KATEGORI PAKET</h6>
                            <div class="swiper swiper-card-3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card card-style-18">
                                            <div class="card-image-wrapper">
                                                <img src="assets/images/card/hiking.jpg" class="card-img-top" alt="img-top">
                                            </div>

                                            <div class="card-body text-center">
                                               <a href="/category"> <p class="small mb-0 fw-extrabold text-white text-uppercase">hiking</p> </a>
                                            </div>
                                        </div>
                                        <!-- card-style-18 -->
                                    </div>
                                    <!-- swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="card card-style-18">
                                            <div class="card-image-wrapper">
                                                <img src="assets/images/card/desert.jpg" class="card-img-top" alt="img-top">
                                            </div>

                                            <div class="card-body text-center">
                                               <a href="/category"> <p class="small mb-0 fw-extrabold text-white text-uppercase">desert</p> </a>
                                            </div>
                                        </div>
                                        <!-- card-style-18 -->
                                    </div>
                                    <!-- swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="card card-style-18">
                                            <div class="card-image-wrapper">
                                                <img src="assets/images/card/camping.jpg" class="card-img-top" alt="img-top">
                                            </div>

                                            <div class="card-body text-center">
                                               <a href="/category"> <p class="small mb-0 fw-extrabold text-white text-uppercase">camping</p> </a>
                                            </div>
                                        </div>
                                        <!-- card-style-18 -->
                                    </div>
                                    <!-- swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="card card-style-18">
                                            <div class="card-image-wrapper">
                                                <img src="assets/images/card/forest.jpg" class="card-img-top" alt="img-top">
                                            </div>

                                            <div class="card-body text-center">
                                               <a href="/category"> <p class="small mb-0 fw-extrabold text-white text-uppercase">forest</p> </a>
                                            </div>
                                        </div>
                                        <!-- card-style-18 -->
                                    </div>
                                    <!-- swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="card card-style-18">
                                            <div class="card-image-wrapper">
                                                <img src="assets/images/card/beach.jpg" class="card-img-top" alt="img-top">
                                            </div>

                                            <div class="card-body text-center">
                                               <a href="category.htm"> <p class="small mb-0 fw-extrabold text-white text-uppercase">beach</p>  </a>
                                            </div>
                                        </div>
                                        <!-- card-style-18 -->
                                    </div>
                                    <!-- swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="card card-style-18">
                                            <div class="card-image-wrapper">
                                                <img src="assets/images/card/hiking.jpg" class="card-img-top" alt="img-top">
                                            </div>

                                            <div class="card-body text-center">
                                               <a href="/category"> <p class="small mb-0 fw-extrabold text-white text-uppercase">hiking</p> </a>
                                            </div>
                                        </div>
                                        <!-- card-style-18 -->
                                    </div>
                                    <!-- swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="card card-style-18">
                                            <div class="card-image-wrapper">
                                                <img src="assets/images/card/desert.jpg" class="card-img-top" alt="img-top">
                                            </div>

                                            <div class="card-body text-center">
                                               <a href="/category"> <p class="small mb-0 fw-extrabold text-white text-uppercase">desert</p> </a>
                                            </div>
                                        </div>
                                        <!-- card-style-18 -->
                                    </div>
                                    <!-- swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="card card-style-18">
                                            <div class="card-image-wrapper">
                                                <img src="assets/images/card/camping.jpg" class="card-img-top" alt="img-top">
                                            </div>

                                            <div class="card-body text-center">
                                               <a href="/category"> <p class="small mb-0 fw-extrabold text-white text-uppercase">camping</p> </a>
                                            </div>
                                        </div>
                                        <!-- card-style-18 -->
                                    </div>
                                    <!-- swiper-slide -->
                                </div>
                                <!-- swiper-wrapper -->
                            </div>
                            <!-- swiper -->
                        </div>


                    </div>
                    <!-- hero-wrapper -->

                </section>
                <!--Hero Section ======================-->

                <!--feature Section Start ====================== -->
                <section class="feature-section pt-lg-200 pt-150 pb-lg-60 pb-50">
                    <div id="rekomendasi" class="container">
                        <h4 class="section-title mb-lg-60  mb-md-40 md-20 text-center" data-wow-delay="0.4s">Rekomendasi Paket Wisata</h4>
                        <div class="row custom-row-gap  wow fadeInUp" data-wow-delay="0.4s">
                            <div class="col-lg-6">
                                <div class="card-style-wrapper pb-40 pb-lg-0">
                                    <!-- single card -->
                                    <div class="card card-style-14">
                                        <div class="card-image-wrapper">
                                            <a href="/paket"><img src="assets/images/placeholder.svg" data-src="assets/images/blog/explore-image-8.jpg" class="card-img-top" alt="Unleashed"></a>
                                        </div>

                                        <div class="card-body text-center">
                                            <h5 class="fs-4 text-white card-title fw-extrabold"><a href="/article" class="text-white blog-title">Paket Wisata Banyuwangi - Malang</a></h5>
                                            <h6 class=" text-white card-title fw-extrabold"><a href="/article" class="text-white blog-title">3 Hari 2 Malam</a></h6>
                                            <ul class="list-unstyled card-meta-style-3 mb-0 justify-content-center">
                                                <div class="clickHere">
                                                    <a href="/paket">Lihat Paket</a>
                                                </div>
                                                {{-- <li><a class="fw-bold" href="about">Jadi Trip</a></li>
                                                <li>January 25, <span class="dynamic-year"> </span>.</li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- single card -->
                                    <div class="card card-style-14 mb-lg-40">
                                        <div class="card-image-wrapper">
                                            <a href="/article"><img src="assets/images/placeholder.svg" data-src="assets/images/blog/explore-image-13.jpg" class="card-img-top" alt="Serenity"></a>
                                        </div>

                                        <div class="card-body text-center">
                                            <h5 class="fs-4 text-white card-title fw-extrabold"><a href="/article" class="text-white blog-title">Paket Wisata Banyuwangi - Malang</a></h5>
                                            <h6 class=" text-white card-title fw-extrabold"><a href="/article" class="text-white blog-title">3 Hari 2 Malam</a></h6>
                                            <ul class="list-unstyled card-meta-style-3 mb-0 justify-content-center">
                                                <div class="clickHere">
                                                    <a href="/paket">Lihat Paket</a>
                                                </div>
                                                {{-- <li><a class="fw-bold" href="about">Serba Tau</a></li>
                                                <li>January 20, <span class="dynamic-year"> </span>.</li> --}}
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 pb-30 pb-lg-0">
                                <!-- single card -->
                                <div class="card card-style-14">
                                    <div class="card-image-wrapper">
                                        <a href="/article"><img src="assets/images/placeholder.svg" data-src="assets/images/blog/explore-image-10.jpg" class="card-img-top" alt="Trail"></a>
                                    </div>

                                    <div class="card-body text-center">
                                        <h5 class="fs-2 text-white card-title fw-extrabold"><a href="/article" class="text-white blog-title">Paket Wisata Banyuwangi - Malang</a></h5>
                                        <h6 class=" text-white card-title fw-extrabold"><a href="/article" class="text-white blog-title">3 Hari 2 Malam</a></h6>
                                        <ul class="list-unstyled card-meta-style-3 mb-0 justify-content-center">
                                            <div class="clickHere">
                                                <a href="/article">Lihat Paket</a>
                                            </div>
                                            {{-- <li><a class="fw-bold" href="about">Serba Tau</a></li>
                                            <li>January 12, <span class="dynamic-year"> </span>.</li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--feature Section End ====================== -->

                <!--article Section Start ====================== -->
                <section class="section-article  pb-30  pb-lg-100">
                    <div class="container">

                        <div class="row custom-row-gap">
                            <div class="col-lg-4 " >
                                <div class="sticky-elements">
                                    <div class="d-flex flex-column gap-40">

                                        <!-- Iklan 1 -->
                                        <a href="https://www.serbatau.web.id" target="_blank">
                                            <div class="about-me wow fadeInUp" data-wow-delay="0.4s">
                                                <img id="iklan1-1" src="assets/images/iklan/explore-image-15.jpg" alt="">
                                                <img id="iklan1-2" src="assets/images/iklan/explore-image-1.jpg" alt="">
                                            </div>
                                        </a>
                                        <!-- Socials -->
                                        <div class="widget widget-style-2 mb-10 wow fadeInUp" data-wow-delay="0.4s">
                                            <h4 class="fs-1 mb-3 mb-lg-20 text-white text-center">Social Link</h4>
                                            <p class="mb-20 mb-lg-30 text-white text-center">Follow Me On Social Media</p>

                                            <div class="social-icons d-flex align-items-center justify-content-center flex-wrap gap-20">
                                                <a href="https://www.facebook.com">
                                                    <span class="">
                                                        <svg width="10" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.13046 2.63679V0.036944C9.13046 0.036944 6.47179 0.0117188 6.29118 0.0117188C5.08995 0.0117188 3.36232 1.37817 3.36232 2.92941C3.36232 4.67665 3.36232 5.71267 3.36232 5.71267H0.873047V8.66395H3.32872V15.9876H6.2352V8.63036H8.80428L9.13046 5.74627H6.2688C6.2688 5.74627 6.2688 3.97383 6.2688 3.62803C6.2688 3.11981 6.65242 2.62141 7.22643 2.62141C7.60864 2.62141 9.13046 2.63679 9.13046 2.63679Z"></path>
                                                        </svg>
                                                    </span>
                                                </a>

                                                <a href="https://www.instagram.com">
                                                    <span class="">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.0524 15.9895H4.94685C2.22518 15.9895 0.0117188 13.776 0.0117188 11.0544V4.9488C0.0117188 2.22713 2.22518 0.0136719 4.94685 0.0136719H11.0524C13.7741 0.0136719 15.9875 2.22713 15.9875 4.9488V11.0544C15.9889 13.776 13.7741 15.9895 11.0524 15.9895ZM4.94685 1.79451C3.208 1.79451 1.79256 3.20996 1.79256 4.9488V11.0544C1.79256 12.7932 3.208 14.2087 4.94685 14.2087H11.0524C12.7912 14.2087 14.2067 12.7932 14.2067 11.0544V4.9488C14.2067 3.20996 12.7912 1.79451 11.0524 1.79451H4.94685Z"></path>
                                                            <path d="M8.00046 12.0849C5.7492 12.0849 3.91797 10.2537 3.91797 8.00242C3.91797 5.75116 5.7492 3.91992 8.00046 3.91992C10.2517 3.91992 12.083 5.75116 12.083 8.00242C12.083 10.2537 10.2517 12.0849 8.00046 12.0849ZM8.00046 5.52156C6.63263 5.52156 5.5196 6.63458 5.5196 8.00242C5.5196 9.37025 6.63263 10.4833 8.00046 10.4833C9.3683 10.4833 10.4813 9.37025 10.4813 8.00242C10.4813 6.63458 9.3683 5.52156 8.00046 5.52156Z"></path>
                                                            <path d="M12.982 3.68044C12.982 4.06125 12.6726 4.37069 12.2918 4.37069C11.911 4.37069 11.6016 4.06125 11.6016 3.68044C11.6016 3.29963 11.911 2.99023 12.2918 2.99023C12.6726 2.99023 12.982 3.29823 12.982 3.68044Z"></path>
                                                        </svg>
                                                    </span>
                                                </a>

                                                <a href="https://www.youtube.com">
                                                    <span class="">
                                                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4105 0.0820312H3.591C1.89275 0.0820312 0.503906 1.47084 0.503906 3.16909V8.83366C0.503906 10.5319 1.89275 11.9207 3.591 11.9207H14.4105C16.1087 11.9207 17.4975 10.5319 17.4975 8.83366V3.16909C17.4975 1.47084 16.1087 0.0820312 14.4105 0.0820312ZM9.47816 7.67723L6.84188 9.30826V6.04617V2.78408L9.47816 4.41514L12.1144 6.04617L9.47816 7.67723Z"></path>
                                                        </svg>
                                                    </span>
                                                </a>

                                                <a href="https://twitter.com">
                                                    <span class="">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M15.8092 15.98H11.1569L6.89801 9.78339L1.56807 15.98H0.19043L6.28619 8.89157L0.19043 0.0195312H4.84276L8.87486 5.88989L13.9234 0.0195312H15.301L9.48808 6.77751L15.8092 15.98ZM11.8079 14.9929H13.9234L4.18054 1.05696H2.06508L11.8079 14.9929Z"></path>
                                                        </svg>
                                                    </span>
                                                </a>

                                                <a href="https://www.pinterest.com">
                                                    <span class="">
                                                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.21932 8.5049C4.21932 8.5049 3.5417 6.42445 4.33972 5.28762C5.13774 4.15079 5.81536 4.0052 6.68619 4.22361C7.55701 4.44201 7.77542 5.57882 7.58081 6.54625C7.38761 7.51367 6.8794 9.23153 6.8556 9.49753C6.8318 9.76354 6.7828 10.5378 7.53322 10.8528C8.28364 11.1678 9.49327 10.78 10.1219 9.49753C10.7505 8.2151 10.9927 6.49724 10.8961 5.84483C10.7995 5.19101 10.7029 3.57118 8.76664 2.84456C6.83039 2.11794 5.29595 2.83617 4.92074 3.06718C4.36073 3.41159 3.30089 4.1956 2.86688 5.23583C2.59668 5.88405 2.49729 6.63306 2.56449 7.18467C2.64009 7.80629 2.9607 8.45591 3.2267 8.73452C3.49271 9.01313 3.3961 9.30292 3.3597 9.52132C3.3233 9.73973 3.2421 10.3445 3.0335 10.57C2.82349 10.7954 2.37967 10.8247 2.20187 10.7365C2.02406 10.6483 1.18826 10.2116 0.695443 9.35893C0.18163 8.46711 -0.0367782 7.08387 0.325831 5.29462C0.688441 3.50398 2.18787 1.89954 3.78251 1.10292C5.36875 0.310501 7.28401 -0.0871181 9.07466 0.429495C10.8653 0.946109 12.4445 1.92612 13.3154 3.81337C14.1862 5.70062 13.8236 8.14369 13.412 9.28192C13.0004 10.4188 12.2583 11.718 10.8555 12.5076C9.45266 13.2986 8.22623 13.2818 7.82302 13.1852C7.41981 13.0886 6.48459 12.7988 6.06458 12.3298C6.06458 12.3298 5.46816 14.6525 5.22596 15.2811C4.98375 15.9097 4.56934 16.9387 4.20533 17.3251C3.84272 17.7115 3.67332 17.846 3.33451 17.797C2.9957 17.748 2.8025 17.4455 2.7423 16.5383C2.68209 15.6311 3.12869 13.0228 3.3065 12.264C3.4857 11.5052 4.13112 8.86051 4.21932 8.5049Z"></path>
                                                        </svg>
                                                    </span>
                                                </a>

                                                <a href="https://www.linkedin.com">
                                                    <span class="">
                                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.10708 6.41797H1.4502V16.6369H5.10708V6.41797Z"></path>
                                                            <path d="M6.99243 6.41898H9.8149V7.83861C9.8149 7.83861 10.2489 6.40637 12.8586 6.40637C15.0118 6.40637 16.5533 7.24499 16.5533 9.54945C16.5533 10.8235 16.5533 16.6379 16.5533 16.6379H13.539C13.539 16.6379 13.5558 10.6765 13.5726 10.4931C13.5894 10.3097 13.406 8.80606 11.8701 8.80606C10.3343 8.80606 9.8499 9.90786 9.8499 10.7423C9.8499 11.5767 9.8499 16.6365 9.8499 16.6365H6.99523V6.41898H6.99243Z"></path>
                                                            <path d="M4.56523 4.4804C5.27928 3.76636 5.27928 2.60864 4.56523 1.8946C3.85119 1.18055 2.69347 1.18055 1.97943 1.8946C1.26538 2.60864 1.26538 3.76636 1.97943 4.4804C2.69347 5.19445 3.85119 5.19445 4.56523 4.4804Z"></path>
                                                        </svg>
                                                    </span>
                                                </a>

                                            </div>
                                            <!-- social-icons -->
                                        </div>

                                        <div class="add-iamge d-none d-xl-block ml-auto wow fadeInUp" data-wow-delay="0.4s">
                                            <a href="#"><img src="assets/images/add.png" class="img-fluid" alt="add-image"></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-8">
                                <h2 class="section-title mb-lg-60  mb-md-40 md-20">Postingan Terbaru</h2>
                                <div class="row custom-row-gap">

                                @foreach($datas as $data)
                                    <div class="col-lg-12 col-xl-6">
                                        <!-- single card -->
                                        <div class="card card-style-2 card-border mb-lg-40 mb-20  wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="card-image-wrapper">
                                                <a href="/article"><img src="assets/images/placeholder.svg" data-src="assets/images/blog/{{ $data->thumbnail }}" class="card-img-top" alt="Discovering"></a>
                                            </div>

                                            <div class="card-body">
                                                <div class="card-header text-uppercase">
                                                    <a href="/category">{{ $data->kategori->name }}</a>
                                                </div>
                                                <h6 class="fs-4 card-title"><a href="/article" class="blog-title">{{ $data->title }}</a></h6>
                                                <ul class="list-unstyled card-meta  align-items-center">
                                                    <li>By <a href="author-1" class="blog-author fw-bold">Jadi Trip</a></li>
                                                    <li>Juni 1, <span class="dynamic-year"> </span>.</li>
                                                </ul>

                                                <p class="card-text small">{{$data->content}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                    {{-- <div class="col-lg-12 col-xl-6" >
                                        <!-- single card -->
                                        <div class="card card-style-2 card-border mb-lg-40 mb-20  wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="card-image-wrapper">
                                                <a href="/article"><img src="assets/images/placeholder.svg" data-src="assets/images/blog/explore-image-23.jpg" class="card-img-top" alt="Hiking"></a>
                                            </div>

                                            <div class="card-body">
                                                <div class="card-header text-uppercase">
                                                    <a href="/category">Hiking</a>
                                                </div>
                                                <h5 class="fs-4 card-title"><a href="/article" class="blog-title">Wanderlust Chronicles: Trails of Discovery</a></h5>

                                                <ul class="list-unstyled card-meta  align-items-center">
                                                    <li>By <a href="author-1" class="blog-author fw-bold">Mike Aiden</a></li>
                                                    <li>January 25, <span class="dynamic-year"> </span>.</li>
                                                </ul>

                                                <p class="card-text small">Trails of Discovery" invites adventurers on an exhilarating journey,hidden wonders and untold stories. Immerse yourself in captivating landscapes...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-xl-6" >
                                        <!-- single card -->
                                        <div class="card card-style-2 card-border mb-lg-40 mb-20  wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="card-image-wrapper">
                                                <a href="/article"><img src="assets/images/placeholder.svg" data-src="assets/images/blog/explore-image-24.jpg" class="card-img-top" alt="img-top"></a>
                                            </div>

                                            <div class="card-body">
                                                <div class="card-header text-uppercase">
                                                    <a href="/category">Beach</a>
                                                </div>
                                                <h5 class="fs-4 card-title"><a href="/article" class="blog-title">Seaside Serenity: Beachside Beauty Uncovered</a></h5>

                                                <ul class="list-unstyled card-meta  align-items-center">
                                                    <li>By <a href="author-1" class="blog-author fw-bold">Mike Aiden</a></li>
                                                    <li>January 20, <span class="dynamic-year"> </span>.</li>
                                                </ul>

                                                <p class="card-text small">Beachside Beauty Uncovered invites you to a tranquil escape, where the rhythmic waves meet the golden shore. Discover serenity in the embrace...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-xl-6" >
                                        <!-- single card -->
                                        <div class="card card-style-2 card-border mb-lg-40 mb-20  wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="card-image-wrapper">
                                                <a href="/article"><img src="assets/images/placeholder.svg" data-src="assets/images/blog/explore-image-19.jpg" class="card-img-top" alt="Breakfast"></a>
                                            </div>

                                            <div class="card-body">
                                                <div class="card-header text-uppercase">
                                                    <a href="/category">Forest</a>
                                                </div>
                                                <h5 class="fs-4 card-title"><a href="/article" class="blog-title">Forest Dreams: Escaping into Nature's Embrace</a></h5>

                                                 <ul class="list-unstyled card-meta  align-items-center">
                                                    <li>By <a href="author-3" class="blog-author">Mike Aiden</a></li>
                                                    <li>January 17, <span class="dynamic-year"> </span>.</li>
                                                </ul>

                                                <p class="card-text small">Adventures in Every Step" is an exhilarating journey through the wilderness, weaving captivating stories of exploration and self-discovery. With each...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-xl-6" >
                                        <!-- single card -->
                                        <div class="card card-style-2 card-border mb-lg-40 mb-20  wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="card-image-wrapper">
                                                <a href="/article"><img src="assets/images/placeholder.svg" data-src="assets/images/blog/explore-image-25.jpg" class="card-img-top" alt="secret"></a>
                                            </div>

                                            <div class="card-body">
                                                <div class="card-header text-uppercase">
                                                    <a href="/category">Lake</a>
                                                </div>
                                                <h5 class="fs-4 card-title"><a href="/article" class="blog-title">Secret Lakes: Hidden Gems of Natural Beauty</a></h5>

                                                 <ul class="list-unstyled card-meta  align-items-center">
                                                    <li>By <a href="author-1" class="blog-author fw-bold">Mike Aiden</a></li>
                                                    <li>January 15, <span class="dynamic-year"> </span>.</li>
                                                </ul>

                                                <p class="card-text small">Secret Lakes, hidden gems of natural beauty, enchant with secluded tranquility and pristine landscapes. These concealed wonders offer a retreat from...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-xl-6" >
                                        <!-- single card -->
                                        <div class="card card-style-2 card-border mb-lg-40 mb-20  wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="card-image-wrapper">
                                                <a href="/article"><img src="assets/images/placeholder.svg" data-src="assets/images/blog/explore-image-26.jpg" class="card-img-top" alt="every"></a>
                                            </div>

                                            <div class="card-body">
                                                <div class="card-header text-uppercase">
                                                    <a href="/category">Hiking</a>
                                                </div>
                                                <h5 class="fs-4 card-title"><a href="/article" class="blog-title">Trail Tales: Adventures in Every Step</a></h5>

                                                 <ul class="list-unstyled card-meta  align-items-center">
                                                    <li>By <a href="author-1" class="blog-author fw-bold">Mike Aiden</a></li>
                                                    <li>January 13, <span class="dynamic-year"> </span>.</li>
                                                </ul>

                                                <p class="card-text small">Adventures in Every Step" is an exhilarating journey through the wilderness, weaving captivating stories of exploration and self-discovery. With each...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-xl-6" >
                                        <!-- single card -->
                                        <div class="card card-style-2 card-border mb-lg-40 mb-20  wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="card-image-wrapper">
                                                <a href="/article"><img src="assets/images/placeholder.svg" data-src="assets/images/blog/explore-image-27.jpg" class="card-img-top" alt="img-top"></a>
                                            </div>

                                            <div class="card-body">
                                                <div class="card-header text-uppercase">
                                                    <a href="/category">City</a>
                                                </div>
                                                <h5 class="fs-4 card-title"><a href="/article" class="blog-title">Metro Memoirs: Capturing City Stories Daily</a></h5>

                                                 <ul class="list-unstyled card-meta  align-items-center">
                                                    <li>By <a href="author-1" class="blog-author fw-bold">Mike Aiden</a></li>
                                                    <li>January 11, <span class="dynamic-year"> </span>.</li>
                                                </ul>

                                                <p class="card-text small">Capturing City Stories Daily" is a captivating exploration of urban life, weaving daily narratives that illuminate the vibrant tapestry of city existence...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-xl-6" >
                                        <!-- single card -->
                                        <div class="card card-style-2 card-border mb-lg-40 mb-20  wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="card-image-wrapper">
                                                <a href="/article"><img src="assets/images/placeholder.svg" data-src="assets/images/blog/explore-image-18.jpg" class="card-img-top" alt="Marvels"></a>
                                            </div>

                                            <div class="card-body">
                                                <div class="card-header text-uppercase">
                                                    <a href="/category">Beach</a>
                                                </div>
                                                <h5 class="fs-4 card-title"><a href="/article" class="blog-title">Serene Waters: Exploring Lakeside Marvels</a></h5>

                                                 <ul class="list-unstyled card-meta  align-items-center">
                                                    <li>By <a href="author-1" class="blog-author fw-bold">Mike Aiden</a></li>
                                                    <li>January 05, <span class="dynamic-year"> </span>.</li>
                                                </ul>

                                                <p class="card-text small">Escaping into Nature's Embrace invite readers to immerse themselve in the world of lush landscapes and soothing whispers of the woods, fostering...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-xl-6" >
                                        <!-- single card -->
                                        <div class="card card-style-2 card-border mb-lg-40 mb-20  wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="card-image-wrapper">
                                                <a href="/article"><img src="assets/images/placeholder.svg" data-src="assets/images/blog/explore-image-29.jpg" class="card-img-top" alt="Wonders"></a>
                                            </div>

                                            <div class="card-body">
                                                <div class="card-header text-uppercase">
                                                    <a href="/category">Lake</a>
                                                </div>
                                                <h5 class="fs-4 card-title"><a href="/article" class="blog-title">Lakeside Wonders: Nature's Peaceful Miracles</a></h5>

                                                 <ul class="list-unstyled card-meta  align-items-center">
                                                    <li>By <a href="author-3" class="blog-author">Mike Aiden</a></li>
                                                    <li>January 02, <span class="dynamic-year"> </span>.</li>
                                                </ul>

                                                <p class="card-text small">Nature Peaceful Miracle captivate with serene reflection, gentle ripples, and harmonious symphony. A tranquil haven where beauty meets tranquility...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-xl-6" >
                                        <!-- single card -->
                                        <div class="card card-style-2 card-border mb-lg-40 mb-20  wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="card-image-wrapper">
                                                <a href="/article"><img src="assets/images/placeholder.svg" data-src="assets/images/blog/explore-image-30.jpg" class="card-img-top" alt="Sanctuary"></a>
                                            </div>

                                            <div class="card-body">
                                                <div class="card-header text-uppercase">
                                                    <a href="/category">Forest</a>
                                                </div>
                                                <h5 class="fs-4 card-title"><a href="/article" class="blog-title">The Mystic Woods: Nature's Healing Sanctuary</a></h5>

                                                 <ul class="list-unstyled card-meta  align-items-center">
                                                    <li>By <a href="author-1" class="blog-author fw-bold">Mike Aiden</a></li>
                                                    <li>February 12, <span class="dynamic-year"> </span>.</li>
                                                </ul>

                                                <p class="card-text small">Nature's Healing Sanctuary invite weary souls to immerse in the enchanting embrace  ancient tree, where of the wind and rustling leaves orchestrate...</p>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <!-- BUtton -->
                                    <div class="load-more-btn pt-lg-20  pt-10 d-flex justify-content-end  wow fadeInUp" data-wow-delay="0.4s">
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
                <section class="section-instragram py-lg-100 py-40">
                    <div class="container">
                        <div class="section-instragram-header mb-lg-60  mb-md-40 md-20  wow fadeInUp" data-wow-delay="0.4s">
                            <span class="d-flex justify-content-center mb-10 instagram-icon">
                                <i class="fa-brands fa-instagram"></i>
                            </span>
                            <h2 class="section-title text-center">Instagram</h2>
                            <p class="text-center">Follow Me on Instagram</p>
                        </div>

                        <div class=" swiper instagram-slider   wow fadeInUp" data-wow-delay="0.4s">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="instagram-image-wrapper image-hover">
                                        <img src="assets/images/placeholder.svg" data-src="assets/images/instagram/instagram-1.png" alt="instagram-image">

                                        <span class="d-flex justify-content-center mb-10"> <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.6435 40H12.3565C5.54201 40 0 34.458 0 27.6435V12.3565C0 5.54202 5.54201 0 12.3565 0H27.6435C34.4579 0 40 5.54202 40 12.3565V27.6435C40.0035 34.458 34.4579 40 27.6435 40ZM12.3565 4.45884C8.0028 4.45884 4.45884 8.0028 4.45884 12.3565V27.6435C4.45884 31.9972 8.0028 35.5412 12.3565 35.5412H27.6435C31.9972 35.5412 35.5411 31.9972 35.5411 27.6435V12.3565C35.5411 8.0028 31.9972 4.45884 27.6435 4.45884H12.3565Z" fill="#363636"/>
                                            <path d="M20.0029 30.2168C14.3663 30.2168 9.78125 25.6318 9.78125 19.9951C9.78125 14.3585 14.3663 9.77344 20.0029 9.77344C25.6396 9.77344 30.2246 14.3585 30.2246 19.9951C30.2246 25.6318 25.6396 30.2168 20.0029 30.2168ZM20.0029 13.7836C16.5782 13.7836 13.7914 16.5704 13.7914 19.9951C13.7914 23.4199 16.5782 26.2066 20.0029 26.2066C23.4277 26.2066 26.2145 23.4199 26.2145 19.9951C26.2145 16.5704 23.4277 13.7836 20.0029 13.7836Z" fill="#363636"/>
                                            <path d="M32.4758 9.18126C32.4758 10.1347 31.7011 10.9095 30.7477 10.9095C29.7942 10.9095 29.0195 10.1347 29.0195 9.18126C29.0195 8.22779 29.7942 7.45312 30.7477 7.45312C31.7011 7.45312 32.4758 8.22429 32.4758 9.18126Z" fill="#fff"/>
                                            </svg>
                                        </span>


                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="instagram-image-wrapper image-hover">
                                        <img src="assets/images/placeholder.svg" data-src="assets/images/instagram/instagram-2.png" alt="instagram-image">

                                        <span class="d-flex justify-content-center mb-10"> <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.6435 40H12.3565C5.54201 40 0 34.458 0 27.6435V12.3565C0 5.54202 5.54201 0 12.3565 0H27.6435C34.4579 0 40 5.54202 40 12.3565V27.6435C40.0035 34.458 34.4579 40 27.6435 40ZM12.3565 4.45884C8.0028 4.45884 4.45884 8.0028 4.45884 12.3565V27.6435C4.45884 31.9972 8.0028 35.5412 12.3565 35.5412H27.6435C31.9972 35.5412 35.5411 31.9972 35.5411 27.6435V12.3565C35.5411 8.0028 31.9972 4.45884 27.6435 4.45884H12.3565Z" fill="#363636"/>
                                            <path d="M20.0029 30.2168C14.3663 30.2168 9.78125 25.6318 9.78125 19.9951C9.78125 14.3585 14.3663 9.77344 20.0029 9.77344C25.6396 9.77344 30.2246 14.3585 30.2246 19.9951C30.2246 25.6318 25.6396 30.2168 20.0029 30.2168ZM20.0029 13.7836C16.5782 13.7836 13.7914 16.5704 13.7914 19.9951C13.7914 23.4199 16.5782 26.2066 20.0029 26.2066C23.4277 26.2066 26.2145 23.4199 26.2145 19.9951C26.2145 16.5704 23.4277 13.7836 20.0029 13.7836Z" fill="#363636"/>
                                            <path d="M32.4758 9.18126C32.4758 10.1347 31.7011 10.9095 30.7477 10.9095C29.7942 10.9095 29.0195 10.1347 29.0195 9.18126C29.0195 8.22779 29.7942 7.45312 30.7477 7.45312C31.7011 7.45312 32.4758 8.22429 32.4758 9.18126Z" fill="#fff"/>
                                            </svg>
                                        </span>


                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="instagram-image-wrapper image-hover">
                                        <img src="assets/images/placeholder.svg" data-src="assets/images/instagram/instagram-3.png" alt="instagram-image">

                                        <span class="d-flex justify-content-center mb-10"> <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.6435 40H12.3565C5.54201 40 0 34.458 0 27.6435V12.3565C0 5.54202 5.54201 0 12.3565 0H27.6435C34.4579 0 40 5.54202 40 12.3565V27.6435C40.0035 34.458 34.4579 40 27.6435 40ZM12.3565 4.45884C8.0028 4.45884 4.45884 8.0028 4.45884 12.3565V27.6435C4.45884 31.9972 8.0028 35.5412 12.3565 35.5412H27.6435C31.9972 35.5412 35.5411 31.9972 35.5411 27.6435V12.3565C35.5411 8.0028 31.9972 4.45884 27.6435 4.45884H12.3565Z" fill="#363636"/>
                                            <path d="M20.0029 30.2168C14.3663 30.2168 9.78125 25.6318 9.78125 19.9951C9.78125 14.3585 14.3663 9.77344 20.0029 9.77344C25.6396 9.77344 30.2246 14.3585 30.2246 19.9951C30.2246 25.6318 25.6396 30.2168 20.0029 30.2168ZM20.0029 13.7836C16.5782 13.7836 13.7914 16.5704 13.7914 19.9951C13.7914 23.4199 16.5782 26.2066 20.0029 26.2066C23.4277 26.2066 26.2145 23.4199 26.2145 19.9951C26.2145 16.5704 23.4277 13.7836 20.0029 13.7836Z" fill="#363636"/>
                                            <path d="M32.4758 9.18126C32.4758 10.1347 31.7011 10.9095 30.7477 10.9095C29.7942 10.9095 29.0195 10.1347 29.0195 9.18126C29.0195 8.22779 29.7942 7.45312 30.7477 7.45312C31.7011 7.45312 32.4758 8.22429 32.4758 9.18126Z" fill="#fff"/>
                                            </svg>
                                        </span>


                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="instagram-image-wrapper image-hover">
                                        <img src="assets/images/placeholder.svg" data-src="assets/images/instagram/instagram-4.png" alt="instagram-image">

                                        <span class="d-flex justify-content-center mb-10"> <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.6435 40H12.3565C5.54201 40 0 34.458 0 27.6435V12.3565C0 5.54202 5.54201 0 12.3565 0H27.6435C34.4579 0 40 5.54202 40 12.3565V27.6435C40.0035 34.458 34.4579 40 27.6435 40ZM12.3565 4.45884C8.0028 4.45884 4.45884 8.0028 4.45884 12.3565V27.6435C4.45884 31.9972 8.0028 35.5412 12.3565 35.5412H27.6435C31.9972 35.5412 35.5411 31.9972 35.5411 27.6435V12.3565C35.5411 8.0028 31.9972 4.45884 27.6435 4.45884H12.3565Z" fill="#363636"/>
                                            <path d="M20.0029 30.2168C14.3663 30.2168 9.78125 25.6318 9.78125 19.9951C9.78125 14.3585 14.3663 9.77344 20.0029 9.77344C25.6396 9.77344 30.2246 14.3585 30.2246 19.9951C30.2246 25.6318 25.6396 30.2168 20.0029 30.2168ZM20.0029 13.7836C16.5782 13.7836 13.7914 16.5704 13.7914 19.9951C13.7914 23.4199 16.5782 26.2066 20.0029 26.2066C23.4277 26.2066 26.2145 23.4199 26.2145 19.9951C26.2145 16.5704 23.4277 13.7836 20.0029 13.7836Z" fill="#363636"/>
                                            <path d="M32.4758 9.18126C32.4758 10.1347 31.7011 10.9095 30.7477 10.9095C29.7942 10.9095 29.0195 10.1347 29.0195 9.18126C29.0195 8.22779 29.7942 7.45312 30.7477 7.45312C31.7011 7.45312 32.4758 8.22429 32.4758 9.18126Z" fill="#fff"/>
                                            </svg>
                                        </span>


                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="instagram-image-wrapper image-hover">
                                        <img src="assets/images/placeholder.svg" data-src="assets/images/instagram/instagram-5.png" alt="instagram-image">

                                        <span class="d-flex justify-content-center mb-10"> <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.6435 40H12.3565C5.54201 40 0 34.458 0 27.6435V12.3565C0 5.54202 5.54201 0 12.3565 0H27.6435C34.4579 0 40 5.54202 40 12.3565V27.6435C40.0035 34.458 34.4579 40 27.6435 40ZM12.3565 4.45884C8.0028 4.45884 4.45884 8.0028 4.45884 12.3565V27.6435C4.45884 31.9972 8.0028 35.5412 12.3565 35.5412H27.6435C31.9972 35.5412 35.5411 31.9972 35.5411 27.6435V12.3565C35.5411 8.0028 31.9972 4.45884 27.6435 4.45884H12.3565Z" fill="#363636"/>
                                            <path d="M20.0029 30.2168C14.3663 30.2168 9.78125 25.6318 9.78125 19.9951C9.78125 14.3585 14.3663 9.77344 20.0029 9.77344C25.6396 9.77344 30.2246 14.3585 30.2246 19.9951C30.2246 25.6318 25.6396 30.2168 20.0029 30.2168ZM20.0029 13.7836C16.5782 13.7836 13.7914 16.5704 13.7914 19.9951C13.7914 23.4199 16.5782 26.2066 20.0029 26.2066C23.4277 26.2066 26.2145 23.4199 26.2145 19.9951C26.2145 16.5704 23.4277 13.7836 20.0029 13.7836Z" fill="#363636"/>
                                            <path d="M32.4758 9.18126C32.4758 10.1347 31.7011 10.9095 30.7477 10.9095C29.7942 10.9095 29.0195 10.1347 29.0195 9.18126C29.0195 8.22779 29.7942 7.45312 30.7477 7.45312C31.7011 7.45312 32.4758 8.22429 32.4758 9.18126Z" fill="#fff"/>
                                            </svg>
                                        </span>


                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="instagram-image-wrapper image-hover">
                                        <img src="assets/images/placeholder.svg" data-src="assets/images/instagram/instagram-6.png" alt="instagram-image">

                                        <span class="d-flex justify-content-center mb-10"> <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.6435 40H12.3565C5.54201 40 0 34.458 0 27.6435V12.3565C0 5.54202 5.54201 0 12.3565 0H27.6435C34.4579 0 40 5.54202 40 12.3565V27.6435C40.0035 34.458 34.4579 40 27.6435 40ZM12.3565 4.45884C8.0028 4.45884 4.45884 8.0028 4.45884 12.3565V27.6435C4.45884 31.9972 8.0028 35.5412 12.3565 35.5412H27.6435C31.9972 35.5412 35.5411 31.9972 35.5411 27.6435V12.3565C35.5411 8.0028 31.9972 4.45884 27.6435 4.45884H12.3565Z" fill="#363636"/>
                                            <path d="M20.0029 30.2168C14.3663 30.2168 9.78125 25.6318 9.78125 19.9951C9.78125 14.3585 14.3663 9.77344 20.0029 9.77344C25.6396 9.77344 30.2246 14.3585 30.2246 19.9951C30.2246 25.6318 25.6396 30.2168 20.0029 30.2168ZM20.0029 13.7836C16.5782 13.7836 13.7914 16.5704 13.7914 19.9951C13.7914 23.4199 16.5782 26.2066 20.0029 26.2066C23.4277 26.2066 26.2145 23.4199 26.2145 19.9951C26.2145 16.5704 23.4277 13.7836 20.0029 13.7836Z" fill="#363636"/>
                                            <path d="M32.4758 9.18126C32.4758 10.1347 31.7011 10.9095 30.7477 10.9095C29.7942 10.9095 29.0195 10.1347 29.0195 9.18126C29.0195 8.22779 29.7942 7.45312 30.7477 7.45312C31.7011 7.45312 32.4758 8.22429 32.4758 9.18126Z" fill="#fff"/>
                                            </svg>
                                        </span>


                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="instagram-image-wrapper image-hover">
                                        <img src="assets/images/placeholder.svg" data-src="assets/images/instagram/explore-image-16.jpg" alt="instagram-image">

                                        <span class="d-flex justify-content-center mb-10"> <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.6435 40H12.3565C5.54201 40 0 34.458 0 27.6435V12.3565C0 5.54202 5.54201 0 12.3565 0H27.6435C34.4579 0 40 5.54202 40 12.3565V27.6435C40.0035 34.458 34.4579 40 27.6435 40ZM12.3565 4.45884C8.0028 4.45884 4.45884 8.0028 4.45884 12.3565V27.6435C4.45884 31.9972 8.0028 35.5412 12.3565 35.5412H27.6435C31.9972 35.5412 35.5411 31.9972 35.5411 27.6435V12.3565C35.5411 8.0028 31.9972 4.45884 27.6435 4.45884H12.3565Z" fill="#363636"/>
                                            <path d="M20.0029 30.2168C14.3663 30.2168 9.78125 25.6318 9.78125 19.9951C9.78125 14.3585 14.3663 9.77344 20.0029 9.77344C25.6396 9.77344 30.2246 14.3585 30.2246 19.9951C30.2246 25.6318 25.6396 30.2168 20.0029 30.2168ZM20.0029 13.7836C16.5782 13.7836 13.7914 16.5704 13.7914 19.9951C13.7914 23.4199 16.5782 26.2066 20.0029 26.2066C23.4277 26.2066 26.2145 23.4199 26.2145 19.9951C26.2145 16.5704 23.4277 13.7836 20.0029 13.7836Z" fill="#363636"/>
                                            <path d="M32.4758 9.18126C32.4758 10.1347 31.7011 10.9095 30.7477 10.9095C29.7942 10.9095 29.0195 10.1347 29.0195 9.18126C29.0195 8.22779 29.7942 7.45312 30.7477 7.45312C31.7011 7.45312 32.4758 8.22429 32.4758 9.18126Z" fill="#fff"/>
                                            </svg>
                                        </span>

                                    </div>
                                </div>


                            </div>

                            <span class="text-white follow-txt">Follow Me</span>
                        </div>

                    </div>
                </section>
                <!--Instragram Section End ====================== -->

            </div>
            <!--Footer Section ======================-->
            <footer class="section-footer footer-1 parallax">
                <div class="footer-wrapper position-relative py-40 py-lg-60 py-xl-100">
                    <div class="container">
                        <div class="footer-top-contents pb-lg-30">
                            <div class="row gy-30 gy-lg-0">

                                <div class="col-lg-4 order-lg-0">
                                    <div class="d-flex gap-40 justify-content-between">
                                        <div class="footer-contacts">
                                            <div class="mb-3 mb-md-30">
                                                <a class="navbar-brand" href="/" aria-label="nav-brands">
                                                    <img src="assets/images/placeholder.svg" data-src="assets/images/logo-white.png" class="logo-light img-fluid" alt="footer-logo">
                                                </a>
                                            </div>
                                            <p class="lead mb-0 mb-md-10"><a href="tel:176355471297">+1 (7635) 547-12-97</a></p>
                                            <p class="lead mb-0"><a href="mailto:support@lift.agency">support@lift.agency</a></p>
                                        </div>
                                        <!-- footer-contacts -->

                                        <div class="d-block d-lg-none">
                                            <div class="footer-subscription d-flex flex-column gap-3 gap-md-30 ms-lg-auto">
                                                <h6 class="text-white mb-0">Subscribe</h6>
                                                <form >
                                                    <div class="contact-form position-relative footer-form">

                                                        <div>
                                                            <input type="email" class="form-control" name="email" placeholder="latest updates & news" required>
                                                        </div>
                                                        <div class="btn-submit">
                                                            <button type="submit" class="btn btn-primary">
                                                                <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.06402 13L14.6166 7.42846C15.1278 6.91519 15.1278 6.08324 14.6166 5.57154L9.06402 0L7.21304 1.8581L10.531 5.18669H0L0 7.81292H10.531L7.21304 11.1427L9.06402 13Z"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col-4 -->

                                <div class="col-lg-3 order-lg-2 mt-10">
                                    <div class="d-none d-lg-block">
                                        <div class="footer-subscription d-flex flex-column gap-3 gap-md-30 ms-lg-auto">
                                            <h6 class="text-white mb-0">Subscribe</h6>
                                            <form id="contactForm-2" class="contact-form footer-form position-relative">
                                                <div>
                                                    <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="latest updates & news" required>
                                                </div>
                                                <div class="btn-submit">
                                                    <button type="submit" class="btn btn-primary">
                                                        <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.06402 13L14.6166 7.42846C15.1278 6.91519 15.1278 6.08324 14.6166 5.57154L9.06402 0L7.21304 1.8581L10.531 5.18669H0L0 7.81292H10.531L7.21304 11.1427L9.06402 13Z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- col-3 -->

                                <div class="col-lg-5 order-lg-1">
                                    <div class="footer-links">
                                        <h6 class="text-white mb-3 mb-md-30">Quick Links</h6>

                                        <div class="d-flex justify-content-between">
                                            <ul class="footer-links-menu">
                                                <li>
                                                    <a href="/">Home</a>
                                                </li>
                                                <li>
                                                    <a href="about">About</a>
                                                </li>
                                                <li>
                                                    <a href="blog">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="/category">Category</a>
                                                </li>
                                                <!-- <li>
                                                    <a href="author-1">Author</a>
                                                </li> -->
                                                <li>
                                                    <a href="contact">Contact</a>
                                                </li>
                                            </ul>


                                        </div>


                                    </div>

                                    <!-- footer-links -->
                                </div>
                                <!-- col-5 -->

                            </div>
                            <!-- row -->
                        </div>
                        <!-- footer-top-contents -->

                        <div class="footer-bottom-contents mt-lg-30 text-white">
                            <div class="footer-bottom-contents-area">
                                <div class="social-icons social-icons-style-2 d-flex align-items-center gap-20">
                                    <a href="https://www.facebook.com">
                                        <span class="text-white">
                                            <svg width="10" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.13046 2.63679V0.036944C9.13046 0.036944 6.47179 0.0117188 6.29118 0.0117188C5.08995 0.0117188 3.36232 1.37817 3.36232 2.92941C3.36232 4.67665 3.36232 5.71267 3.36232 5.71267H0.873047V8.66395H3.32872V15.9876H6.2352V8.63036H8.80428L9.13046 5.74627H6.2688C6.2688 5.74627 6.2688 3.97383 6.2688 3.62803C6.2688 3.11981 6.65242 2.62141 7.22643 2.62141C7.60864 2.62141 9.13046 2.63679 9.13046 2.63679Z"/>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="https://www.instagram.com">
                                        <span class="text-white">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.0524 15.9895H4.94685C2.22518 15.9895 0.0117188 13.776 0.0117188 11.0544V4.9488C0.0117188 2.22713 2.22518 0.0136719 4.94685 0.0136719H11.0524C13.7741 0.0136719 15.9875 2.22713 15.9875 4.9488V11.0544C15.9889 13.776 13.7741 15.9895 11.0524 15.9895ZM4.94685 1.79451C3.208 1.79451 1.79256 3.20996 1.79256 4.9488V11.0544C1.79256 12.7932 3.208 14.2087 4.94685 14.2087H11.0524C12.7912 14.2087 14.2067 12.7932 14.2067 11.0544V4.9488C14.2067 3.20996 12.7912 1.79451 11.0524 1.79451H4.94685Z"/>
                                                <path d="M8.00046 12.0849C5.7492 12.0849 3.91797 10.2537 3.91797 8.00242C3.91797 5.75116 5.7492 3.91992 8.00046 3.91992C10.2517 3.91992 12.083 5.75116 12.083 8.00242C12.083 10.2537 10.2517 12.0849 8.00046 12.0849ZM8.00046 5.52156C6.63263 5.52156 5.5196 6.63458 5.5196 8.00242C5.5196 9.37025 6.63263 10.4833 8.00046 10.4833C9.3683 10.4833 10.4813 9.37025 10.4813 8.00242C10.4813 6.63458 9.3683 5.52156 8.00046 5.52156Z"/>
                                                <path d="M12.982 3.68044C12.982 4.06125 12.6726 4.37069 12.2918 4.37069C11.911 4.37069 11.6016 4.06125 11.6016 3.68044C11.6016 3.29963 11.911 2.99023 12.2918 2.99023C12.6726 2.99023 12.982 3.29823 12.982 3.68044Z"/>
                                            </svg>
                                        </span>
                                    </a>

                                    <a href="https://twitter.com">
                                        <span class="text-white">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.8092 15.98H11.1569L6.89801 9.78339L1.56807 15.98H0.19043L6.28619 8.89157L0.19043 0.0195312H4.84276L8.87486 5.88989L13.9234 0.0195312H15.301L9.48808 6.77751L15.8092 15.98ZM11.8079 14.9929H13.9234L4.18054 1.05696H2.06508L11.8079 14.9929Z"/>
                                            </svg>
                                        </span>
                                    </a>

                                    <a href="https://www.pinterest.com">
                                        <span class="text-white">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.21932 8.5049C4.21932 8.5049 3.5417 6.42445 4.33972 5.28762C5.13774 4.15079 5.81536 4.0052 6.68619 4.22361C7.55701 4.44201 7.77542 5.57882 7.58081 6.54625C7.38761 7.51367 6.8794 9.23153 6.8556 9.49753C6.8318 9.76354 6.7828 10.5378 7.53322 10.8528C8.28364 11.1678 9.49327 10.78 10.1219 9.49753C10.7505 8.2151 10.9927 6.49724 10.8961 5.84483C10.7995 5.19101 10.7029 3.57118 8.76664 2.84456C6.83039 2.11794 5.29595 2.83617 4.92074 3.06718C4.36073 3.41159 3.30089 4.1956 2.86688 5.23583C2.59668 5.88405 2.49729 6.63306 2.56449 7.18467C2.64009 7.80629 2.9607 8.45591 3.2267 8.73452C3.49271 9.01313 3.3961 9.30292 3.3597 9.52132C3.3233 9.73973 3.2421 10.3445 3.0335 10.57C2.82349 10.7954 2.37967 10.8247 2.20187 10.7365C2.02406 10.6483 1.18826 10.2116 0.695443 9.35893C0.18163 8.46711 -0.0367782 7.08387 0.325831 5.29462C0.688441 3.50398 2.18787 1.89954 3.78251 1.10292C5.36875 0.310501 7.28401 -0.0871181 9.07466 0.429495C10.8653 0.946109 12.4445 1.92612 13.3154 3.81337C14.1862 5.70062 13.8236 8.14369 13.412 9.28192C13.0004 10.4188 12.2583 11.718 10.8555 12.5076C9.45266 13.2986 8.22623 13.2818 7.82302 13.1852C7.41981 13.0886 6.48459 12.7988 6.06458 12.3298C6.06458 12.3298 5.46816 14.6525 5.22596 15.2811C4.98375 15.9097 4.56934 16.9387 4.20533 17.3251C3.84272 17.7115 3.67332 17.846 3.33451 17.797C2.9957 17.748 2.8025 17.4455 2.7423 16.5383C2.68209 15.6311 3.12869 13.0228 3.3065 12.264C3.4857 11.5052 4.13112 8.86051 4.21932 8.5049Z"/>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                                <!-- social-icons -->



                                    <div class="d-flex gap-10">
                                        <p class="mb-0 lead">A product of</p>
                                        <a class="footer-logo" href="/" aria-label="nav-brands">
                                            <img src="assets/images/placeholder.svg" data-src="assets/images/logo-white.png" class="logo-light img-fluid" alt="footer-logo-two">
                                        </a>
                                    </div>

                                    <p class="mb-0 lead">&copy; <span class="dynamic-year"> </span>. Jadi Trip. All rights reserved</p>

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



	</body>

</html>

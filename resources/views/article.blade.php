<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Jadi Trip is your ultimate destination for travel inspiration, tips, and guides. Discover hidden gems, plan your next adventure, and make the most out of your travels with our expertly curated content. Join our community of wanderers and explore the world with Jadi Trip.">
    <meta name="keywords"
        content="blog, blogging, blogger, articles, posts, content, writing, writers, blogosphere, online journal, web log, topics, ideas, tips, advice">
    <meta name="author" content="themeperch">
    <title>Jadi Trip</title>
    <link rel="icon" href="{{ asset('assets/logo/logo.ico') }}" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,700;1,900&family=Lovers+Quarrel&family=Meddon&display=swap"
        rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/new.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>


<body>
    <div class="page">
        <!-- Header ======================-->
        <header class="section-header header-1 sticky-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-xl hover-menu">
                    <div class="d-flex w-100 justify-content-between align-items-center">
                        <a class="navbar-brand" href="/" aria-label="nav-brands">
                            <img src="{{ asset('assets/logo/Jadi Trip Bhitam.png') }}" style="height: 70px"
                                class="logo-light img-fluid" alt="logo-white">
                            {{-- <img src="assets/logo/Jadi Trip Bputih.png" style="height: 70px" class="logo-dark" alt="logo-dark"> --}}
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
                                            aria-current="page" href="/blog" aria-label="nav-links">
                                            Destinasi
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                                            aria-current="page" href="blog" aria-label="nav-links">
                                            Aktifitas
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                                            href="blog" aria-label="nav-links" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            Kuliner
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                                </svg>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="blog" rel="nofollow"
                                                    aria-label="single-pages">Open Trip</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="blog" rel="nofollow"
                                                    aria-label="single-pages">Paket Wisata</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                                            href="blog" aria-label="nav-links" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            Paket
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-chevron-down"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                                </svg>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="blog" rel="nofollow"
                                                    aria-label="single-pages">Open Trip</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="blog" rel="nofollow"
                                                    aria-label="single-pages">Paket Wisata</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                                            href="blog" aria-label="nav-links" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            Blog
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-chevron-down"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                                </svg>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="blog" rel="nofollow"
                                                    aria-label="single-pages">Blog 1</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                                            aria-current="page" href="about" aria-label="nav-links">
                                            About
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link d-flex gap-2 align-items-center" rel="nofollow"
                                            aria-current="page" href="contact" aria-label="nav-links">
                                            Kontak
                                        </a>
                                    </li>
                                </ul>


                                <div class="d-flex gap-20 align-items-center">

                                    <a class="serch-icon px-2" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasserch" aria-controls="offcanvasserch">

                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19 19L13.0001 13M15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 4.13401 4.13401 1 8 1C11.866 1 15 4.13401 15 8Z"
                                                stroke="" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </a>

                                    <a class="menu-icon" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasDesktop" aria-controls="offcanvasDesktop">
                                        <span class="menu-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 12H21M3 6H21M3 18H21" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>

                                    {{-- LOGO PROFIL KANAN ATAS --}}
                                    {{-- PROFIL KETIKA SUDAH LOGIN SCRIPT DIBAWAH --}}
                                    @if (Auth::check())
                                        <div class="box-profile" style="width: 40px; height: 40px; overflow: hidden;">
                                            <img width="40"
                                                src="{{ asset('admin/images/' . Auth::user()->photo) }}"
                                                class="user_pic" alt="" id="toggle-button" width="50">
                                        </div>

                                        <div class="sub-menu-wrap" id="subMenu">
                                            <div class="sub-menu">
                                                <div class="user-info">
                                                    <h3>{{ Auth::user()->username }}</h3>
                                                    <img src="{{ asset('admin/images/' . Auth::user()->photo) }}">

                                                </div>
                                                <hr>

                                                <div class="sub-menu-link">
                                                    <span class="material-icons-sharp sub-icon">
                                                        account_circle
                                                    </span>
                                                    <a href="profile">Profile</a>
                                                </div>
                                                <div class="sub-menu-link">
                                                    <span class="material-icons-sharp sub-icon">
                                                        account_circle
                                                    </span>
                                                    <a href="dashboard">Dashboard</a>
                                                </div>

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
                                            <img width="40" src="{{ asset('admin/images/noimage.webp') }}"
                                                class="user_pic" alt="" id="toggle-button">
                                        </div>

                                        <div class="sub-menu-wrap" id="subMenu">
                                            <div class="sub-menu">
                                                {{-- <div class="user-info">
                                                    <h3>Anonymous</h3>
                                                    <img src="{{ asset('admin/images/noimage.webp') }}">

                                                </div> --}}
                                                <hr>

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
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Header ======================-->

        <!-- off canvas Desktop -->
        <div class="offcanvas d-none d-lg-block offcanvas-end" data-bs-scroll="false" tabindex="-1"
            id="offcanvasDesktop">

            <div class="offcanvas-header justify-content-end">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <div class="author-about mb-40 ">
                    <div class="text-center">
                        <div class="author-iamge">
                            <a href="about"><img src="{{ asset('assets/images/placeholder.svg') }}"
                                    data-src="{{ asset('assets/images/about-image-1.png') }}" alt="author-iamge"></a>
                        </div>
                        <h5><a class="author-name" href="about">Mike Aiden</a></h5>
                        <p class=" text-center">I’m a intrepid travel blogger, weaves tales of exploration and
                            discovery. Let's traverse the globe together and share in the beauty of our world.</p>
                    </div>
                </div>

                <div class="socials-wrapper">
                    <h4 class="offcanvas-title mb-30">Follow Me</h4>
                    <!-- author-socials -->
                    <div class="author-socials mb-30">
                        <a href="https://www.facebook.com" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com" class="linkedin"><i
                                class="fa-brands fa-linkedin-in"></i></a>
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
                </div>

                <!-- sidebar-gallery -->
                <div class="sidebar-gallery mb-40">
                    <div class="div1 image-hover"><img src="{{ asset('assets/images/placeholder.svg') }}"
                            data-src="{{ asset('assets/images/instagram/instagram-1.png') }}" alt="instagram">
                        <span class="d-flex justify-content-center mb-10">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.4396 18H5.56042C2.49391 18 0 15.5061 0 12.4396V5.56042C0 2.49391 2.49391 0 5.56042 0H12.4396C15.5061 0 18 2.49391 18 5.56042V12.4396C18.0016 15.5061 15.5061 18 12.4396 18ZM5.56042 2.00648C3.60126 2.00648 2.00648 3.60126 2.00648 5.56042V12.4396C2.00648 14.3987 3.60126 15.9935 5.56042 15.9935H12.4396C14.3987 15.9935 15.9935 14.3987 15.9935 12.4396V5.56042C15.9935 3.60126 14.3987 2.00648 12.4396 2.00648H5.56042Z"
                                    fill="white" />
                                <path
                                    d="M9.0021 13.5979C6.4656 13.5979 4.40234 11.5347 4.40234 8.99819C4.40234 6.46169 6.4656 4.39844 9.0021 4.39844C11.5386 4.39844 13.6019 6.46169 13.6019 8.99819C13.6019 11.5347 11.5386 13.5979 9.0021 13.5979ZM9.0021 6.203C7.46095 6.203 6.20691 7.45705 6.20691 8.99819C6.20691 10.5393 7.46095 11.7934 9.0021 11.7934C10.5432 11.7934 11.7973 10.5393 11.7973 8.99819C11.7973 7.45705 10.5432 6.203 9.0021 6.203Z"
                                    fill="white" />
                                <path
                                    d="M14.6139 4.13508C14.6139 4.56414 14.2653 4.91278 13.8363 4.91278C13.4072 4.91278 13.0586 4.56414 13.0586 4.13508C13.0586 3.70602 13.4072 3.35742 13.8363 3.35742C14.2653 3.35742 14.6139 3.70444 14.6139 4.13508Z"
                                    fill="white" />
                            </svg>

                        </span>
                    </div>
                    <div class="div2 image-hover"><img src="{{ asset('assets/images/placeholder.svg') }}"
                            data-src="{{ asset('assets/images/instagram/instagram-4.png') }}" alt="instagram">
                        <span class="d-flex justify-content-center mb-10">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.4396 18H5.56042C2.49391 18 0 15.5061 0 12.4396V5.56042C0 2.49391 2.49391 0 5.56042 0H12.4396C15.5061 0 18 2.49391 18 5.56042V12.4396C18.0016 15.5061 15.5061 18 12.4396 18ZM5.56042 2.00648C3.60126 2.00648 2.00648 3.60126 2.00648 5.56042V12.4396C2.00648 14.3987 3.60126 15.9935 5.56042 15.9935H12.4396C14.3987 15.9935 15.9935 14.3987 15.9935 12.4396V5.56042C15.9935 3.60126 14.3987 2.00648 12.4396 2.00648H5.56042Z"
                                    fill="white" />
                                <path
                                    d="M9.0021 13.5979C6.4656 13.5979 4.40234 11.5347 4.40234 8.99819C4.40234 6.46169 6.4656 4.39844 9.0021 4.39844C11.5386 4.39844 13.6019 6.46169 13.6019 8.99819C13.6019 11.5347 11.5386 13.5979 9.0021 13.5979ZM9.0021 6.203C7.46095 6.203 6.20691 7.45705 6.20691 8.99819C6.20691 10.5393 7.46095 11.7934 9.0021 11.7934C10.5432 11.7934 11.7973 10.5393 11.7973 8.99819C11.7973 7.45705 10.5432 6.203 9.0021 6.203Z"
                                    fill="white" />
                                <path
                                    d="M14.6139 4.13508C14.6139 4.56414 14.2653 4.91278 13.8363 4.91278C13.4072 4.91278 13.0586 4.56414 13.0586 4.13508C13.0586 3.70602 13.4072 3.35742 13.8363 3.35742C14.2653 3.35742 14.6139 3.70444 14.6139 4.13508Z"
                                    fill="white" />
                            </svg>

                        </span>
                    </div>
                    <div class="div3 image-hover"><img src="{{ asset('assets/images/placeholder.svg') }}"
                            data-src="{{ asset('assets/images/instagram/instagram-7.png') }}" alt="instagram">
                        <span class="d-flex justify-content-center mb-10">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.4396 18H5.56042C2.49391 18 0 15.5061 0 12.4396V5.56042C0 2.49391 2.49391 0 5.56042 0H12.4396C15.5061 0 18 2.49391 18 5.56042V12.4396C18.0016 15.5061 15.5061 18 12.4396 18ZM5.56042 2.00648C3.60126 2.00648 2.00648 3.60126 2.00648 5.56042V12.4396C2.00648 14.3987 3.60126 15.9935 5.56042 15.9935H12.4396C14.3987 15.9935 15.9935 14.3987 15.9935 12.4396V5.56042C15.9935 3.60126 14.3987 2.00648 12.4396 2.00648H5.56042Z"
                                    fill="white" />
                                <path
                                    d="M9.0021 13.5979C6.4656 13.5979 4.40234 11.5347 4.40234 8.99819C4.40234 6.46169 6.4656 4.39844 9.0021 4.39844C11.5386 4.39844 13.6019 6.46169 13.6019 8.99819C13.6019 11.5347 11.5386 13.5979 9.0021 13.5979ZM9.0021 6.203C7.46095 6.203 6.20691 7.45705 6.20691 8.99819C6.20691 10.5393 7.46095 11.7934 9.0021 11.7934C10.5432 11.7934 11.7973 10.5393 11.7973 8.99819C11.7973 7.45705 10.5432 6.203 9.0021 6.203Z"
                                    fill="white" />
                                <path
                                    d="M14.6139 4.13508C14.6139 4.56414 14.2653 4.91278 13.8363 4.91278C13.4072 4.91278 13.0586 4.56414 13.0586 4.13508C13.0586 3.70602 13.4072 3.35742 13.8363 3.35742C14.2653 3.35742 14.6139 3.70444 14.6139 4.13508Z"
                                    fill="white" />
                            </svg>

                        </span>
                    </div>
                    <div class="div4 image-hover"><img src="{{ asset('assets/images/placeholder.svg') }}"
                            data-src="{{ asset('assets/images/instagram/instagram-3.png') }}" alt="instagram">
                        <span class="d-flex justify-content-center mb-10">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.4396 18H5.56042C2.49391 18 0 15.5061 0 12.4396V5.56042C0 2.49391 2.49391 0 5.56042 0H12.4396C15.5061 0 18 2.49391 18 5.56042V12.4396C18.0016 15.5061 15.5061 18 12.4396 18ZM5.56042 2.00648C3.60126 2.00648 2.00648 3.60126 2.00648 5.56042V12.4396C2.00648 14.3987 3.60126 15.9935 5.56042 15.9935H12.4396C14.3987 15.9935 15.9935 14.3987 15.9935 12.4396V5.56042C15.9935 3.60126 14.3987 2.00648 12.4396 2.00648H5.56042Z"
                                    fill="white" />
                                <path
                                    d="M9.0021 13.5979C6.4656 13.5979 4.40234 11.5347 4.40234 8.99819C4.40234 6.46169 6.4656 4.39844 9.0021 4.39844C11.5386 4.39844 13.6019 6.46169 13.6019 8.99819C13.6019 11.5347 11.5386 13.5979 9.0021 13.5979ZM9.0021 6.203C7.46095 6.203 6.20691 7.45705 6.20691 8.99819C6.20691 10.5393 7.46095 11.7934 9.0021 11.7934C10.5432 11.7934 11.7973 10.5393 11.7973 8.99819C11.7973 7.45705 10.5432 6.203 9.0021 6.203Z"
                                    fill="white" />
                                <path
                                    d="M14.6139 4.13508C14.6139 4.56414 14.2653 4.91278 13.8363 4.91278C13.4072 4.91278 13.0586 4.56414 13.0586 4.13508C13.0586 3.70602 13.4072 3.35742 13.8363 3.35742C14.2653 3.35742 14.6139 3.70444 14.6139 4.13508Z"
                                    fill="white" />
                            </svg>

                        </span>
                    </div>
                    <div class="div5 image-hover"><img src="{{ asset('assets/images/placeholder.svg') }}"
                            data-src="{{ asset('assets/images/instagram/instagram-8.png') }}" alt="instagram">
                        <span class="d-flex justify-content-center mb-10">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.4396 18H5.56042C2.49391 18 0 15.5061 0 12.4396V5.56042C0 2.49391 2.49391 0 5.56042 0H12.4396C15.5061 0 18 2.49391 18 5.56042V12.4396C18.0016 15.5061 15.5061 18 12.4396 18ZM5.56042 2.00648C3.60126 2.00648 2.00648 3.60126 2.00648 5.56042V12.4396C2.00648 14.3987 3.60126 15.9935 5.56042 15.9935H12.4396C14.3987 15.9935 15.9935 14.3987 15.9935 12.4396V5.56042C15.9935 3.60126 14.3987 2.00648 12.4396 2.00648H5.56042Z"
                                    fill="white" />
                                <path
                                    d="M9.0021 13.5979C6.4656 13.5979 4.40234 11.5347 4.40234 8.99819C4.40234 6.46169 6.4656 4.39844 9.0021 4.39844C11.5386 4.39844 13.6019 6.46169 13.6019 8.99819C13.6019 11.5347 11.5386 13.5979 9.0021 13.5979ZM9.0021 6.203C7.46095 6.203 6.20691 7.45705 6.20691 8.99819C6.20691 10.5393 7.46095 11.7934 9.0021 11.7934C10.5432 11.7934 11.7973 10.5393 11.7973 8.99819C11.7973 7.45705 10.5432 6.203 9.0021 6.203Z"
                                    fill="white" />
                                <path
                                    d="M14.6139 4.13508C14.6139 4.56414 14.2653 4.91278 13.8363 4.91278C13.4072 4.91278 13.0586 4.56414 13.0586 4.13508C13.0586 3.70602 13.4072 3.35742 13.8363 3.35742C14.2653 3.35742 14.6139 3.70444 14.6139 4.13508Z"
                                    fill="white" />
                            </svg>

                        </span>
                    </div>
                </div>

                <div class="catagory mb-30">
                    <h3 class="offcanvas-title  mb-40">Category</h3>
                    <div class="catagory-tag">
                        <a href="category">Hiking <span class="catagory-count">10</span></a>
                        <a href="category">Camping <span class="catagory-count">08</span></a>
                        <a href="category">Desert <span class="catagory-count">12</span></a>
                        <a href="category">Beach <span class="catagory-count">22</span></a>
                        <a href="category">Forest <span class="catagory-count">15</span></a>
                        <a href="category">Ancient <span class="catagory-count">07</span></a>
                        <a href="category">City <span class="catagory-count">18</span></a>
                        <a href="category">Lake <span class="catagory-count">09</span></a>
                    </div>
                </div>

            </div>
        </div>

        <!-- of canvas Mobile menu start -->
        <div class="offcanvas offcanvas-end offcanvasmobile-menu" id="offcanvasmobile-menu" data-bs-backdrop="static"
            tabindex="-1">
            <div class="offcanvas-header pb-30">
                <a class="navbar-brand dark-light-logo" href="/" aria-label="nav-brands">
                    <img src="{{ asset('assets/images/placeholder.svg') }}"
                        data-src="{{ asset('assets/images/logo-dark.png') }}" class="logo-dark img-fluid"
                        alt="logo">
                    <img src="{{ asset('assets/images/placeholder.svg') }}"
                        data-src="{{ asset('assets/images/logo-white.png') }}" class="logo-light img-fluid"
                        alt="logo">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex justify-content-start">
                <ul class="navbar-nav custom-navbar-nav mb-2  mb-lg-0 hover-menu">
                    <li class="nav-item dropdown">
                        <a class="nav-link active d-flex gap-2 align-items-center" aria-current="page" href="blog"
                            aria-label="nav-links">
                            Destinasi
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex gap-2 align-items-center" href="blog" aria-label="nav-links"
                            data-bs-toggle="dropdown" aria-expanded="true">
                            Aktifitas
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="blog"
                            aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                            Kuliner
                            <span class="dropdown-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
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
                        <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="blog"
                            aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                            Paket
                            <span class="dropdown-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
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
                        <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="blog"
                            aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                            Blog
                            <span class="dropdown-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                </svg>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="article" aria-label="single-pages">Article 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="article" aria-label="single-pages">Article 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="about"
                            aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="contact"
                            aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <a href="https://twitter.com" class="twitter"><svg width="16" height="14"
                            viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.8092 15.98H11.1569L6.89801 9.78339L1.56807 15.98H0.19043L6.28619 8.89157L0.19043 0.0195312H4.84276L8.87486 5.88989L13.9234 0.0195312H15.301L9.48808 6.77751L15.8092 15.98ZM11.8079 14.9929H13.9234L4.18054 1.05696H2.06508L11.8079 14.9929Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- of canvas Mobile menu End -->

        <!-- Offcanvas Serch -->
        <div class="offcanvas offcanvas-top offcanvasserch py-lg-100 py-40" data-bs-scroll="false" tabindex="-1"
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
                                <form action="#">
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
                                    <a href="article"><img src="{{ asset('assets/images/placeholder.svg') }}"
                                            data-src="{{ asset('assets/images/feature-images/feature-image-1.jpg') }}"
                                            class="card-img-top" alt="Breakfast"> </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="article"
                                            class="blog-title">Quick and Easy Flaky Pastry for Tasty Breakfast</a></h5>
                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                        <li>By <a href="about" class="fw-bold">Mike Aiden</a></li>
                                        <li>January 27, <span class="dynamic-year"> </span>.</li>
                                    </ul>
                                </div>

                            </div>
                            <!-- mini-card-style -->
                            <div class="mini-card-style mb-lg-40 mb-30">
                                <div class="card-image-wrapper">
                                    <a href="article"> <img src="{{ asset('assets/images/placeholder.svg') }}"
                                            data-src="{{ asset('assets/images/feature-images/feature-image-7.jpg') }}"
                                            class="card-img-top" alt="Stories"> </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="article"
                                            class="blog-title">Footprints in the Wilderness: Hiking Stories</a></h5>
                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                        <li>By <a href="about" class="fw-bold">Mike Aiden</a></li>

                                        <li>January 25, <span class="dynamic-year"> </span>.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-lg-6">
                            <!-- mini-card-style -->
                            <div class="mini-card-style mb-lg-40 mb-30">
                                <div class="card-image-wrapper">
                                    <a href="article"> <img src="{{ asset('assets/images/placeholder.svg') }}"
                                            data-src="{{ asset('assets/images/feature-images/feature-image-3.jpg') }}"
                                            class="card-img-top" alt="Stories"> </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="article"
                                            class="blog-title">Lost Treasures: Top 10 Ancient City Sites</a></h5>
                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                        <li>By <a href="about" class="fw-bold">Mike Aiden</a></li>

                                        <li>January 07, <span class="dynamic-year"> </span>.</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- mini-card-style -->
                            <div class="mini-card-style mb-lg-40 mb-30">
                                <div class="card-image-wrapper">
                                    <a href="article"> <img src="{{ asset('assets/images/placeholder.svg') }}"
                                            data-src="{{ asset('assets/images/feature-images/feature-image-4.jpg') }}"
                                            class="card-img-top" alt="Stories"> </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="article"
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
                                    <a href="article"> <img src="{{ asset('assets/images/placeholder.svg') }}"
                                            data-src="{{ asset('assets/images/feature-images/feature-image-5.jpg') }}"
                                            class="card-img-top" alt="Stories"> </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="article"
                                            class="blog-title">Seaside Serenity: Beachside Beauty Uncovered</a></h5>
                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                        <li>By <a href="about" class="fw-bold">Mike Aiden</a></li>

                                        <li>January 15, <span class="dynamic-year"> </span>.</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- mini-card-style -->
                            <div class="mini-card-style mb-lg-40 mb-30">
                                <div class="card-image-wrapper">
                                    <a href="article"> <img src="{{ asset('assets/images/placeholder.svg') }}"
                                            data-src="{{ asset('assets/images/feature-images/feature-image-3.jpg') }}"
                                            class="card-img-top" alt="Stories"> </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="article"
                                            class="blog-title">Lost Treasures: Top 10 Ancient City Sites</a></h5>
                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                        <li>By <a href="about" class="fw-bold">Mike Aiden</a></li>

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


            <!--Banner Section ======================-->
            <section class="section-banner article-1 position-relative">
                <div class="article-wrapper article-wrapper-1 mx-auto position-relative parallax">
                    <div class="container">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-100">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"> <a href="{{ url('blog') }}">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                            </ol>
                        </nav>
                        <!-- breadcrumb -->
                        <div class="row justify-content-center">
                            <div class="col-md-10">

                                <div class="text-center py-30">
                                    <h2 class="section-banner-title text-white pb-30 ">{{ $post->title }}</h2>
                                    <div class="d-flex gap-20 flex-wrap justify-content-center">
                                        <span class="text-white">3 Comments</span>
                                        <span class="text-white">{{ $post->created_at->DiffForHumans() }}<span
                                                class="">
                                            </span>.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container -->

                </div>
                <!-- category-wrapper -->

            </section>
            <!--Banner Section ======================-->


            <!--Blog Section ======================-->
            <section class="section-blog py-4 py-sm-5 py-md-60 py-lg-100">
                <div class="container">
                    <div class="row justify-content-end custom-row-gap">
                        <div class="col-1 px-0">
                            <div class="sticky-elements">
                                <!-- sticky-elements -->
                                <div class="sidebar-style d-none d-xl-block">
                                    <div class="author-details mb-lg-60 mb-40">
                                        <p class="text-end mb-0 ">Jadi Trip?</p>
                                        <h6 class="text-end"><a href="about" class="author-name">Jadi Dong!!</a>
                                        </h6>
                                        <div class="author-image">
                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                data-src="{{ asset('assets/images/about-image-1.png') }}"
                                                alt="about-image">
                                        </div>
                                    </div>
                                    <div class="sidebar-social">
                                        <span>SHARE THIS ARTICLE</span>
                                        <a href="https://www.facebook.com" class="facebook"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://www.instagram.com" class="instagram"><i
                                                class="fa-brands fa-instagram"></i></a>
                                        <a href="https://www.linkedin.com" class="linkedin"><i
                                                class="fa-brands fa-linkedin"></i></a>
                                        <a href="https://www.pinterest.com" class="pinterest"><i
                                                class="fa-brands fa-pinterest-p"></i></a>
                                        <a href="https://twitter.com" class="twitter"><svg width="16"
                                                height="14" viewBox="0 0 16 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.8092 15.98H11.1569L6.89801 9.78339L1.56807 15.98H0.19043L6.28619 8.89157L0.19043 0.0195312H4.84276L8.87486 5.88989L13.9234 0.0195312H15.301L9.48808 6.77751L15.8092 15.98ZM11.8079 14.9929H13.9234L4.18054 1.05696H2.06508L11.8079 14.9929Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-7">
                            <!-- Start article-blog-content -->
                            <div class="article-blog-content mb-lg-0 mb-20">
                                <p class="mb-30 mb-lg-60">{{ $post->content }}</p>

                                <div class="table-of-content table-of-content-style-2">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="table-of-content-heading">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Table of content
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ol id="navbar-example3" class="table-of-content-body">
                                                        <li>
                                                            <h3><a href="#introduction">Introduction</a></h3>
                                                        </li>
                                                        <li>
                                                            <h3><a href="#traveltipsandhacks">Travel Tips and Hacks</a>
                                                            </h3>
                                                        </li>
                                                        <li>
                                                            <h3><a href="#outdoor-and-adventure">Outdoor and
                                                                    Adventure</a></h3>
                                                            <ul>
                                                                <li>
                                                                    <h4><a
                                                                            href="#Kayaking-Chronicles-Paddling-through-PristineWaters">Kayaking
                                                                            Chronicles - Paddling through Pristine
                                                                            Waters</a></h4>
                                                                </li>
                                                                <li>
                                                                    <h4> <a href="#hiking-havens">Hiking Havens -
                                                                            Trails and Treks in the Alaskan
                                                                            Wilderness</a></h4>
                                                                </li>
                                                                <li>
                                                                    <h4> <a href="#Camping-by-the-Shores">Camping by
                                                                            the Shores - Sleeping Under the Alaskan
                                                                            Stars</a></h4>
                                                                </li>
                                                                <li>
                                                                    <h4><a href="#Wildlife-Safari">Wildlife Safari -
                                                                            Encounters with Alaska's Untamed
                                                                            Residents</a></h4>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <h3><a href="#photography-and-videography">Photo and Video
                                                                    Gallery</a></h3>
                                                        </li>
                                                        <li>
                                                            <h3><a href="#accommodation-reviews">Accommodation
                                                                    Reviews</a></h3>
                                                        </li>
                                                        <li>
                                                            <h3><a href="#destination">Destination Guides</a></h3>
                                                        </li>
                                                        <li>
                                                            <h3><a href="#travelchallenges">Travel Challenges</a></h3>
                                                        </li>
                                                        <li>
                                                            <h3><a href="#conclusion">Conclusion</a></h3>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0"
                                    data-bs-smooth-scroll="true" tabindex="0">
                                    <h3 id="introduction" class="mb-10 article-post-heading ">Introduction</h3>
                                    <p class="pb-20 pb-lg-30 ">This summer, I offered the third-ever Bearfoot Theory
                                        group adventure. This time, myself and a group of Bearfoot Theory readers
                                        ventured into the Alaskan wilderness for 10 days of backpac. Led by our guides
                                        from <a href="#">Alaska Alpine Adventures,</a> our trip in Lake Clark
                                        offered a true Alaska experience in every sense.</p>

                                    <!-- quote -->
                                    <div class="quote mb-10 mb-lg-30 ">
                                        <p>You can design and create, and build the most wonderful place in the world.
                                            But it takes people to make the dream a reality.</p>
                                        <span class="quote-author">Walt Disney </span>
                                        <span class="quote-icon">
                                            <svg width="70" height="56" viewBox="0 0 70 56" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1_17489)">
                                                    <path
                                                        d="M69.9997 40.3661C69.9025 48.8919 62.9853 55.8666 54.4855 55.9979C48.1182 56.0954 42.6026 52.4079 40.0241 47.0279C39.6318 46.2103 39.3099 45.3557 39.0618 44.4675C33.1773 25.4374 54.9951 5.98009 61.6944 0.553026C62.7372 -0.291483 64.2628 -0.153535 65.1412 0.862567C65.9325 1.77437 65.9594 3.1202 65.2083 4.06564C57.8519 13.3216 55.317 19.8287 55.3573 24.4079C63.5989 24.9866 70.0936 31.9243 69.9997 40.3661Z"
                                                        fill="#4C9BB3" fill-opacity="0.4" />
                                                    <path
                                                        d="M31.9333 40.3661C31.8395 48.8919 24.9189 55.8666 16.4225 55.9979C10.0552 56.0954 4.53621 52.4079 1.95777 47.0279C1.56883 46.2103 1.24359 45.3557 0.99547 44.4675C-4.88564 25.4374 16.9288 5.98009 23.628 0.553026C24.6742 -0.291483 26.1964 -0.153535 27.0782 0.862567C27.8662 1.77437 27.893 3.1202 27.1453 4.06564C19.7889 13.3216 17.254 19.8287 17.2943 24.4079C25.5359 24.9866 32.0272 31.9243 31.9333 40.3661Z"
                                                        fill="#4C9BB3" fill-opacity="0.4" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1_17489">
                                                        <rect width="70" height="56" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </div>

                                    <p class="pb-20 pb-lg-30 ">In this blog post, I share all that we got to see, do,
                                        and learn on this epic adventure, as well as a review of Alaska Alpine
                                        Adventures for those of you looking to explore Alaska’s backcountry.</p>


                                    <!-- article blog list -->

                                    <h3 id="traveltipsandhacks" class="mb-10 article-post-heading ">Travel Tips and
                                        Hacks</h3>
                                    <ul class="">
                                        <li>
                                            <p>Book in Advance: Accommodations can be limited, so book well in advance,
                                                especially is at during the peak season.</p>
                                        </li>
                                        <li>
                                            <p>Bear Safety: Familiarize yourself with bear safety protocols, including
                                                proper food storage on and carrying bear spray.</p>
                                        </li>
                                        <li>
                                            <p>Water Activities: Consider kayaking or boating to explore the lake's
                                                shoreline. Rentals are of available, or you can bring your own gear.</p>
                                        </li>
                                        <li>
                                            <p>Golden Hour Shots: Take advantage of the extended golden hour in Alaska
                                                for stunning and photography. Sunrise and sunset offer magical lighting.
                                            </p>
                                        </li>
                                        <li>
                                            <p>Emergency Preparedness: Be prepared for and emergencies by carrying a
                                                basic first aid kit, communication devices, and knowing the location of
                                                the nearest ranger station.</p>
                                        </li>
                                    </ul>
                                    <p class="mb-20 mb-lg-30">By following these travel tips and hacks, you'll be
                                        well-prepared to be immerse yourself in the natural beauty and tranquillity of
                                        Lake Clark, creating memories that will last a lifetime.</p>
                                    <div class="single-blog  pb-20">
                                        <!-- single blog -->
                                        <div class="blog-image border-rarius-14">
                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                data-src="{{ asset('assets/images/blog/explore-image-29.jpg') }}"
                                                class="border-rarius-14" alt="img-top">
                                        </div>

                                    </div>

                                    <!-- single-article-post-style -->

                                    <h3 id="outdoor-and-adventure" class="mb-10 article-post-heading  ">Outdoor and
                                        Adventure</h3>

                                    <p class="mb-lg-30 mb-20 ">Lake Clark, nestled within the heart of Alaska's untamed
                                        wilderness, is a haven for outdoor enthusiasts and adventure seekers alike.
                                        Surrounded by the rugged peaks of the Alaska Range, this pristine lake, a
                                        centerpiece of the Lake Clark National Park and Preserve, beckons with its
                                        crystal-clear waters and awe-inspiring landscapes.</p>
                                    <div class="single-article-post-style">

                                        <div class="single-article-post-grid">
                                            <div class="single-article-post-image pb-20">
                                                <div class="iamge-wrapper border-rarius-14 image-hover-effect">
                                                    <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                        data-src="{{ asset('assets/images/article/post-iamge-1.jpg') }}"
                                                        class="card-img-top border-rarius-14" alt="img-top">
                                                </div>

                                            </div>
                                            <div class="single-article-post-content">
                                                <div class="single-article-post-style">
                                                    <h4 id="Kayaking-Chronicles-Paddling-through-PristineWaters"
                                                        class="article-post-sub-heading mb-10 mb-md-20">Kayaking
                                                        Chronicles - Paddling through Pristine Waters</h4>
                                                    <p class="mb-lg-20 mb-10">Embark on an exhilaarataing journey
                                                        through the Kayaking Chronicles of Lake Clark, where is the
                                                        crystal-clear waters beckons adventure seekers to paddle through
                                                        pristine landscape. The allure of the Lake Clark lies not just
                                                        in its transparency but in the sereeeeeenity that is envelops
                                                        each stroke. The Lake Clark's Hiking Havens adventureres into an
                                                        untou realm of rugged beauty.</p>

                                                    <h4 id="hiking-havens" class=" article-post-sub-heading mb-10">
                                                        Hiking Havens - Trails and Treks in the Alaskan Wilderness</h4>
                                                    <p class="mb-lg-20 mb-10">Lake Clark's Hiking Havens beckon
                                                        adventure into an untouched realm of ruggded beauty. Trails wind
                                                        through vasted tundra, revealing breathtaking vistats of
                                                        snow-capped peaks and pristine lakes.snow-capped peaks and
                                                        pristine lakes.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <h4 id="Camping-by-the-Shores" class="article-post-sub-heading mb-10 ">Camping by
                                        the Shores - Sleeping Under the Alaskan Stars</h4>
                                    <p class="pb-20 ">Experience the magic of camping along Lake Clark's pristine
                                        shores. Set up your tent under Alaskan sky, where the midnight sun illuminates
                                        rugged landscapes, creating unforgettable lakeside memories.</p>

                                    <!-- Photo and Video Gallery -->

                                    <!-- article post gallery -->
                                    <div class="article-post-gallery-grid pb-30">
                                        <div class="div1 image-hover-effect">
                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                data-src="{{ asset('assets/images/categories/category-1.jpg') }}"
                                                class="border-rarius-14" alt="img-top">

                                        </div>
                                        <div class="div2 image-hover-effect">
                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                data-src="{{ asset('assets/images/categories/category-  8.jpg') }}"
                                                class="border-rarius-14" alt="img-top">

                                        </div>
                                        <div class="div3 image-hover-effect">
                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                data-src="{{ asset('assets/images/article/post-iamge-2.jpg') }}"
                                                class="border-rarius-14" alt="img-top">

                                        </div>
                                    </div>


                                    <p class="mb-lg-30 mb-10">Experience the magic of camping along Lake Clark's
                                        pristine shores. Set up your tent under the vast Alaskan sky, where the midnight
                                        sun illuminates rugged landscapes, creating unforgettable lakeside memories.</p>

                                    <h4 id="Wildlife-Safari" class="mb-10 article-post-sub-heading ">Wildlife Safari -
                                        Encounters with Alaska's Untamed Residents</h4>
                                    <p class="mb-lg-60 mb-md-30 mb-10">Embark on a wildlife safari at The Lake Clark,
                                        Alaska, where is untamed brown bear roam freely, eagles soar overhead, and moose
                                        graze by the shores—a captivating envvcounter with Alaska's wild residents. Lake
                                        Clark, a haven for outdoor enthusiasts, concludesss as a realm of unspoiled
                                        wilderness. From kayaking pristine waters to know summiting majestic peaks, it's
                                        an untamed adventure etched in enduring memories.</p>
                                    <h6 id="photography-and-videography" class="mb-lg-20 mb-10 article-post-heading ">
                                        Photo and Video Gallery</h6>
                                    <!-- article-slider -->
                                    <div class="article-slider-wrapper-main">

                                        <div class="swiper article-slider-wrapper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide border-rarius-14 article-slider-single">
                                                    <img class="border-rarius-14"
                                                        src="{{ asset('assets/images/placeholder.svg') }}"
                                                        data-src="{{ asset('assets/images/blog/explore-image-29.jpg') }}"
                                                        alt="Beach">

                                                    <a href="https://www.youtube.com/embed/TKnufs85hXk"
                                                        data-vbtype="iframe"
                                                        class="popup-youtube play-icon play-icon-effect">
                                                        <i class="fa-light fa-circle-play"></i>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide border-rarius-14 article-slider-single">
                                                    <img class="border-rarius-14"
                                                        src="{{ asset('assets/images/placeholder.svg') }}"
                                                        data-src="{{ asset('assets/images/blog/explore-image-28.jpg') }}"
                                                        alt="deserts">
                                                </div>
                                                <div class="swiper-slide border-rarius-14 article-slider-single">
                                                    <img class="border-rarius-14"
                                                        src="{{ asset('assets/images/placeholder.svg') }}"
                                                        data-src="{{ asset('assets/images/blog/explore-image-54.jpg') }}"
                                                        alt="Forest">
                                                </div>
                                                <div class="swiper-slide border-rarius-14 article-slider-single">
                                                    <img class="border-rarius-14"
                                                        src="{{ asset('assets/images/placeholder.svg') }}"
                                                        data-src="{{ asset('assets/images/blog/explore-image-27.jpg') }}"
                                                        alt="beach-iamge">
                                                </div>
                                                <div class="swiper-slide border-rarius-14 article-slider-single">
                                                    <img class="border-rarius-14"
                                                        src="{{ asset('assets/images/placeholder.svg') }}"
                                                        data-src="{{ asset('assets/images/blog/explore-image-15.jpg') }}"
                                                        alt="hill">
                                                    <a href="https://www.youtube.com/embed/TKnufs85hXk"
                                                        data-vbtype="iframe"
                                                        class="popup-youtube play-icon play-icon-effect">
                                                        <i class="fa-light fa-circle-play"></i>
                                                    </a>


                                                </div>
                                                <div class="swiper-slide border-rarius-14 article-slider-single">
                                                    <img class="border-rarius-14"
                                                        src="{{ asset('assets/images/placeholder.svg') }}"
                                                        data-src="{{ asset('assets/images/blog/explore-image-54.jpg') }}"
                                                        alt="desert-iamge">
                                                </div>

                                            </div>
                                            <div class="swiper-slide-button-wrapper">

                                                <div class="swiper-slide-button-prev"><i
                                                        class="fa-solid fa-angle-left"></i></div>
                                                <div class="swiper-slide-button-next"><i
                                                        class="fa-solid fa-angle-right"></i></div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <div class="swiper article-slider-thumb-wrapper">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide article-slider-thumb-single">
                                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                                data-src="{{ asset('assets/images/blog/explore-image-29.jpg') }}"
                                                                alt="slide-image">
                                                            <span class="play-icon">
                                                                <i class="fa-light fa-circle-play"></i>
                                                            </span>
                                                        </div>
                                                        <div class="swiper-slide article-slider-thumb-single">
                                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                                data-src="{{ asset('assets/images/blog/explore-image-28.jpg') }}"
                                                                alt="slide-image-two">
                                                        </div>
                                                        <div class="swiper-slide article-slider-thumb-single">
                                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                                data-src="{{ asset('assets/images/blog/explore-image-54.jpg') }}"
                                                                alt="slide-image-three">
                                                        </div>
                                                        <div class="swiper-slide article-slider-thumb-single">
                                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                                data-src="{{ asset('assets/images/blog/explore-image-27.jpg') }}"
                                                                alt="slide-image-four">
                                                        </div>
                                                        <div class="swiper-slide article-slider-thumb-single">
                                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                                data-src="{{ asset('assets/images/blog/explore-image-15.jpg') }}"
                                                                alt="slide-image-four">
                                                            <span class="play-icon">
                                                                <i class="fa-light fa-circle-play"></i>
                                                            </span>
                                                        </div>
                                                        <div class="swiper-slide article-slider-thumb-single">
                                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                                data-src="{{ asset('assets/images/blog/explore-image-54.jpg') }}"
                                                                alt="slide-image-five">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- article-slider -->

                                    <h3 id="accommodation-reviews" class="mb-10 article-post-heading ">Accommodation
                                        Reviews</h3>
                                    <p class="mb-lg-30  mb-10">The Lake Clark's accommodation options blend comfort
                                        with the untamed Alaskan wilderness. Lakeside retreats offer panoramic views,
                                        allowing guests to wake up to the serenity of nature. Cozy cabins, equipped with
                                        modern amenities, provide a refuge after day of outdoor adventure.</p>
                                    <div class="blog-image-wrapper mb-lg-60 mb-30">
                                        <div class="blog-image image-hover-effect-2">
                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                data-src="{{ asset('assets/images/blog/explore-image-53.jpg') }}"
                                                class=" full-image border-rarius-14" alt="img-top">
                                        </div>

                                        <div class="blog-image image-hover-effect-2">
                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                data-src="{{ asset('assets/images/blog/explore-image-54.jpg') }}"
                                                class=" full-image border-rarius-14" alt="img-top">
                                        </div>
                                    </div>

                                    <p class="mb-lg-60  mb-md-30 mb-10">Camping by the shores offers a more immersive
                                        experience under the midnight sun or dancing Northern Lights. Whether opting for
                                        luxury lodges or embracing the simplicity of camping, Lake Clark ensures a
                                        harmonious coexistence with nature, making each night's stay an integral part of
                                        the broader Alaskan adventure.</p>

                                    <h3 id="destination" class="article-post-heading mb-lg-20 mb-10 ">Destination
                                        Guides</h3>
                                    <div class="google-map pb-40">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9341.018597461838!2d-4.432307619358653!3d54.175565819955594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486384adaa7f6fd3%3A0x1fe2385732f12c3a!2sGroudle%20Beach!5e0!3m2!1sen!2sbd!4v1711792810684!5m2!1sen!2sbd"
                                            allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>


                                    <h3 id="travelchallenges" class="article-post-heading mb-lg-20">Travel Challenges
                                    </h3>
                                    <p class="mb-lg-20 mb-10">Embarking on the Lake Clark travel challenge unveils both
                                        the beauty and demands of Alaska's wilderness. Navigating its untamed landscape
                                        requires resilience against unpredictable weather, rigorous hiking, and
                                        encounters with wildlife.</p>
                                    <p class="mb-lg-60  mb-md-30 mb-20">The challenge lies immersing oneself in the raw
                                        element of nature, embraing the ruged terrains, and adapting the wild, creating
                                        an unforgettable expedition that tests both physical endurance and a deep
                                        connection with the unparalleled beauty of Lake Clark's outdoor wonders.</p>

                                    <h3 id="conclusion" class="article-post-heading mb-lg-20 mb-10 ">Conclusion</h3>
                                    <p class="mb-lg-60  mb-30">In the heart of Alaska, Lake Clark beckons with untamed
                                        beauty and outdoor wonders. As the journey through this the wilderness
                                        concludes, memories linger—kayaking crystal-clear waters, hiking amidst the
                                        towering peaks, and witnessing the unique harmony of wildlife. Lake Clark's
                                        pristine charm and rugged landscapes imprint an indelible mark, inviting all who
                                        venture here to become part of its tale. The adventure transcends a mere trip;
                                        it's a transformative experience, a communion with nature's grandeur that leaves
                                        travelers with a profound appreciation for the raw and unyielding beauty of
                                        Alaska's Lake Clark National Park and Preserve.</p>

                                </div>
                                <!-- article content -->
                            </div>
                            <!-- END article-blog-content -->
                        </div>

                        <div class="col-xl-4">
                            <div class="sticky-elements">
                                <div class="d-flex flex-column gap-lg-60 gap-30">
                                    <div class="widget">
                                        <h4 class="fs-1 mb-40">Featured Article</h4>
                                        <div class="d-flex flex-column gap-3 gap-xl-30">

                                            <!-- mini-card-style -->
                                            <div class="mini-card-style wow fadeInUp" data-wow-delay="0.4s">
                                                <div class="card-image-wrapper">
                                                    <a href="article"><img
                                                            src="{{ asset('assets/images/placeholder.svg') }}"
                                                            data-src="{{ asset('assets/images/feature-images/feature-image-1.jpg') }}"
                                                            class="card-img-top" alt="Breakfast"> </a>
                                                </div>

                                                <div class="card-body">
                                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="article"
                                                            class="blog-title">Quick and Easy Flaky Pastry for Tasty
                                                            Breakfast</a></h5>
                                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                                        <li>By <a href="about" class="fw-bold">Mike Aiden</a></li>
                                                        <li>January 27, <span class="dynamic-year"> </span>.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- mini-card-style -->
                                            <div class="mini-card-style wow fadeInUp" data-wow-delay="0.4s">
                                                <div class="card-image-wrapper">
                                                    <a href="article"> <img
                                                            src="{{ asset('assets/images/placeholder.svg') }}"
                                                            data-src="{{ asset('assets/images/feature-images/feature-image-7.jpg') }}"
                                                            class="card-img-top" alt="Stories"> </a>
                                                </div>

                                                <div class="card-body">
                                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="article"
                                                            class="blog-title">Footprints in the Wilderness: Hiking
                                                            Stories</a></h5>
                                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                                        <li>By <a href="about" class="fw-bold">Mike Aiden</a></li>

                                                        <li>January 25, <span class="dynamic-year"> </span>.</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- mini-card-style -->
                                            <div class="mini-card-style wow fadeInUp" data-wow-delay="0.4s">
                                                <div class="card-image-wrapper">
                                                    <a href="article"> <img
                                                            src="{{ asset('assets/images/placeholder.svg') }}"
                                                            data-src="{{ asset('assets/images/feature-images/feature-image-3.jpg') }}"
                                                            class="card-img-top" alt="Stories"> </a>
                                                </div>

                                                <div class="card-body">
                                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="article"
                                                            class="blog-title">Lost Treasures: Top 10 Ancient City
                                                            Sites</a></h5>
                                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                                        <li>By <a href="about" class="fw-bold">Mike Aiden</a></li>

                                                        <li>January 13, <span class="dynamic-year"> </span>.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- mini-card-style -->
                                            <div class="mini-card-style wow fadeInUp" data-wow-delay="0.4s">
                                                <div class="card-image-wrapper">
                                                    <a href="article"> <img
                                                            src="{{ asset('assets/images/placeholder.svg') }}"
                                                            data-src="{{ asset('assets/images/feature-images/feature-image-4.jpg') }}"
                                                            class="card-img-top" alt="Stories"> </a>
                                                </div>

                                                <div class="card-body">
                                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="article"
                                                            class="blog-title">Beyond Shores: Discovering Idyllic Lake
                                                            Paradises</a></h5>
                                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                                        <li>By <a href="about" class="fw-bold">Mike Aiden</a></li>

                                                        <li>January 12, <span class="dynamic-year"> </span>.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- mini-card-style -->
                                            <div class="mini-card-style wow fadeInUp" data-wow-delay="0.4s">
                                                <div class="card-image-wrapper">
                                                    <a href="article"> <img
                                                            src="{{ asset('assets/images/placeholder.svg') }}"
                                                            data-src="{{ asset('assets/images/feature-images/feature-image-5.jpg') }}"
                                                            class="card-img-top" alt="Stories"> </a>
                                                </div>

                                                <div class="card-body">
                                                    <h5 class="card-title lead fw-extrabold mb-0"><a href="article"
                                                            class="blog-title">Seaside Serenity: Beachside Beauty
                                                            Uncovered</a></h5>
                                                    <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                                        <li>By <a href="about" class="fw-bold">Mike Aiden</a></li>

                                                        <li>January 04, <span class="dynamic-year"> </span>.</li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- widget -->

                                    <!-- socials -->
                                    <div class="widget widget-style-2 wow fadeInUp" data-wow-delay="0.4s">
                                        <h4 class="fs-1 mb-3 mb-lg-20 text-white text-center">Social Link</h4>
                                        <p class="mb-20 mb-lg-30 text-white text-center">Follow Me On Social Media</p>

                                        <div
                                            class="social-icons d-flex justify-content-center align-items-center flex-wrap gap-20">
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

                                    <div class="catagory">
                                        <h3 class="mb-40">Category</h3>
                                        <div class="catagory-tag">
                                            <a href="category">HIKING <span class="catagory-count">10</span></a>
                                            <a href="category">CAMPING <span class="catagory-count">20</span></a>
                                            <a href="category">FOREST <span class="catagory-count">18</span></a>
                                            <a href="category">DESERT <span class="catagory-count">14</span></a>
                                            <a href="category">MARINE <span class="catagory-count">45</span></a>
                                        </div>
                                    </div>
                                    <div class="add-iamge d-none d-xl-block wow fadeInUp" data-wow-delay="0.4s">
                                        <a href="#"><img src="{{ asset('assets/images/add.png') }}"
                                                class="img-fluid" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            <!-- mini-card-slider-wrapper -->
                            <div class="mini-card-slider-wrapper py-lg-100 py-md-60 py-30">


                                <!-- mini-card-slider -->
                                <div class="swiper mini-card-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <!-- card card-style-10 -->
                                            <div class="card card-style-10 card-border">
                                                <div class="d-flex align-items-center gap-lg-20 gap-10 ">
                                                    <div class="card-image-wrapper-style-2 image-hover-effect-2">
                                                        <a href="article">
                                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                                data-src="{{ asset('assets/images/feature-images/feature-image-1.jpg') }}"
                                                                alt="img-top">
                                                        </a>
                                                    </div>
                                                    <div class="card-body p-0  mt-auto">
                                                        <h5 class="card-title lead fw-extrabold"><a href="about"
                                                                class="blog-title">Quick and Easy Flaky Pastry for
                                                                Tasty Breakfast</a></h5>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- card card-style-10 -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- card card-style-10 -->
                                            <div class="card card-style-10 card-border">
                                                <div class="d-flex align-items-center gap-lg-20 gap-10 ">
                                                    <div class="card-image-wrapper-style-2 image-hover-effect-2">
                                                        <a href="article">
                                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                                data-src="{{ asset('assets/images/feature-images/feature-image-2.jpg') }}"
                                                                alt="img-top">
                                                        </a>
                                                    </div>
                                                    <div class="card-body p-0  mt-auto">
                                                        <h5 class="card-title lead fw-extrabold"><a href="article"
                                                                class="blog-title">Quick and Easy Flaky Pastry for
                                                                Tasty Breakfast</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card card-style-10 -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- card card-style-10 -->
                                            <div class="card card-style-10 card-border">
                                                <div class="d-flex align-items-center gap-lg-20 gap-10 ">
                                                    <div class="card-image-wrapper-style-2 image-hover-effect-2">
                                                        <a href="article">

                                                            <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                                data-src="{{ asset('assets/images/feature-images/feature-image-4.jpg') }}"
                                                                alt="img-top">
                                                        </a>
                                                    </div>
                                                    <div class="card-body p-0  mt-auto">
                                                        <h5 class="card-title lead fw-extrabold"><a href="article"
                                                                class="blog-title">Quick and Easy Flaky Pastry for
                                                                Tasty Breakfast</a></h5>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- card card-style-10 -->
                                        </div>

                                    </div>
                                    <div class="swiper-slide-button-wrapper">

                                        <div class="mini-card-button-prev"><i
                                                class="fa-solid fa-arrow-left"></i><span>Previous</span></div>
                                        <div class="mini-card-button-next"><span>Next</span> <i
                                                class="fa-solid fa-arrow-right"></i> </div>
                                    </div>

                                </div>

                            </div>
                            <!-- mini-card-slider-wrapper -->
                            <div class="comments-wrapper pb-lg-60 pb-30">
                                <p class="fs-2 fw-bold article-post-heading mb-lg-40 mb-20">3 Comments</p>

                                <!-- Main Comment -->
                                <div class="comment">

                                    <!-- Main to Comment -->
                                    <div class="main-comment mb-30">
                                        <div class="d-flex gap-20">
                                            <div class="comment-iamge">
                                                <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                    data-src="{{ asset('assets/images/man-02.jpg') }}"
                                                    alt="image">
                                            </div>
                                            <div class="comment-content">
                                                <h5><a href="#" class="comment-name">Liam Adams</a></h5>
                                                <span class="timestamp">January 12, <span class="dynamic-year">
                                                    </span>. at 10am</span>
                                                <p>Your vivid descriptions and captivating storytelling make me feel
                                                    like I'm right there, exploring each destination alongside you. Your
                                                    travel blog is a constant source of inspiration for my own
                                                    adventures. Keep the amazing content coming!</p>
                                                <button type="submit" class="btn btn-reply">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Reply to Comment -->
                                    <div class="reply mb-30">
                                        <div class="d-flex gap-20">
                                            <div class="comment-iamge">
                                                <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                    data-src="{{ asset('assets/images/about-image-1.png') }}"
                                                    alt="image">
                                            </div>
                                            <div class="comment-content">
                                                <h5><a href="#" class="comment-name">Liam Adams
                                                        <span>(Author)</span></a></h5>
                                                <span class="timestamp">January 12, <span class="dynamic-year">
                                                    </span>. at 10am</span>
                                                <p>Thank you so much for your kind words! It warms my heart to know that
                                                    my travel tales inspire your own adventures. Your support means the
                                                    world, and I'm thrilled to continue sharing the journey with you.
                                                    Stay tuned for more exciting experiences ahead</p>
                                                <button type="submit" class="btn btn-reply">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Main to Comment -->
                                    <div class="main-comment mb-30">
                                        <div class="d-flex gap-20">
                                            <div class="comment-iamge">
                                                <img src="{{ asset('assets/images/placeholder.svg') }}"
                                                    data-src="{{ asset('assets/images/man-03.jpg') }}"
                                                    alt="image">
                                            </div>
                                            <div class="comment-content">
                                                <h5><a href="#" class="comment-name">Mike Aiden</a></h5>
                                                <span class="timestamp">January 12, <span class="dynamic-year">
                                                    </span>. at 10am</span>
                                                <p>Your vivid descriptions and captivating storytelling make me feel
                                                    like I'm right there, exploring each destination alongside you. Your
                                                    travel blog is a constant source of inspiration for my own
                                                    adventures. Keep the amazing content coming!</p>
                                                <button type="submit" class="btn btn-reply">Reply</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- comment from -->
                            <div class="comment-form-wrapper">

                                <p class="fs-2 fw-bold article-post-heading mb-lg-40 mb-20">Join the discussion</p>

                                <form class="comment-from">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="Comment">Comments</label>
                                            <textarea class="form-control" id="Comment" rows="5"></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name <svg width="10" height="10"
                                                        viewBox="0 0 10 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 1V9M8 2L2 8M9 5H1M8 8L2 2" stroke="#4C9BB3"
                                                            stroke-width="0.8" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></label>
                                                <input type="email" class="form-control" id="name"
                                                    required>

                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email <svg width="10" height="10"
                                                        viewBox="0 0 10 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 1V9M8 2L2 8M9 5H1M8 8L2 2" stroke="#4C9BB3"
                                                            stroke-width="0.8" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></label>
                                                <input type="email" class="form-control" id="email"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label for="website">Website</label>
                                                <input type="text" class="form-control" id="website">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-check mb-lg-40 mb-20">
                                        <input type="checkbox" class="form-check-input" id="Check1">
                                        <label class="form-check-label" for="Check1">Save my name, email, and
                                            website in this browser for the next time I comment. </label>
                                    </div>



                                    <button type="submit" class="btn btn-primary">Submit Comments</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- container -->
            </section>
            <!--Blog Section ======================-->

            <SECtion class="pb-xl-70 pb-lg-60 pb-20">
                <div class="container">
                    <p class=" fs-1 fw-bold mb-lg-40 mb-30">You Might Also Like</p>
                    <div class="row custom-row-gap">
                        <div class="col-lg-4">
                            <!-- single card -->
                            <div class="card card-style-2 card-border mb-lg-40 mb-20 wow fadeInUp"
                                data-wow-delay="0.4s">
                                <div class="card-image-wrapper">
                                    <a href="article"><img src="{{ asset('assets/images/placeholder.svg') }}"
                                            data-src="{{ asset('assets/images/blog/explore-image-21.jpg') }}"
                                            class="card-img-top" alt="Lake"></a>
                                </div>

                                <div class="card-body">
                                    <div class="card-header text-uppercase">
                                        <a href="category"> Lake</a>
                                    </div>
                                    <h5 class="fs-4 card-title"><a href="article" class="blog-title">Lakeside
                                            Wonders: Nature's Peaceful Miracles</a></h5>

                                    <ul class="list-unstyled card-meta lead  small">
                                        <li>By <a href="about" class="blog-author fw-bold">Mike Aiden</a></li>
                                        <li>January 27, <span class="dynamic-year"> </span>.</li>
                                    </ul>

                                    <p class="card-text small">Nature Peaceful Miracle captivate with serene
                                        reflection, gentle ripples, and harmonious symphony. A tranquil haven where
                                        beauty meets tranquility...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-style-2 card-border mb-lg-40 mb-20 wow fadeInUp"
                                data-wow-delay="0.4s">
                                <div class="card-image-wrapper">
                                    <a href="blog"> <img src="{{ asset('assets/images/placeholder.svg') }}"
                                            data-src="{{ asset('assets/images/blog/explore-image-30.jpg') }}"
                                            class="card-img-top" alt="Forest"></a>
                                </div>

                                <div class="card-body">
                                    <div class="card-header text-uppercase">
                                        <a href="category">Forest</a>
                                    </div>
                                    <h5 class="fs-4 card-title"><a href="article" class="blog-title">The Mystic
                                            Woods: Nature's Healing Sanctuary</a></h5>

                                    <ul class="list-unstyled card-meta lead  small">
                                        <li>By <a href="about" class="blog-author fw-bold">Mike Aiden</a></li>
                                        <li>January 23, <span class="dynamic-year"> </span>.</li>
                                    </ul>

                                    <p class="card-text small">Nature's Healing Sanctuary invite weary souls to
                                        immerse in the embrace ancient tree, where whispers of the wind and rustling
                                        leaves orchestrate...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-style-2 card-border mb-lg-40 mb-20 wow fadeInUp"
                                data-wow-delay="0.4s">
                                <div class="card-image-wrapper">
                                    <a href="blog"> <img src="{{ asset('assets/images/placeholder.svg') }}"
                                            data-src="{{ asset('assets/images/blog/explore-image-47.jpg') }}"
                                            class="card-img-top" alt="img-top"></a>
                                </div>

                                <div class="card-body">
                                    <div class="card-header text-uppercase">
                                        <a href="category">Beach</a>
                                    </div>
                                    <h5 class="fs-4 card-title"><a href="article" class="blog-title">Seaside
                                            Serenity: Beachside Beauty Uncovered</a></h5>

                                    <ul class="list-unstyled card-meta lead  small">
                                        <li>By <a href="about" class="blog-author fw-bold">Mike Aiden</a></li>
                                        <li>January 23, <span class="dynamic-year"> </span>.</li>
                                    </ul>

                                    <p class="card-text small">Beachside Beauty Uncovered invites you to a tranquil
                                        escape, where the rhythmic waves meet the golden shore. Discover serenity in the
                                        embrace...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </SECtion>

            <!--CTA Section ======================-->
            <!-- <section class="section-cta wow fadeInUp" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="cta-area pt-lg-60 pb-lg-90 pt-30 pb-30">
                            <div class="col-lg-6">
                                <div class="cta-content pl-lg-100">
                                    <p class="fs-6 text-white mb-10">Keep in Touch</p>
                                    <h3 class=" fs-3 text-white  mb-30 ">Explore the world</h3>
                                    <form>
                                        <div class="form-group d-flex gap-30">
                                            <input type="email" class="form-control" name="email" placeholder="Your email address" required>
                                            <button type="submit" class="btn btn-secondary">Subscribe</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </section> -->
            <!--CTA Section ======================-->

        </div>
        <!-- main -->

        <!--Footer Section ======================-->
        <footer class="section-footer section-footer-2  parallax pt-40 pt-md-60 pt-lg-130">
            <div class="footer-wrapper position-relative py-20 py-lg-60 py-xl-100">
                <div class="container">
                    <div class="footer-top-contents pb-30">
                        <div class="row align-items-center gy-30 gy-lg-0">
                            <div class="col-lg-6">
                                <div class="footer-link-menu-style-2">
                                    <ul class="list-unstyled lead">
                                        <li>
                                            <a href="/">Home</a>
                                        </li>
                                        <li>
                                            <a href="blog">Blog</a>
                                        </li>
                                        <li>
                                            <a href="about">About</a>
                                        </li>
                                        <li>
                                            <a href="contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- footer-links -->
                            </div>
                            <!-- col-6 -->

                            <div class="col-lg-6">
                                <div class="social-icons  d-flex align-items-center justify-content-lg-end gap-20">
                                    <a href="https://www.facebook.com">
                                        <span class="text-white">
                                            <svg width="10" height="16" viewBox="0 0 11 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.13046 2.63679V0.036944C9.13046 0.036944 6.47179 0.0117188 6.29118 0.0117188C5.08995 0.0117188 3.36232 1.37817 3.36232 2.92941C3.36232 4.67665 3.36232 5.71267 3.36232 5.71267H0.873047V8.66395H3.32872V15.9876H6.2352V8.63036H8.80428L9.13046 5.74627H6.2688C6.2688 5.74627 6.2688 3.97383 6.2688 3.62803C6.2688 3.11981 6.65242 2.62141 7.22643 2.62141C7.60864 2.62141 9.13046 2.63679 9.13046 2.63679Z" />
                                            </svg>
                                        </span>
                                    </a>

                                    <a href="https://www.instagram.com/">
                                        <span class="text-white">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.0524 15.9895H4.94685C2.22518 15.9895 0.0117188 13.776 0.0117188 11.0544V4.9488C0.0117188 2.22713 2.22518 0.0136719 4.94685 0.0136719H11.0524C13.7741 0.0136719 15.9875 2.22713 15.9875 4.9488V11.0544C15.9889 13.776 13.7741 15.9895 11.0524 15.9895ZM4.94685 1.79451C3.208 1.79451 1.79256 3.20996 1.79256 4.9488V11.0544C1.79256 12.7932 3.208 14.2087 4.94685 14.2087H11.0524C12.7912 14.2087 14.2067 12.7932 14.2067 11.0544V4.9488C14.2067 3.20996 12.7912 1.79451 11.0524 1.79451H4.94685Z" />
                                                <path
                                                    d="M8.00046 12.0849C5.7492 12.0849 3.91797 10.2537 3.91797 8.00242C3.91797 5.75116 5.7492 3.91992 8.00046 3.91992C10.2517 3.91992 12.083 5.75116 12.083 8.00242C12.083 10.2537 10.2517 12.0849 8.00046 12.0849ZM8.00046 5.52156C6.63263 5.52156 5.5196 6.63458 5.5196 8.00242C5.5196 9.37025 6.63263 10.4833 8.00046 10.4833C9.3683 10.4833 10.4813 9.37025 10.4813 8.00242C10.4813 6.63458 9.3683 5.52156 8.00046 5.52156Z" />
                                                <path
                                                    d="M12.982 3.68044C12.982 4.06125 12.6726 4.37069 12.2918 4.37069C11.911 4.37069 11.6016 4.06125 11.6016 3.68044C11.6016 3.29963 11.911 2.99023 12.2918 2.99023C12.6726 2.99023 12.982 3.29823 12.982 3.68044Z" />
                                            </svg>
                                        </span>
                                    </a>

                                    <a href="https://twitter.com">
                                        <span class="text-white">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.8092 15.98H11.1569L6.89801 9.78339L1.56807 15.98H0.19043L6.28619 8.89157L0.19043 0.0195312H4.84276L8.87486 5.88989L13.9234 0.0195312H15.301L9.48808 6.77751L15.8092 15.98ZM11.8079 14.9929H13.9234L4.18054 1.05696H2.06508L11.8079 14.9929Z" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="https://www.youtube.com">
                                        <span class="text-white">
                                            <svg width="18" height="12" viewBox="0 0 18 12"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.4095 0.0820312H3.59002C1.89177 0.0820312 0.50293 1.47084 0.50293 3.16909V8.83366C0.50293 10.5319 1.89177 11.9207 3.59002 11.9207H14.4095C16.1078 11.9207 17.4966 10.5319 17.4966 8.83366V3.16909C17.4966 1.47084 16.1078 0.0820312 14.4095 0.0820312ZM9.47718 7.67723L6.8409 9.30826V6.04617V2.78408L9.47718 4.41514L12.1134 6.04617L9.47718 7.67723Z"
                                                    fill="#4C9BB3" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="https://www.linkedin.com">
                                        <span class="text-white">
                                            <svg width="17" height="17" viewBox="0 0 17 17"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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

                                    <a href="https://www.pinterest.com">
                                        <span class="text-white">
                                            <svg width="14" height="18" viewBox="0 0 14 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                <p class="mb-0 lead">A product of</p>
                                <a class="footer-logo" href="/" aria-label="nav-brands">
                                    <img src="{{ asset('assets/images/placeholder.svg') }}"
                                        data-src="{{ asset('assets/images/logo-primary.png') }}"
                                        class="logo-light img-fluid" alt="footer-logo-two">
                                </a>
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
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap/split-type-0.3.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/lazy.image.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>


</body>

</html>

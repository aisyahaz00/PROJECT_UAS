@extends('auth.layouts.app')
@section('content')
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>ALMERCH</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        <!-- start.navbar -->
        <nav id="navbar" class="navbar">
            
            {{-- <form class="d-flex input-group w-auto">
            <input
                type="search"
                class="form-control rounded"
                placeholder="Search"
                aria-label="Search"
                aria-describedby="search-addon"
            />
            <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
            </span>
            </form> --}}
            <ul>
            <li><a href="/">Beranda</a></li>
            {{-- <li><a href="/about">About</a></li> --}}
            <li><a href="/cart" class="active">Keranjang</a></li>
            <li><a href="/history" class="pe-5">Riwayat</a></li>
            {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                </ul>
            </li> --}}
            {{-- <li><a href="contact.html">Contact</a></li> --}}
            <form action="#" class="form-search d-flex align-items-stretch mx-auto" data-aos="fade-up" data-aos-delay="200">
                <input type="text" class="form-control" placeholder="Mencari">
                {{-- <button type="submit" class="btn btn-primary">Search</button> --}}
            </form>
            <li><a class="get-a-quote" href="/login">Masuk</a></li>
            <li><a class="get-a-quote" href="/daftar">Daftar</a></li>
            </ul>
        </nav>
        <!-- end.navbar -->
        </div>
    </header>
    <!-- End Header -->

    {{-- Start Body --}}
    <h1>
        Belum
    </h1>
    {{-- End Body --}}

@stop
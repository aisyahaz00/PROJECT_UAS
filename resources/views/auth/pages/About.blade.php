@extends('auth.layouts.app')
@section('content')
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Logis</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <!-- start.navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about" class="active">About</a></li>
          <li><a href="/service">Services</a></li>
          <li><a href="/pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
          </li>
          <li><a href="contact.html">Contact</a></li>
          <li><a class="get-a-quote" href="get-a-quote.html">Get a Quote</a></li>
        </ul>
      </nav>
      <!-- end.navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url();">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>About</h2>
              <p>Bisnis kami adalah memiliki tujuan yang penting dalam kehidupan manusia. Album kpop sendiri memiliki tujuan
                yang mendalam dan bermakna bagi para musisi dan pendengarnya. Dan adanya lagu di dalam album dapat melekat pada esensi
                dan kekuatan musik itu sendiri. 
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>
      </nav>
    </div>

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="https://www.ktown4u.com/goods_files/SH0164/goods_images/000097/GD00096254.default.1.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=2R_S5TgDWMY" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>About</h3>
            <pre>
      Melalui lirik yang diungkapkan dengan suara indah, lagu dapat menyampaikan pesan, emosi, dan pengalaman manusia dengan cara yang unik. Kpop membawa kegembiraan kehidupan budaya. Isi di dalam album sendiri meliputi photoshoot, photocard, poster lirik, CD, poster idol. 
            </pre>
          </div>
        </div>
      </div>
    </section>

    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <span>CHART</span>
          <h2>CHART</h2>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="https://www.ktown4u.com/goods_files/SH0164/goods_images/000096/GD00095687.default.4.png" class="img-fluid" alt="">
              <div class="member-content">
                <h4>EXO</h4>
                <span>EXO - The 7th Album [EXIST] (Photo Book Ver.) (Random Ver.)</span>
                <h4>Rp. 260.000</h4>
                <pre>
  Sales 146,687
  2023-07-10
  -19% Rp. 210.600
                </pre>
                <div class="social">
                  <a href="https://twitter.com/weareoneEXO?s=20"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.youtube.com/watch?v=91VhCIQNjIc&pp=ygUEZXhvIA%3D%3D"><i class="bi bi-youtube"></i></a>
                  <a href="https://instagram.com/weareone.exo?igshid=MzRlODBiNWFlZA=="><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="https://www.ktown4u.com/goods_files/SH0164/goods_images/000097/GD00096414.default.2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>ZEROBASEONE</h4>
                <span>ZEROBASEONE - The 1st Mini Album [YOUTH IN THE SHADE] (Random Ver.)</span>
                <h4>Rp. 185.000</h4>
                <pre>
  Sales 88,018
  2023-07-10
  -28% Rp. 130.000
                  </pre>
                <div class="social">
                  <a href="https://twitter.com/ZB1_official?s=20"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.youtube.com/watch?v=i0Bk73OEYq8&pp=ygUQemVybyBiYXNlIG9uZSBtdg%3D%3D"><i class="bi bi-youtube"></i></a>
                  <a href="https://instagram.com/zb1official?igshid=MzRlODBiNWFlZA=="><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="https://www.ktown4u.com/goods_files/SH0164/goods_images/000097/GD00096254.default.1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>NCT DREAM</h4>
                <span>NCT DREAM - The 3rd Mini Album [ISTJ] (Photobook Ver.) (Random Ver.)</span>
                <h4>Rp. 260.000</h4>
                <pre>
  Sales 41,821
  2023-07-17
  -19% Rp. 210.000
                  </pre>
                <div class="social">
                  <a href="https://twitter.com/NCTsmtown_DREAM?s=20"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.youtube.com/watch?v=2R_S5TgDWMY&pp=ygUJbmN0IGRyZWFt"><i class="bi bi-youtube"></i></a>
                  <a href="https://instagram.com/nct_dream?igshid=MzRlODBiNWFlZA=="><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
@stop
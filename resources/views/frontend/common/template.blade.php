<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') | Kutorenon</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/css/custom.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v2.1.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="{{ url('/') }}">Kutorenon</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li class="{{Request::segment(1) == '' ? 'active' : ''}}"> <a href="{{ url('/') }}">Beranda</a> </li>

          <li class="drop-down {{Request::segment(1) == 'profil-desa' ? 'active' : ''}}"><a href="#">Profil Desa</a>
            <ul>
              <li><a href="{{ url('profil-desa/sejarah-desa') }}">Sejarah Desa</a></li>
              <li><a href="{{ url('profil-desa/profil-desa') }}">Profil Desa</a></li>
            </ul>
          </li>

          <li class="drop-down {{Request::segment(1) == 'pemerintahan-desa' ? 'active' : ''}}"><a href="#">Pemerintahan Desa</a>
            <ul>
              <li><a href="{{ url('pemerintahan-desa/visi-misi') }}">Visi Misi</a></li>
              <li><a href="{{ url('pemerintahan-desa/pemerintahan-desa') }}">Pemerintahan Desa</a></li>
              <li><a href="{{ url('pemerintahan-desa/bpd') }}">Badan Permusyawaratan Desa</a></li>
            </ul>
          </li>

          <li class="drop-down {{Request::segment(1) == 'lembaga-desa' ? 'active' : ''}}"><a href="#">Lembaga Desa</a>
            <ul>
              @php
                  $lembaga = \App\LembagaDesa::get();
              @endphp
              @foreach ($lembaga as $item)
                <li><a href="{{ url('lembaga-desa/'. $item->slug) }}">{{$item->nama}}</a></li>
              @endforeach
            </ul>
          </li>
          
          <li class="drop-down {{Request::segment(1) == 'bumdes' ? 'active' : ''}}"><a href="#">BUMDes</a>
            <ul>
              @php
                  $bumdes = \App\Bumdes::get();
              @endphp
              @foreach ($bumdes as $item)
                <li><a href="{{ url('bumdes/'. $item->slug) }}">{{$item->nama}}</a></li>
              @endforeach
            </ul>
          </li>
          
          <li class="{{Request::segment(1) == 'berita' ? 'active' : ''}}"><a href="{{ url('berita') }}">Berita</a></li>
          <li class="{{Request::segment(1) == 'pengumuman' ? 'active' : ''}}"><a href="{{ url('pengumuman') }}">Pengumuman</a></li>
          <li class="{{Request::segment(1) == 'pengaduan' ? 'active' : ''}}"><a href="{{ url('pengaduan') }}">Pengaduan</a></li>

        </ul>

      </nav><!-- .nav-menu -->

      {{-- <a href="index.html" class="get-started-btn ml-auto">Get Started</a> --}}

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Desa Kutorenon</h3>
              <p>
                Kecamatan Sukodono <br>
                Kabupaten Lumajang<br><br>
                <strong>Telepon:</strong> +62 8234 8765 xxx<br>
                <strong>Email:</strong> kutorenon.lmj@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
                {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Lainnya</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Beranda</a> </li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('profil-desa/sejarah-desa')}}">Sejarah Desa</a> </li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('profil-desa/profil-desa')}}">Profil Desa</a> </li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('pemerintahan-desa/pemerintahan-desa') }}">Pemerintahan Desa</a> </li>
            </ul>
          </div>
          
          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="color: transparent">Lihat Juga</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('lembaga-desa'. '/' . \App\LembagaDesa::first()->slug) }}">Lembaga Desa</a> </li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('bumdes'. '/' . \App\Bumdes::first()->slug) }}">BUMDes</a> </li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('berita') }}">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('pengumuman') }}">Pengumuman</a></li>
            </ul>
          </div>

          {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div> --}}

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <strong><span>Kutorenon 2020</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
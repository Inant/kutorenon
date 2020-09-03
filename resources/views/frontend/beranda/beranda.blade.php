@extends('frontend.common.template')
@section('title')
    Beranda
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        {{-- <div class="carousel-item active" style="background-image: url({{ asset('frontend/assets/img/slide/slide-1.jpg') }})"> --}}
        <div class="carousel-item active" style="background-image: url({{ asset('backend/img/balai-minak-koncar-min.jpeg') }})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Desa Kutorenon</span></h2>
              <p class="animate__animated animate__fadeInUp">Selamat datang di website resmi Desa Kutorenon, Kecamatan Sukodono, Kabupaten Lumajang.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lebih Lanjut</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->        
        {{-- <div class="carousel-item" style="background-image: url({{ asset('frontend/assets/img/slide/slide-2.jpg') }})"> --}}
        <div class="carousel-item" style="background-image: url({{ asset('backend/img/balai-minak-koncar-malam-min.jpeg') }})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Profil Desa Kutorenon</h2>
              <p class="animate__animated animate__fadeInUp">{!!implode(' ', array_slice(explode(' ', \App\ProfilDesa::first()->profil), 0, 20))!!}...</p>
              <a href="#blog" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lebih Lanjut</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{ asset('backend/img/profil-desa/sejarah' . '/' . \App\Sejarah::first()->cover) }})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Sejarah Desa Kutorenon</h2>
              <p class="animate__animated animate__fadeInUp">{!!implode(' ', array_slice(explode(' ', \App\Sejarah::first()->sejarah), 0, 20))!!}...</p>
              <a href="#blog" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lebih Lanjut</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Sambutan Section ======= -->
    <section id="about" class="about">
      <div class="container">
        @php
            $sambutan = \App\SambutanKades::first();
        @endphp
        <div class="row content">
          <div class="col-lg-6">
            {{-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3> --}}
            <img src="{{ asset('backend/img/sambutan-kades'.'/'.$sambutan->foto_kades) }}" alt="" class="img-fluid">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Sambutan Kepala Desa</h3>
            <hr>
            {!! $sambutan->sambutan !!}
          </div>
        </div>
      </div>
    </section><!-- End Sambutan Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
        <div class="section-title">
          <h2>Profil</h2>
          <p>Profil dan Sejarah Desa Kutorenon</p>
        </div>
        <div class="row">
          @php
              $sejarah = \App\Sejarah::first();
          @endphp
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="{{ asset('backend/img/profil-desa/sejarah'. '/' . $sejarah->cover) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ url('profil-desa/sejarah-desa') }}">Sejarah Desa</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  {{-- <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li> --}}
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time>{{date('d-m-Y', strtotime($sejarah->created_at))}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {!!implode(' ', array_slice(explode(' ', $sejarah->sejarah), 0, 20))!!} ...
                </p>
                <div class="read-more">
                  <a href="{{ url('profil-desa/sejarah-desa') }}">Lebih Lanjut</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          @php
              $profil = \App\ProfilDesa::first();
          @endphp
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="{{ asset('backend/img/profil-desa/profil'. '/' . $profil->cover) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ url('profil-desa/profil-desa') }}">Profil Desa</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  {{-- <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li> --}}
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time>{{date('d-m-Y', strtotime($profil->created_at))}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {!!implode(' ', array_slice(explode(' ', $profil->profil), 0, 50))!!}...
                </p>
                <div class="read-more">
                  <a href="{{ url('profil-desa/profil-desa') }}">Lebih Lanjut</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Berita Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
        <div class="section-title">
          <h2>Berita</h2>
          <p>Berita Seputar Desa Kutorenon</p>
        </div>
        <div class="row">
          @php
              $berita = \App\Berita::orderBy('id', 'desc')->limit(6)->get();
          @endphp
          @foreach ($berita as $item)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <article class="entry">

                <div class="entry-img">
                  <img src="{{ asset('backend/img/berita'. '/' . $item->foto) }}" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                  <a href="{{ url('berita'. '/' . $item->slug, []) }}">{!!$item->judul!!}</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">{{$item->penulis}}</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time>{{date('d-m-Y', strtotime($item->created_at))}}</time></a></li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    {!! $item->ulasan_singkat !!}
                  </p>
                  <div class="read-more">
                    <a href="{{ url('berita'. '/' . $item->slug, []) }}">Lebih Lanjut</a>
                  </div>
                </div>

              </article><!-- End blog entry -->
            </div>
          @endforeach
      </div>
    </section><!-- End Berita Section -->
    
    {{-- map --}}
    <section class="services" id="services">
      <div class="container">

        <div class="section-title">
          <h2>Lokasi</h2>
          <p>Lokasi Desa Kutorenon</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31600.684719422872!2d113.21401580169122!3d-8.092754138679325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd65d03bdb5266d%3A0x3ff04ca8ef936bf6!2sKutorenon%2C%20Sukodono%2C%20Kabupaten%20Lumajang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1598865258751!5m2!1sid!2sid" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </section>
    {{-- end map --}}
  </main><!-- End #main -->
@endsection
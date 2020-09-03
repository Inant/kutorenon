@extends('frontend.common.template')

@section('title')
    Suara Redaksi
@endsection

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Suara Redaksi</h2>
        <ol>
          <li><a href="#">Berita</a></li>
          <li>Suara Redaksi</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container">

      <div class="row">
        @foreach ($allSuaraRedaksi as $item)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="{{ asset('backend/img/suara-redaksi' . '/' . $item->foto) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ url('suara-redaksi' . '/' . $item->slug) }}">{{$item->judul}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">{{$item->penulis}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time>{{date('d-m-Y', strtotime($item->created_at))}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                {!!$item->ulasan_singkat!!}
                <div class="read-more">
                  <a href="{{ url('suara-redaksi' . '/' . $item->slug) }}">Lebih Lanjut</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>
        @endforeach

      </div>

      <div class="blog-pagination" data-aos="fade-up">
        <ul class="justify-content-center">
          {!!$allSuaraRedaksi->appends(Request::all())->links()!!}
        </ul>
      </div>

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection
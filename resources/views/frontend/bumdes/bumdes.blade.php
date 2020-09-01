@extends('frontend.common.template')

@section('title')
    {{$bumdes->nama}}
@endsection

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Badan Usaha Milik Desa</h2>
        <ol>
          <li><a href="#">BUMDes</a></li>
          <li>{{$bumdes->nama}}</li>
        </ol>
      </div>

    </div>
  </section>
  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry entry-single">

            <div class="entry-img">
              <img src="{{ asset('backend/img/bumdes' . '/' . $bumdes->foto) }}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="#">{{$bumdes->nama}}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Administrator</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time>{{date('d-m-Y', strtotime($bumdes->created_at))}}</time></a></li>
                {{-- <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li> --}}
              </ul>
            </div>

            <div class="entry-content">
              <h5>Ketua Unit : {{$bumdes->ketua_unit}} </h5>
              <hr>
              {!!$bumdes->konten!!}
            </div>

            <div class="entry-footer clearfix">
              <div class="float-right share">
                <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
              </div>

            </div>

          </article><!-- End blog entry -->

          

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar">

            <h3 class="sidebar-title">Baca Juga</h3>
            <div class="sidebar-item categories">
              @php
                  $otherBumdes = \App\Bumdes::where('slug', '<>' ,$bumdes->slug)->get();
              @endphp
              <ul>
                @foreach ($otherBumdes as $item)
                  <li><i class="bx bx-chevron-right"></i><a href="{{ url('bumdes' . '/' . $item->slug) }}">BUMDes {{$item->nama}}</a></li>
                @endforeach
              </ul>
            </div><!-- End sidebar categories-->
            @php
                $berita = \App\Berita::orderBy('id', 'desc')->limit(6)->get();
            @endphp
            <h3 class="sidebar-title">Berita Terbaru</h3>
            <div class="sidebar-item recent-posts">
              @foreach ($berita as $item)
                <div class="post-item clearfix">
                  <img src="{{ asset('backend/img/berita'.'/'.$item->foto) }}" alt="">
                  <h4><a href="{{ url('berita'.'/'.$item->slug) }}">{{$item->judul}}</a></h4>
                  <time>{{date('d-m-Y', strtotime($item->created_at))}}</time>
                </div>
              @endforeach
            </div><!-- End sidebar recent posts-->
            {{-- pengumuman --}}
            @php
              $pengumuman = \App\Pengumuman::orderBy('id', 'desc')->limit(4)->get();
            @endphp
            <h3 class="sidebar-title">Pengumuman</h3>
            <div class="sidebar-item recent-posts">
              @foreach ($pengumuman as $item)
                <div class="post-item clearfix">
                  <img src="{{ asset('backend/img/pengumuman'.'/'.$item->foto) }}" alt="">
                  <h4><a href="{{ url('pengumuman'.'/'.$item->slug) }}">{{$item->judul}}</a></h4>
                  <time>{{date('d-m-Y', strtotime($item->created_at))}}</time>
                </div>
              @endforeach
            </div><!-- End pengumuman-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection
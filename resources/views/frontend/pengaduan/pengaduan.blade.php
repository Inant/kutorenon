@extends('frontend.common.template')

@section('title')
    Pengaduan
@endsection

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Pengaduan</h2>
        <ol>
          <li><a href="#">Pengaduan</a></li>
          <li>Pengaduan</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      @if (session('status'))
            <br>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
      <iframe style="border:0; width: 100%;" src="https://www.google.com/maps/embed?pb=!4v1598976171125!6m8!1m7!1sfjoZz2E-_zmKRZX65jEZUA!2m2!1d-8.103738826607348!2d113.2308166723816!3f160.53519168297893!4f0!5f1.1924812503605782" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

      <div class="row mt-5">
        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Lokasi Balai Desa:</h4>
              <p>Jl. Nasional III, Kecamatan Sukodono, Kabupaten Lumajang</p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>kutorenon.lmj@gmail.com</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Telepon:</h4>
              <p>+62 8234 8765 xxx</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="{{ route('submit-pengaduan') }}" method="post">
            @csrf
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Anda" value="{{old('nama')}}" />
                @error('nama')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Masukan Email yang valid" value="{{old('email')}}" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" rows="5" data-rule="required" data-msg="Sampaikan keluhan anda" placeholder="Keluhan">{{old('keluhan')}}</textarea>
              @error('keluhan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
              @enderror
            </div>
            <div class="mb-3">
              {{-- <div class="loading">Loading</div> --}}
              {{-- <div class="error-message"></div> --}}
              {{-- <div class="sent-message">Your message has been sent. Thank you!</div> --}}
            </div>
            <div class="text-center"><button type="submit" class="btn btn-danger">Kirim</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
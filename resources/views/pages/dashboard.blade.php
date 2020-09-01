@extends('common/template')
@section('content')
<!-- Header -->
<div class="header bg-white pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
      </div>
      <!-- Card stats -->
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-2">Jumlah User</h5>
                  <span class="h2 font-weight-bold mb-1"> {{\App\User::count()}} </span>
                </div>
                <div class="col-auto mt-1">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <i class="ni ni-single-02"></i>
                  </div>
                </div>
              </div>
              <p class="mt-4 mb-0 text-sm">
                {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                <span class="text-nowrap">Since last month</span> --}}
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-2">Jumlah Berita</h5>
                  <span class="h2 font-weight-bold mb-1"> {{\App\Berita::count()}} </span>
                </div>
                <div class="col-auto mt-1">
                  <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                    <i class="ni ni-planet"></i>
                  </div>
                </div>
              </div>
              <p class="mt-4 mb-0 text-sm">
                {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                <span class="text-nowrap">Since last month</span> --}}
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-2">Jumlah Pengumuman</h5>
                  <span class="h2 font-weight-bold mb-1"> {{\App\Pengumuman::count()}} </span>
                </div>
                <div class="col-auto mt-1">
                  <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                    <i class="ni ni-notification-70"></i>
                  </div>
                </div>
              </div>
              <p class="mt-4 mb-0 text-sm">
                {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> --}}
                {{-- <span class="text-nowrap">*Bulan Ini</span> --}}
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-2">Jumlah Pengaduan</h5>
                  <span class="h2 font-weight-bold mb-1"> {{\App\Pengaduan::count()}} </span>
                </div>
                <div class="col-auto mt-1">
                  <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                    <i class="ni ni-send"></i>
                  </div>
                </div>
              </div>
              <p class="mt-4 mb-0 text-sm">
                {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> --}}
                {{-- <span class="text-nowrap">*Bulan Ini</span> --}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
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
                  <h5 class="card-title text-uppercase text-muted mb-2">Jumlah Tipe Kamar</h5>
                  <span class="h2 font-weight-bold mb-1"> 4 </span>
                </div>
                <div class="col-auto mt-1">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <i class="ni ni-bullet-list-67"></i>
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
                  <h5 class="card-title text-uppercase text-muted mb-2">Jumlah Kamar</h5>
                  <span class="h2 font-weight-bold mb-1"> 5 </span>
                </div>
                <div class="col-auto mt-1">
                  <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                    <i class="ni ni-box-2"></i>
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
                  <h5 class="card-title text-uppercase text-muted mb-2">Reservasi</h5>
                  @php
                      $month = date('m');
                      $year = date('Y');
                  @endphp
                  <span class="h2 font-weight-bold mb-1"> 9 </span>
                </div>
                <div class="col-auto mt-1">
                  <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                    <i class="ni ni-cart"></i>
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
                  <h5 class="card-title text-uppercase text-muted mb-2">Reservasi</h5>
                  @php
                      $month = date('m');
                      $year = date('Y');
                  @endphp
                  <span class="h2 font-weight-bold mb-1"> 9 </span>
                </div>
                <div class="col-auto mt-1">
                  <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                    <i class="ni ni-cart"></i>
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
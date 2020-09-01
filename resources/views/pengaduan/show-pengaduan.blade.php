@extends('common/template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">{{$pageInfo}}</h3>
                </div>
              </div>
            </div>
              <div class="card-body">
                <label for="" class="form-control-label">Nama</label>
                <input type="text" readonly class="form-control" id="customFile" value="{{$pengaduan->nama}}">
                <br>
                
                <label for="" class="form-control-label">Email</label>
                <input type="text" readonly class="form-control" id="customFile" value="{{$pengaduan->email}}">
                <br>

                <label for="" class="form-control-label">Keluhan</label>
                <textarea readonly rows="5" class="form-control">{{ $pengaduan->keluhan}}</textarea>
                <br>
              </div>
        </div>
    </div>
</div>
@endsection
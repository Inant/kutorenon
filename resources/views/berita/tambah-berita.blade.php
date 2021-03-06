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
            <div class="card-body py-0 row">
              <div class="col-12">
                  @if (session('status'))
                      <br>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session('status') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @endif
              </div>
            </div>
            <form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <label for="" class="form-control-label">Judul Berita</label>
                  <input type="text" name="judul" value="{{old('judul')}}" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul Berita">
                  @error('judul')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <br>
                  
                  <label for="" class="form-control-label">Penulis</label>
                  <input type="text" name="penulis" value="{{old('penulis')}}" class="form-control @error('penulis') is-invalid @enderror" placeholder="ex : Lebron James">
                  @error('penulis')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <br>
                  
                  <label for="" class="form-control-label">Foto</label>
                  <input type="file" name="foto" class="form-control" id="customFile">
                  @error('foto')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <br>

                  <label for="" class="form-control-label">Ulasan Singkat</label>
                  <textarea name="ulasan_singkat" id="editor2" rows="1" class="form-control @error('ulasan_singkat') is-invalid @enderror">{{old('ulasan_singkat')}}</textarea>
                  @error('ulasan_singkat')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <br>

                  <label for="" class="form-control-label">Konten</label>
                  <textarea name="konten" id="editor" class="form-control @error('konten') is-invalid @enderror">{{old('konten')}}</textarea>
                  @error('konten')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <br>

                  <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                  <button type="reset" class="btn btn-secondary"><span class="fa fa-times"></span> Reset</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
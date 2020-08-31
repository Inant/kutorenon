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
            <form action="{{ route('sambutan-kades.update', $sambutanKades->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="card-body">
                  <label for="" class="form-control-label">Foto Kepala Desa</label>
                  <br>
                  <img src="{{ asset('backend/img/sambutan-kades/'.$sambutanKades->foto_kades) }}" alt="" width="500px">
                  <br>
                    <span>
                        <i>*Abaikan jika tidak ingin mengubah foto</i>
                    </span>
                  <input type="file" name="foto_kades" class="form-control" id="customFile">
                  @error('foto_kades')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <br>

                  <label for="" class="form-control-label">Sambutan Kepala Desa</label>
                  <textarea name="sambutan" id="editor" class="form-control @error('sambutan') is-invalid @enderror">{{old('sambutan', $sambutanKades->sambutan)}}</textarea>
                  @error('sambutan')
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
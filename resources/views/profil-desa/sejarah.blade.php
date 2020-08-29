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
            <form action="{{ route('sejarah.update', $sejarah->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="card-body">
                  <label for="" class="form-control-label">Cover</label>
                  <br>
                  <img src="{{ asset('backend/img/profil-desa/sejarah/'.$sejarah->cover) }}" alt="" width="500px">
                  <br>
                    <span>
                        <i>*Abaikan jika tidak ingin mengubah cover</i>
                    </span>
                  <input type="file" name="cover" class="form-control" id="customFile">
                  @error('cover')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <br>

                  <label for="" class="form-control-label">Sejarah</label>
                  <textarea name="sejarah" id="editor" class="form-control @error('sejarah') is-invalid @enderror">{{old('sejarah', $sejarah->sejarah)}}</textarea>
                  @error('sejarah')
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
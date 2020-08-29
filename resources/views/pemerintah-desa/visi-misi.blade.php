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
            <form action="{{ route('visi-misi.update', $visiMisi->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="card-body">
                  <label for="" class="form-control-label">Cover</label>
                  <br>
                  <img src="{{ asset('backend/img/pemerintah-desa/visi-misi/'.$visiMisi->cover) }}" alt="" width="500px">
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

                  <label for="" class="form-control-label">Visi Misi</label>
                  <textarea name="visi_misi" id="editor" class="form-control @error('visi_misi') is-invalid @enderror">{{old('visi_misi', $visiMisi->visi_misi)}}</textarea>
                  @error('visi_misi')
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
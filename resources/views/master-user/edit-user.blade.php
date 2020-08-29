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
            <form action="{{ route('user.update', $user->id) }}" method="post">
              @csrf
              @method('put')
              <div class="card-body">
                  <label for="" class="form-control-label">Nama User</label>
                  <input type="text" name="nama" value="{{old('nama', $user->nama)}}" class="form-control @error('nama') is-invalid @enderror" placeholder="ex : Lebron James">
                  @error('nama')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <br>

                  <label for="" class="form-control-label">Username</label>
                  <input type="text" name="username" value="{{old('username', $user->username)}}" class="form-control @error('username') is-invalid @enderror" placeholder="ex : lebron">
                  @error('username')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <br>

                  <label for="" class="form-control-label">Email</label>
                  <input type="email" name="email" value="{{old('email', $user->email)}}" class="form-control @error('email') is-invalid @enderror" placeholder="ex : lebron@baratha.com">
                  @error('email')
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
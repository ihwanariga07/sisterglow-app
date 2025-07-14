@extends('layout.guest')
@section('title','Register')

@section('content')
<div class="container-fluid p-0">
  <div class="row m-0">
    <div class="col-12 p-0">
      <div class="login-card login-dark">
        <div>

          <div class="text-center mb-4">
            <a class="logo" href="{{ url('/') }}">
             
              <img class="img-fluid for-dark"  src="{{ asset('assets/images/logo/logosister.png') }}">
            </a>
          </div>

          <div class="login-main">
            <form class="theme-form" method="POST" action="{{ route('register') }}">
              @csrf
              <h4>Buat akun</h4>
              <p>Masukkan detail pribadi anda untuk mendaftar</p>

              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name"
                       class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name') }}" required autofocus>
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="form-group">
                <label>Alamat Email</label>
                <input type="email" name="email"
                       class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email') }}" required>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="form-group">
                <label>Kata Sandi</label>
                <input type="password" name="password"
                       class="form-control @error('password') is-invalid @enderror"
                       required>
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="form-group">
                <label>Konfirmasi kata sandi</label>
                <input type="password" name="password_confirmation" class="form-control" required>
              </div>

              <div class="form-group">
                <button class="btn btn-primary btn-block w-100" type="submit">Daftar</button>
              </div>

              <p class="mt-2 mb-0 text-center">
                Sudah memiliki akun?<a class="ms-2" href="{{ route('login') }}">Masuk</a>
              </p>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

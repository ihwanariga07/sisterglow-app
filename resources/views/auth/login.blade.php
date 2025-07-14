@extends('layout.guest')
@section('title','Login | Cuba Admin')

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
            <form class="theme-form" method="POST" action="{{ route('login') }}">
              @csrf
              <h4>Masukkan akun</h4>
              <p>Masukkan email &amp; kata sandi anda untuk masuk</p>

              <div class="form-group">
                <label>Alamat Email</label>
                <input type="email" name="email"
                       class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email') }}" required autofocus>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="form-group">
                <label>Kata sandi</label>
                <div class="form-input position-relative">
                  <input type="password" name="password"
                         class="form-control @error('password') is-invalid @enderror"
                         required>
                  <div class="show-hide"><span class="show"></span></div>
                  @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
              </div>

              <div class="form-group mb-0">
                <div class="form-check">
                  <input id="remember_me" type="checkbox" name="remember"
                         class="checkbox-primary form-check-input"
                         {{ old('remember') ? 'checked' : '' }}>
                  <label class="text-muted form-check-label" for="remember_me">Ingat kata sandi</label>
                </div>
                <a class="link" href="{{ route('password.request') }}">Lupa sandi?</a>
                <div class="text-end">
                  <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Masuk</button>
                </div>
              </div>

              <h6 class="text-muted mt-4 or">Atau masuk dengan</h6>
              <div class="social mt-4">
                <div class="btn-showcase">
                  <a class="btn btn-light" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  <a class="btn btn-light" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                  <a class="btn btn-light" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a class="btn btn-light" href="#"><i class="fa-brands fa-google"></i></a>
                </div>
              </div>

              <p class="mt-4 mb-0 text-center">
                Tidak punya akun?<a class="ms-2" href="{{ route('register') }}">Buat Akun</a>
              </p>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

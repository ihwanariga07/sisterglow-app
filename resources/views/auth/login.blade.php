@extends('layouts.guest')
@section('title','Login | Cuba Admin')

@section('content')
<div class="container-fluid p-0">
  <div class="row m-0">
    <div class="col-12 p-0">
      <div class="login-card login-dark">
        <div>

          <div class="text-center mb-4">
            <a class="logo" href="{{ url('/') }}">
              <img class="img-fluid for-light" src="{{ asset('cuba-assets/images/logo/logo.png') }}">
              <img class="img-fluid for-dark" src="{{ asset('cuba-assets/images/logo/logo_dark.png') }}">
            </a>
          </div>

          <div class="login-main">
            <form class="theme-form" method="POST" action="{{ route('login') }}">
              @csrf
              <h4>Sign in to account</h4>
              <p>Enter your email & password to login</p>

              {{-- Email --}}
              <div class="form-group">
                <label>Email Address</label>
                <input id="email" type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autofocus>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              {{-- Password --}}
              <div class="form-group">
                <label>Password</label>
                <div class="form-input position-relative">
                  <input id="password" type="password"
                         class="form-control @error('password') is-invalid @enderror"
                         name="password" required>
                  <div class="show-hide"><span class="show"></span></div>
                  @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
              </div>

              {{-- Ingat Saya + Submit --}}
              <div class="form-group mb-0">
                <div class="form-check">
                  <input class="checkbox-primary form-check-input" id="remember_me" type="checkbox" name="remember">
                  <label class="text-muted form-check-label" for="remember_me">Remember password</label>
                </div>
                <a class="link" href="{{ route('password.request') }}">Forgot password?</a>
                <div class="text-end">
                  <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Sign in</button>
                </div>
              </div>

              <h6 class="text-muted mt-4 or">Or Sign in with</h6>
              <div class="social mt-4">
                <div class="btn-showcase">
                  <a class="btn btn-light" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  <a class="btn btn-light" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                  <a class="btn btn-light" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a class="btn btn-light" href="#"><i class="fa-brands fa-google"></i></a>
                </div>
              </div>

              <p class="mt-4 mb-0 text-center">
                Don't have account?
                <a class="ms-2" href="{{ route('register') }}">Create Account</a>
              </p>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@extends('layout.guest')
@section('title','Register | Cuba Admin')

@section('content')
<div class="container-fluid p-0">
  <div class="row m-0">
    <div class="col-12 p-0">
      <div class="login-card login-dark">
        <div>

          <div class="text-center mb-4">
            <a class="logo" href="{{ url('/') }}">
              <img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}">
              <img class="img-fluid for-dark"  src="{{ asset('assets/images/logo/logo_dark.png') }}">
            </a>
          </div>

          <div class="login-main">
            <form class="theme-form" method="POST" action="{{ route('register') }}">
              @csrf
              <h4>Create your account</h4>
              <p>Enter your personal details to register</p>

              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name"
                       class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name') }}" required autofocus>
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email"
                       class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email') }}" required>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password"
                       class="form-control @error('password') is-invalid @enderror"
                       required>
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
              </div>

              <div class="form-group">
                <button class="btn btn-primary btn-block w-100" type="submit">Register</button>
              </div>

              <p class="mt-2 mb-0 text-center">
                Already have an account?<a class="ms-2" href="{{ route('login') }}">Sign in</a>
              </p>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

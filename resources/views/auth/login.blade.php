@extends('layouts.app')

@section('content')
  <div class="page page-center">
    <div class="container-tight container py-4">
      <div class="mb-4 text-center">
        <a class="navbar-brand navbar-brand-autodark" href="{{ url('/') }}">
          <img src="{{ asset('static/logo.svg') }}" alt="" height="36">
        </a>
      </div>
      <div class="card card-md shadow-sm">
        <div class="card-body">
          <h2 class="h2 text-uppercase mb-4 text-center">{{ __('Login to your account') }}</h2>
          <form action="{{ url('auth/login') }}" method="post">
            @csrf
            <div class="mb-3">
              <label class="form-label">{{ __('Email') }}</label>
              <input class="form-control @if ($errors->has('email')) is-invalid @elseif (old('email')) is-valid @endif" id="email"
                name="email" type="text" value="{{ old('email') }}" placeholder="your@email.com">
              <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            </div>
            <div class="mb-2">
              <label class="form-label">
                {{ __('Password') }}
                <span class="form-label-description">
                  <a href="{{ url('/') }}">{{ __('I forgot password') }}</a>
                </span>
              </label>
              <input class="form-control @if ($errors->has('password')) is-invalid @elseif (old('password')) is-valid @endif" name="password"
                type="password" value="{{ old('password') }}" placeholder="{{ __('Your password') }}">
              @if ($errors->has('password'))
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
              @endif
            </div>
            <div class="mb-2 mt-3">
              <label class="form-check">
                <input class="form-check-input" id="remember" name="remember" type="checkbox">
                <span class="form-check-label">{{ __('Remember me on this device') }}</span>
              </label>
            </div>
            <div class="form-footer">
              <button class="btn btn-primary w-100" type="submit">{{ __('Sign in') }}</button>
            </div>
          </form>
        </div>
        {{-- <div class="hr-text">or</div>
        <div class="card-body">
          <div class="row">
            <div class="col"><a class="btn w-100" href="#">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                <svg class="icon text-github" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path
                    d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5">
                  </path>
                </svg>
                Login with Github
              </a></div>
            <div class="col"><a class="btn w-100" href="#">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                <svg class="icon text-twitter" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path
                    d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z">
                  </path>
                </svg>
                Login with Twitter
              </a></div>
          </div>
        </div> --}}
      </div>
      <div class="text-muted mt-3 text-center">
        {{ __('Don\'t have account yet?') }} <a href="{{ route('register') }}" tabindex="-1">{{ __('Sign up') }}</a>
      </div>
    </div>
  </div>
@endsection

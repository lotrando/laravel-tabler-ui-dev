@extends('layouts.app')

@section('content')
  <div class="page page-center">
    <div class="container-tight container py-4">
      <div class="mb-4 text-center">
        <a class="navbar-brand navbar-brand-autodark" href="{{ url('/') }}">
          <img src="{{ asset('static/logo.svg') }}" alt="" height="36">
        </a>
      </div>
      <form class="card card-md shadow-sm" action="{{ url('auth/register') }}" method="post" autocomplete="off">
        @csrf
        <div class="card-body">
          <h2 class="card-title mb-4 text-center">{{ __('Create new account') }}</h2>
          <div class="mb-3">
            <label class="form-label">{{ __('Name') }}</label>
            <input class="form-control @if ($errors->has('name')) is-invalid @elseif (old('name')) is-valid @endif" name="name"
              type="text" value="{{ old('name') }}" placeholder="{{ __('Your name') }}">
            @if ($errors->has('name'))
              <div class="invalid-feedback">{{ $errors->first('name') }}</div>
            @endif
          </div>
          <div class="mb-3">
            <label class="form-label">{{ __('Email') }}</label>
            <input class="form-control @if ($errors->has('email')) is-invalid @elseif (old('email')) is-valid @endif" name="email"
              type="text" value="{{ old('email') }}" placeholder="{{ __('Enter Email') }}">
            @if ($errors->has('email'))
              <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @endif
          </div>
          <div class="mb-3">
            <label class="form-label">{{ __('Password') }}</label>
            <input class="form-control @if ($errors->has('password')) is-invalid @elseif (old('password')) is-valid @endif" name="password"
              type="password" value="{{ old('password') }}" placeholder="{{ __('Your password') }}">
            @if ($errors->has('password'))
              <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            @endif
          </div>
          <div class="mb-3">
            <label class="form-label">{{ __('Password confirmation') }}</label>
            <input class="form-control @if ($errors->has('password')) is-invalid @elseif (old('password_confirmation')) is-valid @endif"
              name="password_confirmation" type="password" placeholder="{{ __('Password confirmation') }}">
          </div>
          <div class="mb-3">
            <label class="form-check">
              <input class="form-check-input" type="checkbox">
              <span class="form-check-label">{{ __('Agree the') }} <a href="./terms-of-service.html" tabindex="-1">{{ __('terms and policy') }}</a>.</span>
            </label>
          </div>
          <div class="form-footer">
            <button class="btn btn-primary w-100" type="submit">{{ __('Create new account') }}</button>
          </div>
        </div>
      </form>
      <div class="text-muted mt-3 text-center">
        {{ __('Already have account?') }} <a href="{{ route('login') }}" tabindex="-1">{{ __('Sign in') }}</a>
      </div>
    </div>
  </div>
@endsection

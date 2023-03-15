@extends('layouts.app')

@section('content')
  <div class="page page-center">
    <div class="container-tight container py-4">
      <div class="mb-4 text-center">
        <a class="navbar-brand navbar-brand-autodark" href="{{ url('/') }}">
          <img src="{{ asset('static/logo.svg') }}" alt="" height="36">
        </a>
      </div>
      <form class="card card-md" action="" method="post" autocomplete="off" novalidate="">
        @csrf
        <div class="card-body">
          <h2 class="card-title mb-4 text-center">{{ __('Create new account') }}</h2>
          <div class="mb-3">
            <label class="form-label">{{ __('Name') }}</label>
            <input class="form-control" type="text" placeholder="{{ __('Enter name') }}">
          </div>
          <div class="mb-3">
            <label class="form-label">{{ __('Email address') }}</label>
            <input class="form-control" type="email" placeholder="{{ __('Enter email') }}">
          </div>
          <div class="mb-3">
            <label class="form-label">{{ __('Password') }}</label>
            <div class="input-group input-group-flat">
              <input class="form-control" type="password" placeholder="{{ __('Password') }}" autocomplete="off">
              <span class="input-group-text">
                <a class="link-secondary" data-bs-toggle="tooltip" data-bs-original-title="{{ __('Show password') }}" href="#"
                  aria-label="{{ __('Show password') }}">
                  <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                  </svg>
                </a>
              </span>
            </div>
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
        {{ __('Already have account?') }} <a href="./sign-in.html" tabindex="-1">{{ __('Sign in') }}</a>
      </div>
    </div>
  </div>
@endsection

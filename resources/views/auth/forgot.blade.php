@extends('layouts.app')

@section('content')
  <div class="page page-center">
    <div class="container-tight container py-4">
      <div class="mb-4 text-center">
        <a class="navbar-brand navbar-brand-autodark" href="."><img src="./static/logo.svg" alt="" height="36"></a>
      </div>
      <form class="card card-md" action="./" method="get" autocomplete="off" novalidate="">
        <div class="card-body">
          <h2 class="card-title mb-4 text-center">Forgot password</h2>
          <p class="text-muted mb-4">Enter your email address and your password will be reset and emailed to you.</p>
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input class="form-control" type="email" placeholder="Enter email">
          </div>
          <div class="form-footer">
            <a class="btn btn-primary w-100" href="#">
              <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
              <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                <path d="M3 7l9 6l9 -6"></path>
              </svg>
              Send me new password
            </a>
          </div>
        </div>
      </form>
      <div class="text-muted mt-3 text-center">
        Forget it, <a href="./sign-in.html">send me back</a> to the sign in screen.
      </div>
    </div>
  </div>
@endsection

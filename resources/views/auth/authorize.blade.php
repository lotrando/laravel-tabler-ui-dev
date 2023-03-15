@extends('layouts.app')

@section('content')
  <div class="page page-center">
    <div class="container-tight container py-4">
      <div class="mb-4 text-center">
        <a class="navbar-brand navbar-brand-autodark" href="."><img src="./static/logo.svg" alt="" height="36"></a>
      </div>
      <div class="text-center">
        <div class="my-5">
          <h2 class="h1">Check your inbox</h2>
          <p class="fs-h3 text-muted">
            We've sent you a magic link to <strong>support@tabler.io</strong>.<br>
            Please click the link to confirm your address.
          </p>
        </div>
        <div class="text-muted mt-3 text-center">
          Can't see the email? Please check the spam folder.<br>
          Wrong email? Please <a href="#">re-enter your address</a>.
        </div>
      </div>
    </div>
  </div>
@endsection

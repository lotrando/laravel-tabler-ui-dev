<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Tabler comes with tons of well-designed components and features." />
  <link href="{{ asset('img/favicons/favicon.ico') }}" rel="shortcut icon" />
  <link href="{{ asset('css/tabler.css') }}" rel="stylesheet">
  <title>Tabler</title>
</head>

<body class="d-flex flex-column theme-light">
  @yield('content')
  @include('sweetalert::alert')
  <script src="{{ asset('js/tabler.min.js') }}"></script>
</body>

</html>

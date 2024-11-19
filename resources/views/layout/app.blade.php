<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>data barang</title>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    @include('layout.header')
    @yield('content')
    @include('layout.footer')
  </body>
</html>
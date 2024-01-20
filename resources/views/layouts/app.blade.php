<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('starter/favicon.ico') }}">

    <title>Survei Kepuasan Masyarakat</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('starter/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
  </head>

  <body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">SKM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('index') }}">Beranda</a>
            </li>
            <li class="nav-item @if (Route::currentRouteName() == 'questionnaire') active @endif">
              <a class="nav-link" href="{{ route('questionnaire') }}">Kuisioner</a>
            </li>
            <li class="nav-item @if (Route::currentRouteName() == 'report') active @endif">
              <a class="nav-link" href="{{ route('report') }}">Laporan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('starter/jquery-slim.min.js') }}"></script>
    <script src="{{ asset('starter/popper.min.js') }}"></script>
    <script src="{{ asset('starter/bootstrap.min.js') }}"></script>
  </body>
</html>

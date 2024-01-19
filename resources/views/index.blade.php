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

    <!-- Custom styles for this template -->
    <link href="{{ asset('starter/cover.css') }}" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">SKM</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="{{ route('index') }}">Beranda</a>
            <a class="nav-link" href="{{ route('questionnaire') }}">Kuisioner</a>
            <a class="nav-link" href="{{ route('report') }}">Laporan</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">SKM</h1>
        <p class="lead">SURVEI KEPUASAN MASYARAKAT (SKM) PADA UNIT LAYANAN DINAS KOMUNIKASI DAN INFORMATIKA KOTA PONTIANAK</p>
        <p class="lead">
          <a href="{{ route('questionnaire') }}" class="btn btn-lg btn-secondary">Kuisioner</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('starter/jquery-slim.min.js') }}"></script>
    <script src="{{ asset('starter/popper.min.js') }}"></script>
    <script src="{{ asset('starter/bootstrap.min.js') }}"></script>
  </body>
</html>

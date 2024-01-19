<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('starter/favicon.ico') }}">

    <title>Survei Kepuasan Masyarakat - Kuisioner</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('starter/bootstrap.min.css') }}" rel="stylesheet">
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
      <div class="row py-5">
        <div class="col-md-12 order-md-1">
          <form action="{{ route('questionnaire.post') }}" method="post">
            <h4 class="mb-3">PROFIL RESPONDEN</h4>
            <div class="d-block my-3 mb-3">
              <label for="gender">Jenis Kelamin<span class="text-danger">*</span></label>
              <div class="custom-control custom-radio">
                <input id="male" name="gender" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="male">Laki-Laki</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="female" name="gender" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="female">Perempuan</label>
              </div>
            </div>

            <div class="mb-3">
              <label for="age">Umur<span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="age" placeholder="25" required name="age">
              <div class="text-muted">
                <small>Umur dalam tahun</small>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
            </div>

            <div class="mb-3">
              <label for="education">Pendidikan<span class="text-danger">*</span></label>
              <select class="custom-select d-block w-100" id="education" required name="education">
                <option value="" selected disabled>...</option>
                <option value="sd">SD/Sederajat</option>
                <option value="smp">SMP/Sederajat</option>
                <option value="sma">SMAS/Sederajat</option>
                <option value="d1">Diploma 1</option>
                <option value="d2">Diploma 2</option>
                <option value="d3">Diploma 3</option>
                <option value="d4">Diploma 4</option>
                <option value="s1">Strata 1</option>
                <option value="s2">Strata 2</option>
                <option value="s3">Strata 3</option>
                <option value="lainnya">Lainnya</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="occupation">Pekerjaan<span class="text-danger">*</span></label>
              <select class="custom-select d-block w-100" id="occupation" required name="occupation">
                <option value="" selected disabled>...</option>
                <option value="pns">PNS</option>
                <option value="tni">TNI</option>
                <option value="polri">POLRI</option>
                <option value="swasta">Swasta</option>
                <option value="wirausaha">Wirausaha</option>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="lainnya">Lainnya</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="institution">Instansi</label>
              <input type="text" class="form-control" id="institution" placeholder="PT/CV ..." name="institution">
            </div>

            <div class="mb-3">
              <label for="institution">Layanan yang diterima</label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="complain" name="services">
                <label class="custom-control-label" for="complain">Layanan Pengaduan</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="information" name="services">
                <label class="custom-control-label" for="information">Layanan Informasi</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="data" name="services">
                <label class="custom-control-label" for="data">Layanan Data</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="other" name="services">
                <label class="custom-control-label" for="other">Lainnya</label>
              </div>
            </div>

            <hr class="my-4">
            <h4 class="mb-3">PENDAPAT RESPONDEN TENTANG PELAYANAN</h4>

            <div class="d-block my-3 mb-3">
              <label for="answer1">Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?<span class="text-danger">*</span></label>
              <div class="custom-control custom-radio">
                <input name="answer1" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Tidak Sesuai</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer1" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Kurang Sesuai</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer1" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Sesuai</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer1" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Sangat Sesuai</label>
              </div>
            </div>

            <div class="d-block my-3 mb-3">
              <label for="answer2">Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini?<span class="text-danger">*</span></label>
              <div class="custom-control custom-radio">
                <input name="answer2" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Tidak Mudah</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer2" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Kurang Mudah</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer2" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Mudah</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer2" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Sangat Mudah</label>
              </div>
            </div>

            {{-- Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan?/cepat --}}
            <div class="d-block my-3 mb-3">
              <label for="answer3">Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan?<span class="text-danger">*</span></label>
              <div class="custom-control custom-radio">
                <input name="answer3" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Tidak Cepat</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer3" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Kurang Cepat</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer3" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Cepat</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer3" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Sangat Cepat</label>
              </div>
            </div>

            {{-- Bagaimana pendapat saudara tentang kewajaran biaya/tarif dalam pelayanan?/mahal --}}
            <div class="d-block my-3 mb-3">
              <label for="answer4">Bagaimana pendapat saudara tentang kewajaran biaya/tarif dalam pelayanan?<span class="text-danger">*</span></label>
              <div class="custom-control custom-radio">
                <input name="answer4" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Tidak Mahal</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer4" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Kurang Mahal</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer4" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Mahal</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer4" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Sangat Mahal</label>
              </div>
            </div>

            {{-- Bagaimana pendapat saudara tentang kesesuaian produk pelayanan atara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?/sesuai --}}
            <div class="d-block my-3 mb-3">
              <label for="answer5">Bagaimana pendapat saudara tentang kesesuaian produk pelayanan atara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?<span class="text-danger">*</span></label>
              <div class="custom-control custom-radio">
                <input name="answer5" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Tidak Sesuai</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer5" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Kurang Sesuai</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer5" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Sesuai</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer5" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Sangat Sesuai</label>
              </div>
            </div>

            {{-- Bagaimana pendapat saudara tentang kompetensi/kemampuan petugas dalam pelayanan?/kompeten --}}
            <div class="d-block my-3 mb-3">
              <label for="answer6">Bagaimana pendapat saudara tentang kompetensi/kemampuan petugas dalam pelayanan?<span class="text-danger">*</span></label>
              <div class="custom-control custom-radio">
                <input name="answer6" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Tidak Kompeten</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer6" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Kurang Kompeten</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer6" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Kompeten</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer6" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Sangat Kompeten</label>
              </div>
            </div>

            {{-- Bagaimana pendapat saudara tentang prilaku petugas dalam pelayanan terkait kesopanan dan keramahan?/sopan dan ramah --}}
            <div class="d-block my-3 mb-3">
              <label for="answer7">Bagaimana pendapat saudara tentang prilaku petugas dalam pelayanan terkait kesopanan dan keramahan?<span class="text-danger">*</span></label>
              <div class="custom-control custom-radio">
                <input name="answer7" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Tidak Sopan dan Tidak Ramah</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer7" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Kurang Sopan dan Kurang Ramah</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer7" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Sopan dan Ramah</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer7" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Sangat Sopan dan Sangat Ramah</label>
              </div>
            </div>

            {{-- Bagaimana pendapat saudara tentang kualitas sarana dan prasarana?/buruk --}}
            <div class="d-block my-3 mb-3">
              <label for="answer8">Bagaimana pendapat saudara tentang kualitas sarana dan prasarana?<span class="text-danger">*</span></label>
              <div class="custom-control custom-radio">
                <input name="answer8" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Buruk</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer8" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Kurang Baik</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer8" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Baik</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer8" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Sangat Baik</label>
              </div>
            </div>

            {{-- Bagaimana pendapat saudara tentang penanganan pengaduan pengguna layanan?/tidak ada --}}
            <div class="d-block my-3 mb-3">
              <label for="answer9">Bagaimana pendapat saudara tentang penanganan pengaduan pengguna layanan?<span class="text-danger">*</span></label>
              <div class="custom-control custom-radio">
                <input name="answer9" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Tidak Ada</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer9" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Ada tetapi tidak berfungsi</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer9" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Berfungsi kurang maksimal</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="answer9" type="radio" class="custom-control-input" required>
                <label class="custom-control-label">Dikelola dengan baik</label>
              </div>
            </div>

            <div class="mb-3">
              <label for="comment">Kritik dan Saran</label>
              <input type="text" class="form-control" id="comment" name="comment">
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Kirim</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('starter/jquery-slim.min.js') }}"></script>
    <script src="{{ asset('starter/popper.min.js') }}"></script>
    <script src="{{ asset('starter/bootstrap.min.js') }}"></script>
  </body>
</html>

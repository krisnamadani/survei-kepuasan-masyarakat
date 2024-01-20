@extends('layouts.app')

@section('content')
<div class="row py-5">
  <div class="col-md-12 order-md-1">
    @if (session('sent'))
    <div class="alert alert-success">
      <strong>Terima kasih!</strong> Kuisioner Anda telah terkirim.
    </div>
    @else
    <form action="{{ route('questionnaire.post') }}" method="post">
      @csrf
      <h4 class="mb-3">PROFIL RESPONDEN</h4>
      <div class="d-block my-3 mb-3">
        <label for="gender">Jenis Kelamin<span class="text-danger">*</span></label>
        <div class="custom-control custom-radio">
          <input id="male" name="gender" type="radio" class="custom-control-input" required value="Laki-Laki">
          <label class="custom-control-label" for="male">Laki-Laki</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="female" name="gender" type="radio" class="custom-control-input" required value="Perempuan">
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
          <option value="SD/Sederajat">SD/Sederajat</option>
          <option value="SMP/Sederajat">SMP/Sederajat</option>
          <option value="SMA/Sederajat">SMA/Sederajat</option>
          <option value="Diploma 1">Diploma 1</option>
          <option value="Diploma 2">Diploma 2</option>
          <option value="Diploma 3">Diploma 3</option>
          <option value="Diploma 4">Diploma 4</option>
          <option value="Strata 1">Strata 1</option>
          <option value="Strata 2">Strata 2</option>
          <option value="Strata 3">Strata 3</option>
          <option value="Lainnya">Lainnya</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="occupation">Pekerjaan<span class="text-danger">*</span></label>
        <select class="custom-select d-block w-100" id="occupation" required name="occupation">
          <option value="" selected disabled>...</option>
          <option value="PNS">PNS</option>
          <option value="TNI">TNI</option>
          <option value="Polri">POLRI</option>
          <option value="Swasta">Swasta</option>
          <option value="Wirausaha">Wirausaha</option>
          <option value="Mahasiswa">Mahasiswa</option>
          <option value="Lainnya">Lainnya</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="institution">Instansi</label>
        <input type="text" class="form-control" id="institution" placeholder="PT/CV ..." name="institution">
      </div>

      <div class="mb-3">
        <label for="institution">Layanan yang diterima</label>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="complain" name="services[]" value="Layanan Pengaduan">
          <label class="custom-control-label" for="complain">Layanan Pengaduan</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="information" name="services[]" value="Layanan Informasi">
          <label class="custom-control-label" for="information">Layanan Informasi</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="data" name="services[]" value="Layanan Data">
          <label class="custom-control-label" for="data">Layanan Data</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="other" name="services[]" value="Lainnya">
          <label class="custom-control-label" for="other">Lainnya</label>
        </div>
      </div>

      <hr class="my-4">
      <h4 class="mb-3">PENDAPAT RESPONDEN TENTANG PELAYANAN</h4>

      <div class="d-block my-3 mb-3">
        <label for="answer1">Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?<span class="text-danger">*</span></label>
        <div class="custom-control custom-radio">
          <input name="answer1" type="radio" class="custom-control-input" required id="answer1a" value="Tidak Sesuai">
          <label class="custom-control-label" for="answer1a">Tidak Sesuai</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer1" type="radio" class="custom-control-input" required id="answer1b" value="Kurang Sesuai">
          <label class="custom-control-label" for="answer1b">Kurang Sesuai</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer1" type="radio" class="custom-control-input" required id="answer1c" value="Sesuai">
          <label class="custom-control-label" for="answer1c">Sesuai</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer1" type="radio" class="custom-control-input" required id="answer1d" value="Sangat Sesuai">
          <label class="custom-control-label" for="answer1d">Sangat Sesuai</label>
        </div>
      </div>

      <div class="d-block my-3 mb-3">
        <label for="answer2">Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini?<span class="text-danger">*</span></label>
        <div class="custom-control custom-radio">
          <input name="answer2" type="radio" class="custom-control-input" required id="answer2a" value="Tidak Mudah">
          <label class="custom-control-label" for="answer2a">Tidak Mudah</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer2" type="radio" class="custom-control-input" required id="answer2b" value="Kurang Mudah">
          <label class="custom-control-label" for="answer2b">Kurang Mudah</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer2" type="radio" class="custom-control-input" required id="answer2c" value="Mudah">
          <label class="custom-control-label" for="answer2c">Mudah</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer2" type="radio" class="custom-control-input" required id="answer2d" value="Sangat Mudah">
          <label class="custom-control-label" for="answer2d">Sangat Mudah</label>
        </div>
      </div>

      <div class="d-block my-3 mb-3">
        <label for="answer3">Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan?<span class="text-danger">*</span></label>
        <div class="custom-control custom-radio">
          <input name="answer3" type="radio" class="custom-control-input" required id="answer3a" value="Tidak Cepat">
          <label class="custom-control-label" for="answer3a">Tidak Cepat</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer3" type="radio" class="custom-control-input" required id="answer3b" value="Kurang Cepat">
          <label class="custom-control-label" for="answer3b">Kurang Cepat</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer3" type="radio" class="custom-control-input" required id="answer3c" value="Cepat">
          <label class="custom-control-label" for="answer3c">Cepat</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer3" type="radio" class="custom-control-input" required id="answer3d" value="Sangat Cepat">
          <label class="custom-control-label" for="answer3d">Sangat Cepat</label>
        </div>
      </div>

      <div class="d-block my-3 mb-3">
        <label for="answer4">Bagaimana pendapat saudara tentang kewajaran biaya/tarif dalam pelayanan?<span class="text-danger">*</span></label>
        <div class="custom-control custom-radio">
          <input name="answer4" type="radio" class="custom-control-input" required id="answer4a" value="Tidak Mahal">
          <label class="custom-control-label" for="answer4a">Tidak Mahal</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer4" type="radio" class="custom-control-input" required id="answer4b" value="Kurang Mahal">
          <label class="custom-control-label" for="answer4b">Kurang Mahal</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer4" type="radio" class="custom-control-input" required id="answer4c" value="Mahal">
          <label class="custom-control-label" for="answer4c">Mahal</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer4" type="radio" class="custom-control-input" required id="answer4d" value="Sangat Mahal">
          <label class="custom-control-label" for="answer4d">Sangat Mahal</label>
        </div>
      </div>

      <div class="d-block my-3 mb-3">
        <label for="answer5">Bagaimana pendapat saudara tentang kesesuaian produk pelayanan atara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?<span class="text-danger">*</span></label>
        <div class="custom-control custom-radio">
          <input name="answer5" type="radio" class="custom-control-input" required id="answer5a" value="Tidak Sesuai">
          <label class="custom-control-label" for="answer5a">Tidak Sesuai</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer5" type="radio" class="custom-control-input" required id="answer5b" value="Kurang Sesuai">
          <label class="custom-control-label" for="answer5b">Kurang Sesuai</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer5" type="radio" class="custom-control-input" required id="answer5c" value="Sesuai">
          <label class="custom-control-label" for="answer5c">Sesuai</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer5" type="radio" class="custom-control-input" required id="answer5d" value="Sangat Sesuai">
          <label class="custom-control-label" for="answer5d">Sangat Sesuai</label>
        </div>
      </div>

      <div class="d-block my-3 mb-3">
        <label for="answer6">Bagaimana pendapat saudara tentang kompetensi/kemampuan petugas dalam pelayanan?<span class="text-danger">*</span></label>
        <div class="custom-control custom-radio">
          <input name="answer6" type="radio" class="custom-control-input" required id="answer6a" value="Tidak Kompeten">
          <label class="custom-control-label" for="answer6a">Tidak Kompeten</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer6" type="radio" class="custom-control-input" required id="answer6b" value="Kurang Kompeten">
          <label class="custom-control-label" for="answer6b">Kurang Kompeten</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer6" type="radio" class="custom-control-input" required id="answer6c" value="Kompeten">
          <label class="custom-control-label" for="answer6c">Kompeten</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer6" type="radio" class="custom-control-input" required id="answer6d" value="Sangat Kompeten">
          <label class="custom-control-label" for="answer6d">Sangat Kompeten</label>
        </div>
      </div>

      <div class="d-block my-3 mb-3">
        <label for="answer7">Bagaimana pendapat saudara tentang prilaku petugas dalam pelayanan terkait kesopanan dan keramahan?<span class="text-danger">*</span></label>
        <div class="custom-control custom-radio">
          <input name="answer7" type="radio" class="custom-control-input" required id="answer7a" value="Tidak Sopan dan Tidak Ramah">
          <label class="custom-control-label" for="answer7a">Tidak Sopan dan Tidak Ramah</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer7" type="radio" class="custom-control-input" required id="answer7b" value="Kurang Sopan dan Kurang Ramah">
          <label class="custom-control-label" for="answer7b">Kurang Sopan dan Kurang Ramah</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer7" type="radio" class="custom-control-input" required id="answer7c" value="Sopan dan Ramah">
          <label class="custom-control-label" for="answer7c">Sopan dan Ramah</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer7" type="radio" class="custom-control-input" required id="answer7d" value="Sangat Sopan dan Sangat Ramah">
          <label class="custom-control-label" for="answer7d">Sangat Sopan dan Sangat Ramah</label>
        </div>
      </div>

      <div class="d-block my-3 mb-3">
        <label for="answer8">Bagaimana pendapat saudara tentang kualitas sarana dan prasarana?<span class="text-danger">*</span></label>
        <div class="custom-control custom-radio">
          <input name="answer8" type="radio" class="custom-control-input" required id="answer8a" value="Buruk">
          <label class="custom-control-label" for="answer8a">Buruk</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer8" type="radio" class="custom-control-input" required id="answer8b" value="Kurang Baik">
          <label class="custom-control-label" for="answer8b">Kurang Baik</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer8" type="radio" class="custom-control-input" required id="answer8c" value="Baik">
          <label class="custom-control-label" for="answer8c">Baik</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer8" type="radio" class="custom-control-input" required id="answer8d" value="Sangat Baik">
          <label class="custom-control-label" for="answer8d">Sangat Baik</label>
        </div>
      </div>

      <div class="d-block my-3 mb-3">
        <label for="answer9">Bagaimana pendapat saudara tentang penanganan pengaduan pengguna layanan?<span class="text-danger">*</span></label>
        <div class="custom-control custom-radio">
          <input name="answer9" type="radio" class="custom-control-input" required id="answer9a" value="Tidak Ada">
          <label class="custom-control-label" for="answer9a">Tidak Ada</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer9" type="radio" class="custom-control-input" required id="answer9b" value="Ada tetapi tidak berfungsi">
          <label class="custom-control-label" for="answer9b">Ada tetapi tidak berfungsi</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer9" type="radio" class="custom-control-input" required id="answer9c" value="Berfungsi kurang maksimal">
          <label class="custom-control-label" for="answer9c">Berfungsi kurang maksimal</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="answer9" type="radio" class="custom-control-input" required id="answer9d" value="Berfungsi dengan baik">
          <label class="custom-control-label" for="answer9d">Berfungsi dengan baik</label>
        </div>
      </div>

      <div class="mb-3">
        <label for="comment">Kritik dan Saran</label>
        <input type="text" class="form-control" id="comment" name="comment">
      </div>

      <hr class="mb-4">
      <button class="btn btn-primary btn-lg btn-block" type="submit">Kirim</button>
    </form>
    @endif
  </div>
</div>
@endsection
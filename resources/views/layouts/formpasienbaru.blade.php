<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pendaftaran Pasien Puskesmas Tarik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
</head>
<body class="bg-success">
    <!-- =======Start Navbar ===== --->
    <!-- ======= Header ======= -->
    <div class="container">
        <div class="card mt-4 mb-4">
            <div class="card-header ">
                <h3><strong>Formulir Pendaftaran Pasien Baru Puskesmas Tarik</strong></h3>
            </div>
            <div class="card-body ">
                <small><strong>*Data Harus diisi Semua</strong></small><br><br>
                <form action="formpasienbaru" method="post" enctype="multipart/form-data">
                    @csrf
                       <div class="form-group">
                           <label for="nik">NIK :</label>
                           <input type="text" name="nik" class="form-control" id="nik" placeholder="No. Induk Kependudukan">
                           @error('nik')
                                <div class="text-danger">*{{ $message }}</div>
                            @enderror
                       </div><br>

                       <div class="form-group">
                           <label for="nama">Nama Lengkap :</label>
                           <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda">
                            @error('nama')
                                <div class="text-danger">*{{ $message }}</div>
                            @enderror
                       </div><br>

                       <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempatlahir">Tempat Lahir :</label>
                                <input type="text" name="tempatlahir" class="form-control" id="tempatlahir" placeholder="Tempat Lahir">
                                @error('tempatlahir')
                                <div class="text-danger">*{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir :</label>
                                <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
                                @error('tgl_lahir')
                                    <div class="text-danger">*{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                       </div><br>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="jeniskelamin">Jenis Kelamin :</label>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="jeniskelamin" id="jeniskelamin" value="Laki-laki" checked="">
                                    <label>Laki - laki</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="jeniskelamin" id="jeniskelamin" value="Perempuan" checked="">
                                    <label>Perempuan</label>
                                </div>
                                @error('jeniskelamin')
                                    <div class="text-danger">*{{ $message }}</div>
                                @enderror
                            </div><br>
                        </div>
                            <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda">
                                @error('alamat')
                                    <div class="text-danger">*{{ $message }}</div>
                                @enderror
                            </div><br>

                            <div class="form-group">
                                <label for="notelp">No. Telepon :</label>
                                <input type="text" name="notelp" class="form-control" id="notelp" placeholder="Masukkan Nomor Telepon Anda">
                                @error('notelp')
                                    <div class="text-danger">*{{ $message }}</div>
                                @enderror
                            </div><br>

                            <div class="form-group">
                                <label for="layanan_kesehatan">Jenis Layanan Kesehatan :</label>
                                <select class="form-control" name="layanan_kesehatan" id="layanan_kesehatan" placeholder="pilih poli yang dituju">
                                    <option>Umum</option>
                                    <option>BPJS</option>
                                    <option>Asuransi</option>
                                </select>
                                @error('layanan_kesehatan')
                                    <div class="text-danger">*{{ $message }}</div>
                                @enderror
                            </div><br>

                            <div class="form-group">
                                <label for="no_layanan">No. Layanan Kesehatan :</label>
                                <input type="text" name="no_layanan" class="form-control" id="no_layanan" placeholder="Masukkan Nomor Layanan Kesehatan Anda">
                                <small>*Jika jenis layanan kesehatan <strong>umum</strong> maka isikan dengan strip (-)</small>
                                @error('no_layanan')
                                    <div class="text-danger">*{{ $message }}</div>
                                @enderror
                            </div><br>

                            <div class="form-group">
                                <label for="fotoktp">Foto KTP : </label>
                                <input type="file" class="form-control" id="fotoktp" name="fotoktp">
                                <small>*usahakan foto tidak buram, dengan format <strong>JPG,PNG,JPEG</strong></small>
                                @error('fotoktp')
                                    <div class="text-danger">*{{ $message }}</div>
                                @enderror
                            </div><br>
                            <a href="/" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
            </div>
        </div>
    </div>

      <!-- Vendor JS Files -->
      <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="../../assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
      <script src="../../assets/js/main.js"></script>
      @include('sweetalert::alert')

    </body>

    </html>


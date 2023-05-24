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
        <div class="card mt-4">
            <div class="card-header ">
                <h3><strong>Formulir Pendaftaran Pasien Baru Puskesmas Tarik</strong></h3>
            </div>
            <div class="card-body ">
                <form action="formdaftarpasien" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">NIK :</label>
                        <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK Anda">
                    </div><br>

                    <div class="form-group">
                        <label for="poli">Poli yang dituju :</label>
                        <select class="form-control" id="layananpoli" name="poli" placeholder="pilih poli yang dituju">
                            @foreach ($polis as $poli )
                            <option value="{{$poli->id}}">{{$poli->namapoli}}</option>
                            @endforeach
                        </select>
                    </div><br>
                    <a href="/daftarpasien" class="btn btn-secondary">Kembali</a>
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

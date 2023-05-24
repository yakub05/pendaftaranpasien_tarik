@extends('layout.master')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Registrasi Pasien Baru</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <br><br><p>
                        jika anda belum pernah melakukan layanan di puskesmas tarik, maka silahkan registrasi terlebih dahulu untuk mendapatkan Nomor Rekam Medis yang akan digunakan untuk melakukan pelayanan kesehatan. Klik Button Registrasi dibawah ini !!
                    </p> <br>
                    <a href="/formpasienbaru" class="btn btn-success">Pendaftaran Pasien Baru</a>
                </div>

                <div class="col-6 text-center">
                    <img src="assets/img/regis.svg" class="img-fluid" width="300px">
                </div>
            </div>
        </div>
    </section>
  </main><!-- End #main -->

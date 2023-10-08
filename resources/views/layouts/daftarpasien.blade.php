@extends('layout.master')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Pendaftaran Pasien</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="row">
            <div class="col-5">
                <br><br><br><p>
                    jika anda sudah memiliki nomor rekam media, serta apabila anda ingin melakukan pelayanan kesehatan dipuskesmas Tarik, maka dimohon untuk daftar terlebih dahulu dengan cara mengklik button dibawah ini :
                </p> <br>
                      <!-- Button trigger modal -->
                      <a href="/formdaftarpasien" class="btn btn-success">Pendaftaran Pasien ke Poli</a>

            </div>
            <div class="col-7 text-center">
                <img src="assets/img/daftar.svg" class="img-fluid" width="300px">
            </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

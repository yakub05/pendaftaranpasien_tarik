@extends('layout.master')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Hasil Pendaftaran Pasien</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h1>Cetak Antrian Pasien</h1><br>
                    <p>
                    silahkan klik button dibawah ini untuk melihat dan mencetak bukti pendaftaran pasien anda
                    </p><br>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Cetak Bukti Pendaftaran
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cetak Bukti Pendaftaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form action="hasildaftar" method="post" enctype="multipart/form">
                                @csrf
                                <div class="form-group">
                                    <label for="nik">NIK :</label>
                                    <input type="text" name="nik" class="form-control" id="nik" placeholder="No. Induk Kependudukan">
                                </div><br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-success">Cetak</button>
                                    </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-5 text-center">
                    <img src="assets/img/hasildaftar.svg" class="img-fluid" width="300px">
                </div>
            </div>
        </div>

    </section>
    <!-- Template Main JS File -->

  </main><!-- End #main -->


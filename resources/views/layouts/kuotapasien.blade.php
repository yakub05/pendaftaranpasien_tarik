@extends('layout.master')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center" >
          <h2>Kuota Pasien di Setiap Poli</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container text-center">
        <h3>
          Tabel dibawah ini merupakan kuota pasien yang tersedia dalam melakukan layanan kesehatan di puskesmas tarik
        </h3><br>
        <table class="table table-bordered table-striped table-hover text-center">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Poli</th>
                  <th scope="col">Kuota Hari ini</th>
                </tr>
                <tbody>
                    @foreach ($polis as $poli )
                    <tr>
                        <th scope="row">{{ $loop->index +1}}</th>
                        <td>{{$poli->namapoli}}</td>
                        <td>{{$poli->kuota}}</td>
                      </tr>

                    @endforeach
              </thead>
        </table>
      </div>
    </section>

  </main><!-- End #main -->

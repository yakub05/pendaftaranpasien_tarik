@extends('layout.master')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Syarat & Ketentuan</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    @foreach ($syarat as $ketentuan)
                    <h1>{{$ketentuan->nama_layanan}}</h1>
                    <p>{!!$ketentuan->isi!!}</p>
                    @endforeach
                </div>

                <div class="col-5 text-center">
                    <img src="assets/img/syarat.svg" class="img-fluid" width="300px">
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->

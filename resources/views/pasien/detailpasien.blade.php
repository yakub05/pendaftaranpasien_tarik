@extends('admin/panel')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Data Pasien</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admins/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/pasien/datapasien">Data Pasien</a></li>
            <li class="breadcrumb-item active">User Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <!-- Admin Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Data Pasien</h3>
          </div>

            <div class="card-body">
              <strong><i class="fa fa-address-card mr-1"></i> NIK</strong>
              <p class="text-muted">{{$pasien->nik}}</p>
              <hr>

              <strong><i class="fa fa-user mr-1"></i>Nama Lengkap</strong>
              <p class="text-muted">{{$pasien->nama}}</p>
              <hr>

              <strong><i class="fa fa-globe mr-1"></i>Tempat Lahir</strong>
              <p class="text-muted">{{$pasien->tempatlahir}}</p>
              <hr>

              <strong><i class="fas fa-regular fa-calendar mr-1"></i>Tanggal Lahir</strong>
              <p class="text-muted">{{$pasien->tgl_lahir}}</p>
              <hr>

              <strong><i class="fa fa-venus mr-1"></i>Jenis Kelamin</strong>
              <p class="text-muted">{{$pasien->jeniskelamin}}</p>
              <hr>

              <strong><i class="fa fa-map-pin mr-1"></i>Alamat</strong>
              <p class="text-muted">{{$pasien->alamat}}</p>
              <hr>

              <strong><i class="fa fa-hospital-user mr-1"></i>Jenis Layanan Kesehatan</strong>
              <p class="text-muted">{{$pasien->layanan_kesehatan}}</p>
              <hr>

              <strong><i class="fa fa-file-medical mr-1"></i>Nomor Layanan Kesehatan</strong>
              <p class="text-muted">{{$pasien->no_layanan}}</p>
              <hr>

              <strong><i class="fa fa-images mr-1"></i>Foto KTP</strong><br><br>
              <img src="{{ asset($pasien->fotoktp)}}" widht='400' height='200' class="img img-responsive">
              <hr>

              <div class="col card-header text-right">
                <a class="btn btn-secondary" href="/pasien/datapasien">Kembali</a>
              </div>
            </div>

            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.card -->
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

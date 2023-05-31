@extends('admin/panel')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profile Admin</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admins/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/admins/dataadmin">Data Admin</a></li>
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
            <h3 class="card-title">Detail Admin</h3>
          </div>
          <div class="row">
            <div class="col-md-4">
              <!-- Profile Image -->
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img src="{{ asset($admin->gambar)}}" widht='400' height='200' class="img img-responsive">
                  </div>
                </div>
                <!-- /.card-body -->
              <!-- /.card -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fa fa-user mr-1" style="padding-left:20px;"></i> Nama</strong>

              <p class="text-muted" style="padding-left:20px;">
                {{$admin->nama_admin}}
              </p>

              <hr>

              <strong><i class="fa fa-envelope mr-1" style="padding-left:20px;"></i> Email</strong>

              <p class="text-muted" style="padding-left:20px;">
                {{$admin->email}}
              </p>

              <hr>

              <div class="col card-header text-right">
                <a class="btn btn-secondary" href="/admins/dataadmin">Kembali</a>
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

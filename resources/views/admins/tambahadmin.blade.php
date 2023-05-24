@extends('admin/panel')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Tambah Admin</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/admins/home">Home</a></li>
                  <li class="breadcrumb-item"><a href="/admins/dataadmin">Data Admin</a></li>
                  <li class="breadcrumb-item active">Tambah Admin</li>
                  </ol><br><br>
              </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

       <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Formulir Tambah Admin</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/tambahadmin" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                        <div class="form-group">
                        <label for="nama_admin">Nama Admin</label>
                        <input type="text" name="nama_admin" class="form-control" id="nama_admin" placeholder="Masukkan Nama Admin" >
                        @error('nama_admin')
                            <div class="text-danger">*{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email Admin</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email Admin" >
                            @error('email')
                                <div class="text-danger">*{{ $message }}</div>
                             @enderror
                        </div>

                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password" >
                        @error('password')
                            <div class="text-danger">*{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="gambar" class="form-label">Foto Admin</label>
                            <img class="img-preview mb-3" height="30%" width="30%">
                            <input class="form-control" type="file" id="gambar" name="gambar" value="{{ old('gambar') }}" onchange="previewImage()">
                            @error('gambar')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <a href="/admins/dataadmin" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

</div>
@endsection

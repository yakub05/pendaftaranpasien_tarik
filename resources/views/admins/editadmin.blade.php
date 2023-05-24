@extends('admin/panel')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Edit Admin</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/admins/home">Home</a></li>
                  <li class="breadcrumb-item"><a href="/admins/dataadmin">Data Admin</a></li>
                  <li class="breadcrumb-item active">Edit Admin</li>
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
                  <h3 class="card-title">Formulir Edit Admin</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action ="/admins/editadmin/{{$admin->id}}" method="POST" enctype="multipart/form-data" id="quickForm">
                    @csrf
                    @method('PUT')
                  <div  class="card-body">
                        <div class="form-group">
                        <label for="namaadmin">Nama Admin</label>
                        <input type="text" name="namaadmin" class="form-control" id="namaadmin" value="{{ $admin->nama_admin, old('nama_admin') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="emailadmin">Email Admin</label>
                            <input type="email" name="email" class="form-control" id="emailadmin" value="{{ $admin->email, old('email') }}" required>
                        </div>

                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" value="{{ $admin->password, old('password') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="AdminFoto" class="form-label">Gambar Admin</label>
                            <img src="{{ asset($admin->gambar)}}" widht='100' height='100' class="img img-responsive">
                            <input class="form-control" type="file" id="gambar" name="gambar" value="{{ $admin->gambar }}" onchange="previewImage()">
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

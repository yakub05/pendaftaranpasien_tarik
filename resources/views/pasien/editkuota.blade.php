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
                  <h3 class="card-title">Formulir Edit Kuota Poli</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action ="/pasien/editkuota/{{$polis->id}}" method ="POST" enctype="multipart/form-data" id="quickForm">
                    @csrf
                    @method('PUT')
                  <div  class="card-body">
                        <div class="form-group">
                        <label for="namapoli">Nama Poli</label>
                        <input type="text" name="namapoli" class="form-control" id="namapoli" value="{{$polis->namapoli,old('namapoli')}}">
                        </div>

                        <div class="form-group">
                            <label for="kuotapoli">Kuota Poli</label>
                            <input type="number" name="kuotapoli" class="form-control" id="kuotapoli" value="{{$polis->kuota,old('kuota')}}">
                        </div>
                        <div class="form-group">
                            <a href="/pasien/kuotapasien" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                    </div>
                  </div>
                  <!-- /.card-body -->

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

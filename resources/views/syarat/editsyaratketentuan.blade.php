@extends('admin/panel')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Syarat Dan Ketentuan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admins/home">Home</a></li>
              <li class="breadcrumb-item"><a href="/syarat/syaratketentuan">Syarat dan Ketentuan</a></li>
              <li class="breadcrumb-item active">edit syarat dan ketentuan</li>
            </ol>
          </div>
        </div><br><br>
      </div><!-- /.container-fluid -->
      <section class="content">
        <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Formulir Edit Syarat dan Ketentuan</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action ="" method="" enctype="multipart/form-data" id="quickForm">

                        <div  class="card-body">
                            <div class="form-group">
                            <label for="namaadmin">Judul</label>
                            <input type="text" name="namaadmin" class="form-control" id="namaadmin" value="" required>
                            </div>

                            <div class="form-group">
                                <label for="emailadmin">Isi syarat Ketentuan</label>
                                <textarea name="" id="isisyaratketentuan" class="form-control" cols="30" rows="10"></textarea>
                            </div>

                        </div>
                        <script>
                            $(document).ready(function() {
                          $('#isisyaratketentuan').summernote();
                        });
                        </script>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <a href="/syarat/syaratketentuan" class="btn btn-secondary">Kembali</a>
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
</div>


@endsection

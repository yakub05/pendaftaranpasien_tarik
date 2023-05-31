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
              <li class="breadcrumb-item active">Syarat dan Ketentuan</li>
            </ol>
          </div>
        </div><br><br>
      </div><!-- /.container-fluid -->
      <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title"><strong>Daftar Admin Puskesmas Tarik</strong></h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                            <a href=""><button type="button" class="btn btn-primary">
                                <i class="fas fa-solid fa-plus"></i>
                                Tambah data
                            </button></a>
                        </div>
                    </div>
                </div>
                    <!-- /.card-header -->

      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama </th>
                <th>Email </th>
                <th>Action </th>
            </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Syarat dan Ketentuan</td>
                <td>blablab</td>
                <td class="project-actions">
                    <a class="btn btn-primary btn-sm" href="">
                        <i class="fas fa-folder">
                        </i>
                        View
                    </a>
                    <a class="btn btn-info btn-sm" href="/syarat/editsyaratketentuan">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
        <!-- pagination -->
        <div class="card-footer clearfix">
        </div>
         <!-- end pagination-->
</div>
</div>
    </section>
</div>

@endsection

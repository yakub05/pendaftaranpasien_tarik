@extends('admin/panel')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Kuota Pasien Puskesmas Tarik</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admins/home">Home</a></li>
                <li class="breadcrumb-item active">Kuota Pasien</li>
                </ol><br><br>

                    <div class="card-tools float-sm-right">
                        <form action="" method="get">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="keyword" placeholder="Kata Kunci">
                                <button class="input-group-text btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- tabel tambah admin -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title"><strong>Tabel Pasien Puskesmas Tarik</strong></h3>
                        <div class="card-tools">
                    </div>
                </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Poli</th>
                            <th>Kuota Hari Ini</th>
                            <th>Action </th>
                        </tr>
                        </thead>

                        @foreach ($polis as $poli )
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{$poli->namapoli}}</td>
                            <td>{{$poli->kuota}}</td>
                            <td class="project-actions">
                                <a class="btn btn-info btn-sm" href="/pasien/editkuota/{{$poli->id}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                            </td>
                          </tr>

                        @endforeach

                        </tbody>
                    </table>
                    <!-- pagination -->
                    <div class="card-footer clearfix">

                    </div>
                     <!-- end pagination-->
            </div>
        </div>
            <!-- /.row -->
    </div>
</section>
</div>

@endsection

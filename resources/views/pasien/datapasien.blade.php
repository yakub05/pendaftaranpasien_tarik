@extends('admin/panel')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Pasien Puskesmas Tarik</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admins/home">Home</a></li>
                <li class="breadcrumb-item active">Data Pasien</li>
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
                        <h3 class="card-title"><strong>Daftar Pasien Puskesmas Tarik</strong></h3>

                        <div class="card-tools">
                            <div class="project-actions" style="width: 150px;">
                                <a class="btn btn-warning btn-sm" href="/pdf/export-data">
                                    <i class="fas fa-file-export">
                                    </i>
                                    PDF
                                </a>
                                <a class="btn btn-success btn-sm" href="{{route('export-excel')}}">
                                    <i class="fas fa-file-export">
                                    </i>
                                    Excel
                                </a>
                        </div>
                    </div>
                </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Jenis Layanan Kesehatan</th>
                            <th>Action </th>
                        </tr>
                        </thead>
                        @foreach ($pasienlist as $item )
                        <tr>
                           <td> {{$loop->iteration}} </td>
                           <td> {{$item->nik}}</td>
                           <td>{{$item->nama}}</td>
                           <td>{{$item->alamat}}</td>
                           <td>{{$item->layanan_kesehatan}}</td>

                            <td class="project-actions">
                                <a class="btn btn-primary btn-sm" href="/pasien/detailpasien/{{$item->id}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-danger btn-sm" href="delete-pasien/{{$item->id}}">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- pagination -->
                    <div class="card-footer clearfix">
                        {{$pasienlist->links()}}
                    </div>
                     <!-- end pagination-->
            </div>
        </div>
            <!-- /.row -->
    </div>
</section>
</div>

@endsection

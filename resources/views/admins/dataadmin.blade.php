@extends('admin/panel')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Admin</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admins/home">Home</a></li>
                <li class="breadcrumb-item active">Data Admin</li>
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
                        <h3 class="card-title"><strong>Daftar Admin Puskesmas Tarik</strong></h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                            <a href="/admins/tambahadmin"><button type="button" class="btn btn-primary">
                                <i class="fas fa-solid fa-plus"></i>
                                Tambah Admin
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
                            <th>Foto Admin</th>
                            <th>Nama </th>
                            <th>Email </th>
                            <th>Action </th>
                        </tr>
                        </thead>
                        @foreach ($adminlist as $item )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset($item->gambar)}}" widht='100' height='100' class="img img-responsive">
                            </td>
                            <td>{{ $item->nama_admin }}</td>
                            <td>{{ $item->email }}</td>
                            <td class="project-actions">
                                <a class="btn btn-primary btn-sm" href="/admins/detailadmin/{{ $item->id }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="/admins/editadmin/{{$item->id}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="delete-admin/{{$item->id}}">
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
                        {{$adminlist->links()}}
                    </div>
                     <!-- end pagination-->
            </div>
        </div>
            <!-- /.row -->
    </div>
</section>
</div>

@endsection

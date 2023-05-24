@extends('admin/panel')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Daftar Pasien Poli Gigi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/pasien/datapoli">Data Poli</a></li>
                <li class="breadcrumb-item active">Poli Gigi</li>
                </ol><br><br>

                    <div class="card-tools float-sm-right">
                        <form onsubmit="return confirm('Apakah Anda Yakin Untuk Mereset Data ?');" action="{{ route('poligigidestroy') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash">
                            </i> Reset Data Hari ini</button>
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
                        <h3 class="card-title"><strong>Tabel Pasien Poli Gigi</strong></h3>

                        <div class="card-tools">
                            <div class="project-actions" style="width: 120px;">
                                <a class="btn btn-warning btn-sm" href="/exportpoli/gigi">
                                    <i class="fas fa-file-export">
                                    </i>
                                    Export PDF
                                </a>
                        </div>

                        <div class="card-tools">
                    </div>
                </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @if ($data !== null)
                        @foreach ($data as $row )
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$row->pasien->nik}}</td>
                            <td>{{$row->pasien->nama}}</td>
                            <td class="project-actions">
                                <a class="btn btn-primary btn-sm" href="">
                                    <i class="fas fas fa-folder">
                                    </i>
                                    view
                                </a>
                            </td>
                        </tr>
                        @endforeach

                        @else

                        @endif

                        </tbody>
                    </table>
                    <!-- pagination -->
                    <div class="card-footer clearfix">
                        {{$data->links()}}
                    </div>
                     <!-- end pagination-->
            </div>
        </div>
            <!-- /.row -->
    </div>
</section>
</div>

@endsection

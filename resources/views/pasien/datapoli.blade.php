@extends('admin/panel')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Poli Puskesmas Tarik</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admins/home">Home</a></li>
                <li class="breadcrumb-item active">Data Poli</li>
                </ol><br><br>
            </div>

            <div class="container-fluid">
            <div class="row">

                <div class="col-md-4 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-stethoscope"></i></span>
                    <div class="info-box-content">
                        <a href="/pasien/poliumum" class="nav-link">
                            <h2 class="info-box-text text-dark"><strong>Poli Umum</strong></h2>
                            <h3 class="info-box-number text-dark">{{$datapoli1}} Pasien</h3>
                        </a>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-success"><i class="fas fa-bed"></i></span>
                      <div class="info-box-content">
                          <a href="/pasien/polilansia" class="nav-link">
                              <h2 class="info-box-text text-dark"><strong>Poli Lansia</strong></h2>
                              <h3 class="info-box-number text-dark">{{$datapoli3}} Pasien</h3>
                          </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-warning"><i class="fas fa-child"></i></span>
                      <div class="info-box-content">
                          <a href="/pasien/polikia" class="nav-link">
                              <h2 class="info-box-text text-dark"><strong>Poli KIA</strong></h2>
                              <h3 class="info-box-number text-dark">{{$datapoli4}} Pasien</h3>
                          </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-danger"><i class="fas fa-tooth"></i></span>
                      <div class="info-box-content">
                          <a href="/pasien/poligigi" class="nav-link">
                              <h2 class="info-box-text text-dark"><strong>Poli Gigi</strong></h2>
                              <h3 class="info-box-number text-dark">{{$datapoli2}} Pasien</h3>
                          </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-secondary"><i class="fas fa-egg"></i></span>
                      <div class="info-box-content">
                          <a href="/pasien/poligizi" class="nav-link">
                              <h2 class="info-box-text text-dark"><strong>Poli Gizi</strong></h2>
                              <h3 class="info-box-number text-dark">{{$datapoli5}} Pasien</h3>
                          </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-primary"><i class="fas fa-tree"></i></span>
                      <div class="info-box-content">
                          <a href="/pasien/polikb" class="nav-link">
                              <h2 class="info-box-text text-dark"><strong>Poli KB</strong></h2>
                              <h3 class="info-box-number text-dark">{{$datapoli6}} Pasien</h3>
                          </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-5 col-sm-8 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-dark"><i class="fas fa-virus"></i></span>
                      <div class="info-box-content">
                          <a href="/pasien/laborat" class="nav-link">
                              <h2 class="info-box-text text-dark"><strong>Laboratorium</strong></h2>
                              <h3 class="info-box-number text-dark">{{$datapoli7}} Pasien</h3>
                          </a>
                      </div>
                    </div>
                  </div>


            </div>
              <!-- /.row -->

        </div>
      </div><!-- /.container-fluid -->
    </section>
    </div>
</section>
</div>

@endsection

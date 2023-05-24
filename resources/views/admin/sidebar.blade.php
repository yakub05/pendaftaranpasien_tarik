<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://puskesmastarik.sidoarjokab.go.id/" class="brand-link">
        <img src="{{asset('lte/dist/img/logotarik.png')}}" alt="AdminLTE Logo" width="200" height="50" >
      </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('lte/dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admins/home" class="d-block">Slamet Mochamad Yakub</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admins/home" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admins/dataadmin" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Data Admin</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                    Pasien
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pasien/datapasien" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Data Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pasien/kuotapasien" class="nav-link">
                  <i class="nav-icon fas fa-database"></i>
                  <p>Kuota Pasien</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/pasien/datapoli" class="nav-link">
              <i class="nav-icon fas fa-hospital"></i>
              <p>Data Poli</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/syarat/syaratketentuan" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>Syarat & Ketentuan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas  fa-sign-out-alt"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?= base_url("dist/img/AdminLTELogo.png")?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">EVENT ORGANIZER</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url("dist/img/user2-160x160.jpg")?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin BackEnd</a>
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
                Daftar Kegiatan
              </p>
              <span class="right badge badge-danger">New</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("index.php/kegiatan")?>" class="nav-link">
            <i class="nav-icon fas fa-list"></i>
              <p>
                Kegiatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("index.php/jenis_kegiatan")?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>
              Jenis Kegiatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("index.php/kategori_peserta")?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>
                Kategori Peserta
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
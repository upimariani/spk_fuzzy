<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?= base_url('asset/logo_posyandu.jpeg') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-dark"> Posyandu Pamijahan</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="info">
        <a href="#" class="d-block">Ketua Posyandu</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url('KetuaPosyandu/Dashboard') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'KetuaPosyandu' && $this->uri->segment(2) == 'Dashboard') {
                                                                                  echo 'active';
                                                                                }  ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('KetuaPosyandu/Laporan/gizi_perbulan') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'KetuaPosyandu' && $this->uri->segment(2) == 'Laporan' && $this->uri->segment(3) == 'gizi_perbulan') {
                                                                                              echo 'active';
                                                                                            }  ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Status Gizi Perbulan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('KetuaPosyandu/Laporan/status_gizi') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'KetuaPosyandu' && $this->uri->segment(2) == 'Laporan' && $this->uri->segment(3) == 'status_gizi') {
                                                                                            echo 'active';
                                                                                          }  ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Status Gizi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('login/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              LogOut
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
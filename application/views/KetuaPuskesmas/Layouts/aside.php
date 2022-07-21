<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <span class="brand-text font-weight-dark"> Puskesmas Pamijahan</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="info">
        <a href="#" class="d-block"></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url('cDashboard') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'cDashboard') {
                                                                    echo 'active';
                                                                  }  ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('cPengembalian') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'cPengembalian') {
                                                                        echo 'active';
                                                                      }  ?>">
            <i class="nav-icon fas fa-address-book"></i>
            <p>
              Laporan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('clogin/logout') ?>" class="nav-link">
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
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('dashboard') ?>" class="brand-link">
      <img src="<?php echo base_url('assets/upload/konfigurasi/brand.png')?>"
           alt="logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="padding-left: 10px">MRT Jakarta</span>
    </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header" style="padding-left: 20px" >DATA MASTER</li>
                <li class="nav-item">
                  <a href="<?php echo base_url('dashboard') ?>" class="nav-link">
                    <i class="fa fa-chart-pie nav-icon"></i>
                    <p>DASHBOARD</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('products') ?>" class="nav-link">
                    <i class="fa fa-folder nav-icon"></i>
                    <p>PRODUK</p>
                  </a>
                </li>
            </li>

            <li class="nav-header" style="padding-left: 20px" >TRANSAKSI MASTER</li>
            
                <li class="nav-item">
                  <a href="<?php echo base_url('transactions/transOpen') ?>" class="nav-link">
                    <i class="fa fa-folder-open nav-icon"></i>
                    <p>TRANSAKSI OPEN</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('transactions/transIn') ?>" class="nav-link">
                    <i class="fa fa-folder-open nav-icon"></i>
                    <p>TRANSAKSI IN</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('transactions/transOut') ?>" class="nav-link">
                    <i class="fa fa-folder-open nav-icon"></i>
                    <p>TRANSAKSI OUT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('transactions/transConsign') ?>" class="nav-link">
                    <i class="fa fa-folder-open nav-icon"></i>
                    <p>TRANSAKSI CONSIGN  </p>
                  </a>
                </li>
            </li>
            <?php 
            
            if ($this->session->userdata('akses_level') == 'admin'){
            echo '<li class="nav-header" style="padding-left: 20px" >Setting</li>';
              echo '<li class="nav-item has-treeview menu">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-wrench"></i>
                    <p>
                      SETTING
                      <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>';
              echo '<ul class="nav nav-treeview">';
              echo ' <li class="nav-item">';
              echo ' <a href="';
              echo base_url('account');
              echo '" class="nav-link">';
              echo ' <i class="fa fa-user nav-icon"></i>
              <p>Account</p>
            </a>';

              echo ' </li>';
              echo '</ul>';
              echo ' </li>';
            }
            
            ?> </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
<section class="content" style="padding-top: 20px">
 

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>index.php/dashboard" class="brand-link">
      <img src="<?php echo base_url();?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PEMROGRAMAN WEB 2</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>/dist/img/daffa.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php 
              if($this->session->has_userdata('USERNAME')){
                echo $this->session->userdata('USERNAME');
                echo ' - '.$this->session->userdata('ROLE');
              }
            
            ?>
          </a>
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
              <i class="nav-icon fas fa-cloud"></i>
              <p>
                Praktikum
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/mahasiswa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 7 CI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/mahasiswaform" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 8 CI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/pekan10" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pekan 10 - Mandiri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/tambahprodi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pekan 11 - Mandiri</p>
                </a>
              </li>
              
          </li>
          <?php
          if($this->session->userdata('ROLE')=='ADMIN'){
        ?>
         
        </ul>
        <?php
          }
        ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
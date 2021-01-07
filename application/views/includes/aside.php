<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?=base_url()?>" class="brand-link">
          <img
            src="<?= base_url(); ?>assets/img/logo/evolvelogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-1"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light">Evolve Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="<?=base_url()?>assets/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="<?=base_url()?>profile" class="d-block">
              <?php
                if(isset($_SESSION['nombre'])){
                  echo $_SESSION['nombre'];
                }
              ?>
              </a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item">
                <!-- Home -->
                <a href="<?= base_url() ?>" class="nav-link bg-red">
                  <i class="nav-icon fas fa-home"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <!-- Redes -->
                <a href="<?= base_url() ?>" class="nav-link">
                  <i class="nav-icon fas fa-share-alt"></i>
                  <p>
                    Redes Sociales
                    <span class="right badge badge-info">New</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <!-- Calendario -->
                <a href="<?= base_url() ?>" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>
                    Calendario
                    <span class="right badge badge-info">New</span>
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <!-- Equipo Menu desplegable -->
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-gamepad"></i>
                  <p>
                    Equipo / Stats
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link">
                      <i class="fas fa-chart-bar nav-icon"></i>
                      <p>Stats General</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Counter Strike</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Rainbox Six</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Free Fire</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>League of Legends</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <!-- STAFF -->
                <a href="<?=base_url()?>staff" class="nav-link bg-blue">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Staff</p>
                </a>
              </li>
              <?php
                if(isset($_SESSION['perfil'])==1){
                  ?>
                  <li class="nav-item">
                    <!-- ADMIN AREA -->
                    <a href="<?= base_url() ?>adminarea" class="nav-link">
                    <i class="nav-icon fas fa-user-shield"></i>
                    <p>Admin Area</p>
                    </a>
                </li>
                <?php
                }
              ?>
              <!-- / Menu desplegable -->
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
</aside>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url() ?>home" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Soporte</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input
              class="form-control form-control-navbar"
              type="search"
              placeholder="Buscar"
              aria-label="Search"
            />
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer"
                >See All Notifications</a
              >
            </div>
          </li>
          <!-- Icono Salir  -->
          <li class="nav-item dropdown">
            <a class="nav-link" href="<?= base_url('login/logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?=base_url()?>home" class="brand-link">
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
                src="assets/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="<?=base_url()?>perfil" class="d-block">
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
                <a href="<?= base_url() ?>home" class="nav-link bg-red">
                  <i class="nav-icon fas fa-home"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <!-- Redes -->
                <a href="<?= base_url() ?>home" class="nav-link">
                  <i class="nav-icon fas fa-share-alt"></i>
                  <p>
                    Redes Sociales
                    <span class="right badge badge-info">New</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <!-- Calendario -->
                <a href="<?= base_url() ?>home" class="nav-link">
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
                    <a href="<?= base_url() ?>home" class="nav-link">
                      <i class="fas fa-chart-bar nav-icon"></i>
                      <p>Stats General</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url() ?>home" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Counter Strike</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url() ?>home" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Rainbox Six</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url() ?>home" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Free Fire</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url() ?>home" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>League of Legends</p>
                    </a>
                  </li>
                </ul>
              </li><!-- / Menu desplegable -->
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
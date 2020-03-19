<body id="page-top">

    <?php
    
        if($this->session->userdata('statusLogin') == true)
        {
            $fullName = $this->session->userdata('nama_depan').$this->session->userdata('nama_belakang');
        }else
        {
            redirect('admin/login');
        }
    
    ?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin SITernak</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li> -->

        <!-- Nav Item Home -->
        <li class="nav-item active">
            <a href="<?php echo base_url('admin/home');?>" class="nav-link">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
        </li>

        <!-- Nav Item Tabel -->
        <li class="nav-item">
            <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapseMaster" aria-expanded="true" aria-controls="collapseMaster">
                <i class="fas fa-fw fa-table"></i>
                <span>Master</span>
            </a>
            <div id="collapseMaster" class="collapse" aria-labelledby="headingMaster" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header"> Tabel Master </h6>
                    <a href="<?php echo base_url('admin/masterSapi')?>" class="collapse-item"> Tabel Ternak </a>
                    <a href="<?php echo base_url('admin/masterKandang');?>" class="collapse-item"> Tabel Kandang </a>
                </div>
            </div>
        </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-success" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">0</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header bg-success border-success">
                    Pemberitahuan
                </h6>

                <!-- Template Message / ada yang error -->
                <!-- <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a> -->

                <!-- Bila tidak ada peringatan -->
                <div class="dropdown-item text-center medium text-gray-500 py-4 bg-light">Tidak ada pemberitahuan</div>
                
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>    
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">0</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header bg-success border-success">
                    Pesan
                </h6>
                
                <!-- Template bila ada pesan masuk -->
                <!-- <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a> -->
                
                <div class="dropdown-item text-center medium text-gray-500 bg-light py-4"> Tidak ada pesan </div>

                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    <?php
                        echo $fullName;
                    ?>
                </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/VJa9L3ZVBIc/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Selamat Datang di aplikasi ini</h1>

            <div class="row">
            
                <!-- Card Jumlah Sapi Sehat -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Jumlah Sapi Sehat </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php echo $jumlah_sapi_sehat;?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Jumlah Kandang Baik -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Jumlah Kandang Bagus </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php echo $jumlah_kandang_bagus;?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-warehouse fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Jumlah Sapi Sakit -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"> Jumlah Sapi Sakit </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php echo $jumlah_sapi_sakit;?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Jumlah Kandang Rusak -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"> Jumlah Kandang Rusak </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php echo $jumlah_kandang_rusak;?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-warehouse fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- Table -->
            <div class="row">
                <div class="col-lg-6 col-md-12">
                  <h1 class="h3 mb-4 text-gray-800"> Preview Data Sapi </h1>
                  <!-- Tables -->
                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="table table-bordered table-striped" id="dataTableSapi">
                              <thead>
                                  <tr>
                                      <th> No. </th>
                                      <th> ID Sapi </th>
                                      <th> Jenis </th>
                                      <th> Berat </th>
                                      <th> Status Kesehatan </th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php
                                  $no_urut = 1;
                                  foreach($preview_sapi as $rowSapi)
                                  {
                                    ?>
                                      <tr>
                                        <td> <?php echo $no_urut++;?> </td>
                                        <td> <?php echo $rowSapi->id_sapi;?> </td>
                                        <td> <?php echo $rowSapi->jenis;?> </td>
                                        <td> <?php echo $rowSapi->berat;?> </td>
                                        <td> <?php echo $rowSapi->status_kesehatan;?> </td>
                                      </tr>
                                    <?php
                                  }                              
                              ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12">
                  <h1 class="h3 mb-4 text-gray-800"> Preview Data Kandang </h1>
                  <!-- Tables -->
                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="table table-bordered table-striped" id="dataTableKandang">
                              <thead>
                                  <tr>
                                      <th> No. </th>
                                      <th> ID Kandang </th>
                                      <th> Luas </th>
                                      <th> Jumlah Tampung </th>
                                      <th> Kondisi Kandang </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                      $no_urut_kandang = 1;
                                      foreach($preview_kandang as $rowKandang)
                                      {
                                        ?>
                                            <tr>
                                                <td> <?php echo $no_urut_kandang; ?> </td>
                                                <td> <?php echo $rowKandang->id_kandang;?> </td>
                                                <td> <?php echo $rowKandang->luas;?> </td>
                                                <td> <?php echo $rowKandang->jumlah_tampung;?> </td>
                                                <td> <?php echo $rowKandang->kondisi_kandang;?> </td>
                                            </tr>
                                        <?php
                                        $no_urut_kandang++;
                                      }
                                  ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; SiTernak 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="<?php echo base_url('admin/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
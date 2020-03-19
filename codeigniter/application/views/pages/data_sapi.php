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
        <li class="nav-item">
            <a href="<?php echo base_url('admin/home');?>" class="nav-link">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
        </li>

        <!-- Nav Item Tabel -->
        <li class="nav-item active">
            <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapseMaster" aria-expanded="true" aria-controls="collapseMaster">
                <i class="fas fa-fw fa-table"></i>
                <span>Master</span>
            </a>
            <div id="collapseMaster" class="collapse" aria-labelledby="headingMaster" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header"> Tabel Master </h6>
                    <a href="<?php echo base_url('admin/masterSapi')?>" class="collapse-item active"> Tabel Ternak </a>
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
            <h1 class="h3 mb-4 text-gray-800">Data Sapi</h1>
            
            <!-- Option Button -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <button class="btn btn-success text-white w-100" data-toggle="modal" data-target="#tambahModalSapi"> Tambah </button>
                </div>
            </div>

            <!-- Table -->
            <div class="row">
                <div class="col">
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
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no_urut = 1;
                                        foreach($data_sapi as $row)
                                        {
                                            ?>
                                                <tr>
                                                    <td><?php echo $no_urut;?></td>
                                                    <td><?php echo $row->id_sapi;?></td>
                                                    <td><?php echo $row->jenis;?></td>
                                                    <td><?php echo $row->berat."kg";?></td>
                                                    <td><?php echo $row->status_kesehatan;?></td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <button class="btn btn-primary text-white w-100" data-toggle="modal" data-target="#updateSapiModal<?php echo $no_urut;?>">
                                                                    <i class="far fa-edit text-white"></i>
                                                                    <span>Ubah</span>
                                                                </button>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <button class="btn btn-danger text-white w-100" data-toggle="modal" data-target="#hapusModalSapi<?php echo $no_urut;?>">
                                                                    <i class="far fa-trash-alt text-white"></i>
                                                                    <span>Hapus</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            $no_urut++;
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


  <!-- Tambah Sapi Modal -->
  <div class="modal fade" id="tambahModalSapi" tabindex="-1" role="dialog" aria-labelledby="tambahModalSapiTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="tambahModalSapiTitle"> Tambah Data </h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">x</span>
              </button>
            </div>
            <div class="modal-body"> Untuk tambah sapi. </div>
            <div class="modal-footer">
              <button class="btn btn-outline-secondary" type="button" data-dismiss="modal"> Cancel </button>
              <button type="submit" class="btn btn-primary" name="tambahSapiButton" id="tambahSapiButton"> Simpan </button>
            </div>
        </div>
      </div>
  </div>

  <!-- Hapus Sapi Modal -->
  <?php
  
      $no_urut_hapus = 1;
      foreach($data_sapi as $rowHapusSapi)
      {
        ?>
          <div class="modal fade" id="hapusModalSapi<?php echo $no_urut_hapus;?>" tabindex="-1" role="dialog" aria-labelledby="hapusModalSapiTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="hapusModalSapiTitle">Notifikasi</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">Apakah anda yakin menghapus data ini ?.</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-danger" href="<?php echo base_url('admin/hapusSapi/'.$rowHapusSapi->id_sapi);?>">Hapus</a>
                </div>
              </div>
            </div>
          </div>
        <?php
        $no_urut_hapus++;
      }
  
  ?>

   <!-- Ubah Sapi Modal -->
   <?php

       $no_urut_form = 1;
       foreach($data_sapi as $rowFormUbah)
       {
           ?>
           <div class="modal fade" id="updateSapiModal<?php echo $no_urut_form;?>" tabindx="-1" role="dialog" aria-labelledby="updateSapiModalTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateSapiModalTitle"> Ubah Data </h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <form action="<?php echo base_url('admin/ubahSapi');?>" method="post" id="formUbahSapi">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="idSapi"> ID Sapi </label>
                                    <input type="text" name="idSapi" class="form-control w-25 text-center" id="idSapi" value="<?php echo $rowFormUbah->id_sapi;?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="jenisSapi"></label>
                                    <select name="jenisSapi" id="jenisSapi" class="custom-select">
                                        <?php
                                            switch($rowFormUbah->jenis)
                                            {
                                                case "Brahman" :
                                                    ?>
                                                        <option value="Brahman" selected> Brahman </option>
                                                        <option value="Beefalo"> Beefalo </option>
                                                        <option value="Limousin"> Limousin </option>
                                                        <option value="Angus"> Angus </option>
                                                        <option value="Brangus"> Brangus </option>
                                                        <option value="Hereford"> Hereford </option>
                                                        <option value="Braford"> Braford </option>
                                                        <option value="Madura"> Madura </option>
                                                        <option value="Bali"> Bali </option>
                                                    <?php
                                                break;

                                                case "Beefalo" :
                                                    ?>
                                                        <option value="Brahman"> Brahman </option>
                                                        <option value="Beefalo" selected> Beefalo </option>
                                                        <option value="Limousin"> Limousin </option>
                                                        <option value="Angus"> Angus </option>
                                                        <option value="Brangus"> Brangus </option>
                                                        <option value="Hereford"> Hereford </option>
                                                        <option value="Braford"> Braford </option>
                                                        <option value="Madura"> Madura </option>
                                                        <option value="Bali"> Bali </option>
                                                    <?php
                                                break;

                                                case "Limousin" :
                                                    ?>
                                                        <option value="Brahman"> Brahman </option>
                                                        <option value="Beefalo"> Beefalo </option>
                                                        <option value="Limousin" selected> Limousin </option>
                                                        <option value="Angus"> Angus </option>
                                                        <option value="Brangus"> Brangus </option>
                                                        <option value="Hereford"> Hereford </option>
                                                        <option value="Braford"> Braford </option>
                                                        <option value="Madura"> Madura </option>
                                                        <option value="Bali"> Bali </option>
                                                    <?php
                                                break;

                                                case "Angus" :
                                                    ?>
                                                        <option value="Brahman"> Brahman </option>
                                                        <option value="Beefalo"> Beefalo </option>
                                                        <option value="Limousin"> Limousin </option>
                                                        <option value="Angus" selected> Angus </option>
                                                        <option value="Brangus"> Brangus </option>
                                                        <option value="Hereford"> Hereford </option>
                                                        <option value="Braford"> Braford </option>
                                                        <option value="Madura"> Madura </option>
                                                        <option value="Bali"> Bali </option>
                                                    <?php
                                                break;

                                                case "Brangus" :
                                                    ?>
                                                        <option value="Brahman"> Brahman </option>
                                                        <option value="Beefalo"> Beefalo </option>
                                                        <option value="Limousin"> Limousin </option>
                                                        <option value="Angus"> Angus </option>
                                                        <option value="Brangus" selected> Brangus </option>
                                                        <option value="Hereford"> Hereford </option>
                                                        <option value="Braford"> Braford </option>
                                                        <option value="Madura"> Madura </option>
                                                        <option value="Bali"> Bali </option>
                                                    <?php
                                                break;

                                                case "Hereford" :
                                                    ?>
                                                        <option value="Brahman"> Brahman </option>
                                                        <option value="Beefalo"> Beefalo </option>
                                                        <option value="Limousin"> Limousin </option>
                                                        <option value="Angus"> Angus </option>
                                                        <option value="Brangus"> Brangus </option>
                                                        <option value="Hereford" selected> Hereford </option>
                                                        <option value="Braford"> Braford </option>
                                                        <option value="Madura"> Madura </option>
                                                        <option value="Bali"> Bali </option>
                                                    <?php
                                                break;

                                                case "Braford" :
                                                    ?>
                                                        <option value="Brahman"> Brahman </option>
                                                        <option value="Beefalo"> Beefalo </option>
                                                        <option value="Limousin"> Limousin </option>
                                                        <option value="Angus"> Angus </option>
                                                        <option value="Brangus"> Brangus </option>
                                                        <option value="Hereford"> Hereford </option>
                                                        <option value="Braford" selected> Braford </option>
                                                        <option value="Madura"> Madura </option>
                                                        <option value="Bali"> Bali </option>
                                                    <?php
                                                break;

                                                case "Madura" :
                                                    ?>
                                                        <option value="Brahman"> Brahman </option>
                                                        <option value="Beefalo"> Beefalo </option>
                                                        <option value="Limousin"> Limousin </option>
                                                        <option value="Angus"> Angus </option>
                                                        <option value="Brangus"> Brangus </option>
                                                        <option value="Hereford"> Hereford </option>
                                                        <option value="Braford"> Braford </option>
                                                        <option value="Madura" selected> Madura </option>
                                                        <option value="Bali"> Bali </option>
                                                    <?php
                                                break;

                                                case "Bali" :
                                                    ?>
                                                        <option value="Brahman"> Brahman </option>
                                                        <option value="Beefalo"> Beefalo </option>
                                                        <option value="Limousin"> Limousin </option>
                                                        <option value="Angus"> Angus </option>
                                                        <option value="Brangus"> Brangus </option>
                                                        <option value="Hereford"> Hereford </option>
                                                        <option value="Braford"> Braford </option>
                                                        <option value="Madura"> Madura </option>
                                                        <option value="Bali" selected> Bali </option>
                                                    <?php
                                                break;
                                            }
                                        ?>
                                    </select>
                                    <?php echo form_error('jenisSapi','<p class="text-center text-danger mt-2" style="font-size: 12px;">','</p>');?>
                                </div>
                                <div class="form-group">
                                    <label for="jkSapi"> Jenis Kelamin </label>
                                    <select name="jkSapi" id="jkSapi" class="custom-select">
                                        <?php
                                            switch($rowFormUbah->jenis_kelamin)
                                            {
                                                case "Laki - Laki" :
                                                    ?>
                                                        <option value="Laki - Laki" selected> Laki - Laki </option>
                                                        <option value="Perempuan"> Perempuan </option>
                                                    <?php
                                                break;

                                                case "Perempuan" :
                                                    ?>
                                                        <option value="Laki - Laki"> Laki - Laki </option>
                                                        <option value="Perempuan" selected> Perempuan </option>
                                                    <?php
                                                break;
                                            }                                        
                                        ?>
                                    </select>
                                    <?php echo form_error('jkSapi','<p class="text-center text-danger mt-2" style="font-size: 12px;">','</p>');?>
                                </div>
                                <div class="form-group">
                                    <label for="usiaSapi"> Usia Sapi </label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-xs-12">
                                            <input type="number" name="usiaSapi" id="usiaSapi" class="form-control w-100 text-center" value="<?php echo $rowFormUbah->usia;?>">
                                            <?php echo form_error('usiaSapi','<p class="text-center text-danger mt-2" style="font-size: 12px;">','</p>');?>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12">
                                            <p class="form-text"> Tahun </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="beratSapi"> Berat Sapi </label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-xs-12">
                                            <input type="number" name="beratSapi" id="beratSapi" class="form-control w-100 text-center" value="<?php echo $rowFormUbah->berat;?>">
                                            <?php echo form_error('beratSapi','<p class="text-center text-danger mt-2" style="font-size: 12px;">','</p>');?>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12">
                                            <p class="form-text"> Kg </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="statusSapi"></label>
                                    <select name="statusSapi" id="statusSapi" class="custom-select">
                                        <?php
                                            switch($rowFormUbah->status_kesehatan)
                                            {
                                                case "Sehat" :
                                                    ?>
                                                        <option value="Sehat" selected> Sehat </option>
                                                        <option value="Sakit"> Sakit </option>
                                                        <option value="Karantina"> Karantina </option>
                                                    <?php
                                                break;

                                                case "Sakit" :
                                                    ?>
                                                        <option value="Sehat"> Sehat </option>
                                                        <option value="Sakit" selected> Sakit </option>
                                                        <option value="Karantina"> Karantina </option>
                                                    <?php
                                                break;

                                                case "Karantina" :
                                                    ?>
                                                        <option value="Sehat"> Sehat </option>
                                                        <option value="Sakit"> Sakit </option>
                                                        <option value="Karantina" selected> Karantina </option>
                                                    <?php
                                                break;
                                            }                                        
                                        ?>
                                    </select>
                                    <?php echo form_error('statusSapi','<p class="text-center text-danger mt-2" style="font-size: 12px;">','</p>');?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-outline-danger" type="button" data-dismiss="modal"> Cancel </button>
                                <button class="btn btn-primary" type="submit" name="ubahSapi"> Ubah </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           <?php
           $no_urut_form++;
       }
   
   ?>
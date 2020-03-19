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
                    <a href="<?php echo base_url('admin/masterSapi')?>" class="collapse-item"> Tabel Ternak </a>
                    <a href="<?php echo base_url('admin/masterKandang');?>" class="collapse-item active"> Tabel Kandang </a>
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
            <h1 class="h3 mb-4 text-gray-800">Data Kandang</h1>
            
            <!-- Option Button -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <button class="btn btn-success text-white w-100" data-toggle="modal" data-target="#tambahModalKandang"> Tambah </button>
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
                                        <th class="text-center"> ID Kandang </th>
                                        <th class="text-center"> Kapasitas </th>
                                        <th class="text-center"> Luas </th>
                                        <th class="text-center"> Kondisi </th>
                                        <th class="text-center"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no_urut = 1;
                                        foreach($data_kandang as $row)
                                        {
                                            ?>
                                                <tr>
                                                    <td><?php echo $no_urut.'.';?></td>
                                                    <td class="text-center"><?php echo $row->id_kandang;?></td>
                                                    <td class="text-center"><?php echo $row->jumlah_tampung." Ekor";?></td>
                                                    <td class="text-center"><?php echo $row->luas."m"?><sup>2</sup><?php;?></td>
                                                    <td class="text-center"><?php echo $row->kondisi_kandang;?></td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <button class="btn btn-primary text-white w-100" data-toggle="modal" data-target="#updateKandangModal<?php echo $no_urut;?>">
                                                                    <i class="far fa-edit text-white"></i>
                                                                    <span>Ubah</span>
                                                                </button>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <button class="btn btn-danger text-white w-100" data-toggle="modal" data-target="#hapusModalKandang<?php echo $no_urut;?>">
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
  <?php
    $idKandangLama = $row->id_kandang;
    $idKandangBaru = intval(substr($idKandangLama,3));

    if(strlen($idKandangBaru) == 1)
    {
      $idKandangBaru = 'KDG00'.($idKandangBaru+1);
    }else if(strlen($idKandangBaru) == 2)
    {
      $idKandangBaru = 'KDG0'.($idKandangBaru+1);
    }else if(strlen($idKandangBaru) == 3)
    {
      $idKandangBaru = 'KDG'.($idKandangBaru+1);
    }

    
  ?>
  <div class="modal fade" id="tambahModalKandang" tabindex="-1" role="dialog" aria-labelledby="tambahModalKandangTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="tambahModalKandangTitle"> Tambah Data </h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">x</span>
              </button>
            </div>
            <form action="<?php echo base_url('admin/tambahKandang');?>" method="post">
              <div class="modal-body">
                  <div class="form-group">
                      <label for="idKandangTambah"> ID Kandang </label>
                      <input type="text" name="idKandangTambah" id="idKandangTambah" class="form-control w-25" value="<?php echo $idKandangBaru;?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="jumlahTampungTambah"> Jumlah Tampung </label>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="number" name="jumlahTampungTambah" id="jumlahTampungTambah" class="form-control" placeholder="0">
                        <?php echo form_error('jumlahTampungTambah','<p class="text-center text-danger mt-2" style="font-size: 12px;">','</p>');?>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="text-form"> Ekor </p>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="luasKandangTambah"> Luas Kandang </label>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="number" name="luasKandangTambah" id="luasKandangTambah" class="form-control" placeholder="0">
                        <?php echo form_error('luasKandangTambah','<p class="text-center text-danger mt-2" style="font-size: 12px;">','</p>');?>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="text-form"> m<sup>2</sup> </p>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="kondisiKandangTambah"> Kondisi Kandang </label>
                    <select name="kondisiKandangTambah" id="kondisiKandangTambah" class="custom-select">
                      <option value="Bagus">Bagus</option>
                      <option value="Rusak">Rusak</option>
                      <option value="Kotor">Kotor</option>
                      <option value="Bersih">Bersih</option>
                    </select>
                    <?php echo form_error('kondisiKandangTambah','<p class="text-center text-danger mt-2" style="font-size: 12px;">','</p>');?>
                  </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-outline-secondary" type="button" data-dismiss="modal"> Cancel </button>
                <button type="submit" class="btn btn-primary" name="tambahSapiButton" id="tambahKandangButton"> Simpan </button>
              </div>
            </form>
        </div>
      </div>
  </div>

  <!-- Hapus Sapi Modal -->
  <?php
  
      $no_urut_hapus = 1;
      foreach($data_kandang as $rowHapusKandang)
      {
        ?>
          <div class="modal fade" id="hapusModalKandang<?php echo $no_urut_hapus;?>" tabindex="-1" role="dialog" aria-labelledby="hapusModalKandangTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="hapusModalKandangTitle">Notifikasi</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">Apakah anda yakin menghapus data ini ?.</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-danger" href="<?php echo base_url('admin/hapusKandang/'.$rowHapusKandang->id_kandang);?>">Hapus</a>
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
       foreach($data_kandang as $rowFormUbah)
       {
           ?>
           <div class="modal fade" id="updateKandangModal<?php echo $no_urut_form;?>" tabindex="-1" role="dialog" aria-labelledby="updateKandangModalTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateKandangModalTitle"> Ubah Data </h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <form action="<?php echo base_url('admin/ubahKandang');?>" method="post" id="formUbahKandang">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="idKandang"> ID Sapi </label>
                                    <input type="text" name="idKandang" class="form-control w-25 text-center" id="idKandang" value="<?php echo $rowFormUbah->id_kandang;?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="jumlahTampung"> Jumlah Tampung </label>
                                    <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <input type="number" name="jumlahTampung" id="jumlahTampung" class="form-control" placeholder="0" value="<?php echo $rowFormUbah->jumlah_tampung;?>">
                                        <?php echo form_error('jumlahTampung','<p class="text-center text-danger mt-2" style="font-size: 12px;">','</p>');?>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <p class="text-form"> Ekor </p>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="luasKandang"> Luas Kandang </label>
                                    <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <input type="number" name="luasKandang" id="luasKandang" class="form-control" placeholder="0" value="<?php echo $rowFormUbah->luas;?>">
                                        <?php echo form_error('luasKandang','<p class="text-center text-danger mt-2" style="font-size: 12px;">','</p>');?>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <p class="text-form"> m<sup>2</sup> </p>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kondisiKandang"> Kondisi Kandang </label>
                                    <select name="kondisiKandang" id="kondisiKandang" class="custom-select">
                                        <?php
                                            
                                            switch($rowFormUbah->kondisi_kandang)
                                            {
                                                case "Bagus" : 
                                                    ?>
                                                        <option value="Bagus" selected>Bagus</option>
                                                        <option value="Rusak">Rusak</option>
                                                        <option value="Kotor">Kotor</option>
                                                        <option value="Bersih">Bersih</option>
                                                    <?php
                                                break;

                                                case "Rusak" : 
                                                    ?>
                                                        <option value="Bagus">Bagus</option>
                                                        <option value="Rusak" selected>Rusak</option>
                                                        <option value="Kotor">Kotor</option>
                                                        <option value="Bersih">Bersih</option>
                                                    <?php
                                                break;

                                                case "Kotor" : 
                                                    ?>
                                                        <option value="Bagus">Bagus</option>
                                                        <option value="Rusak">Rusak</option>
                                                        <option value="Kotor" selected>Kotor</option>
                                                        <option value="Bersih">Bersih</option>
                                                    <?php
                                                break;

                                                case "Bersih" : 
                                                    ?>
                                                        <option value="Bagus">Bagus</option>
                                                        <option value="Rusak">Rusak</option>
                                                        <option value="Kotor">Kotor</option>
                                                        <option value="Bersih" selected>Bersih</option>
                                                    <?php
                                                break;
                                            }
                                            
                                        ?>
                                    </select>
                                    <?php echo form_error('kondisiKandang','<p class="text-center text-danger mt-2" style="font-size: 12px;">','</p>');?>
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
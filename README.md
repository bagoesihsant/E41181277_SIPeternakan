# Dokumentasi Sistem Informasi Sederhana dengan tema Peternakan
Berikut ini adalah dokumentasi dari Sistem Informasi Peternakan.

## Requirements
- [PHP](https://www.php.net/) 7.2.28 atau lebih baru.
- [Code Igniter](https://codeigniter.com/) 3.1.11.
- [XAMPP](https://www.apachefriends.org/download.html) 7.2.28 atau lebih baru.
- [Visual Studio Code](https://code.visualstudio.com/) atau text editor lainnya.

## Instalasi
  1. Download [Code Igniter](https://codeigniter.com/) dan kemudian ekstrak.
  2. Buka [Code Igniter](https://codeigniter.com/) dan jalankan dengan browser menggunakan bantuan [XAMPP](https://www.apachefriends.org/download.html).
  3. Kemudian buka text editor anda, dan buka [Code Igniter](https://codeigniter.com/) di dalamnya.
  
## Penggunaan
   
   ### 1. _autoload.php_
   File ini berfungsi untuk memuat seluruh **_library_** atau **_helper_** secara otomatis kedalam **Code Igniter**.
   1. Pertama, buka folder **application/config** kemudian buka file **_autoload.php_**
   
      ![imgDokumentasi1](https://github.com/bagoesihsant/E41181277_SIPeternakan/blob/master/img_dokumentasi/Screenshot_1.png)
      
   2. Kemudian temukan baris kode dibawah ini :
      ```php
      $autoload['libraries'] = array();
      ```
   3. Kemudian ubah menjadi seperti ini :
      ```php
      $autoload['libraries'] = array('database','form_validation','session');
      ```
   4. Kode tersebut berfungsi untuk memuat library **_database, form_validation, dan session_** yang akan digunakan nanti.
   5. Kemudian temukan baris kode dibawah ini :
      ```php
      $autoload['helper'] = array();
      ```
   6. Kemudian ubah menjadi seperti ini :
      ```php
      $autoload['helper'] = array('url');
      ```
   7. Kode tersebut berfungsi untuk memuat helper **_url_** yang akan digunakan nanti.
          
   ### 2. _config.php_
   File ini berfungsi untuk melakukan konfigurasi terhadap **Code Igniter**.
   1. Pertama, buka folder **application/config** kemudian buka file **_config.php_**.
   
      ![imgDokumentasi2](https://github.com/bagoesihsant/E41181277_SIPeternakan/blob/master/img_dokumentasi/Screenshot_2.png)
      
   2. Kemudian temukan baris kode dibawah ini :
      ```php
      $config['base_url'] = '';
      ```
   3. Kemudian ubah baris kode tersebut seperti ini :
      ```php
      $config['base_url'] = 'http://localhost/Git/E41181277_SIPeternakan/codeigniter/';
      ```
   4. Kode tersebut berfungsi untuk memberi nilai atau isi dari fungsi **_base_url_** yang nanti akan digunakan.
   5. Isi atau nilai dari variabel tersebut tergantung direktori yang anda gunakan atau domain yang anda gunakan.
   6. Kemudian temukan baris kode dibawah ini :
      ```php
      $config['index_page'] = 'index.php';
      ```
   7. Kemudian ubah baris kode tersebut seperti ini :
      ```php
      $config['index_page'] = '';
      ```
   8. Tujuan kita mengosongkan nilai dari variabel tersebut adalah, ketika menggunakan fungsi **_base_url_** dan menggunakan file **_.htaccess_** kita tidak perlu menambahkan **index.php** didalam URL.
   
   ### 3. _database.php_
   File ini berfungsi untuk menyambungkan **Code Igniter** dengan database yang kita miliki dibantu oleh **XAMPP**.
   1. Pertama, buka folder **application/config** kemudian buka file **_config.php_**.
      
      ![imgDokumentasi3](https://github.com/bagoesihsant/E41181277_SIPeternakan/blob/master/img_dokumentasi/Screenshot_3.png)
      
   2. Kemudian temukan baris kode dibawah ini :
      ```php
      $db['default'] = array(
        'dsn'	=> '',
        'hostname' => 'localhost',
        'username' => '',
        'password' => '',
        'database' => '',
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => FALSE,
        'db_debug' => (ENVIRONMENT !== 'production'),
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
      );
      ```
   3. Kemudian ubah menjadi seperti ini :
      ```php
      $db['default'] = array(
        'dsn'	=> '',
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'si_ternak',
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => FALSE,
        'db_debug' => (ENVIRONMENT !== 'production'),
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
      );
      ```
   4. Fungsi dari baris kode diatas adalah menyambungkan **Code Igniter** dengan database yang kita pilih, disini kita menggunakan **si_ternak**. Untuk _username_ dan _password_ menyesuaikan dengan konfigurasi **XAMPP** atau domain anda masing - masing.
   
   ### 4. _routes.php_
   File ini berfungsi untuk mengatur _routing_ atau pengarahan URL yang diketikkan oleh user di browser.
   1. Pertama, buka folder **application/config** dan buka **_routes.php_**.
      
      ![imgDokumentasi4](https://github.com/bagoesihsant/E41181277_SIPeternakan/blob/master/img_dokumentasi/Screenshot_4.png)
      
   2. Kemudian temukan baris kode berikut :
      ```php
      $route['default_controller'] = 'welcome';
      $route['404_override'] = '';
      $route['translate_uri_dashes'] = FALSE;
      ```
   3. Kemudian ubah kode tersebut seperti ini :
      ```php
      $route['default_controller'] = 'admin';
      $route['404_override'] = '';
      $route['translate_uri_dashes'] = FALSE;
      ```
   4. Fungsi dari baris kode diatas adalah merubah kemana user akan diarahkan ketika pertama kali membuka web, disini user diarahkan menuju **Controller** admin.
   
   ### 5. _Admin.php_
   File ini berfungsi sebagai **Controller**. **Controller** adalah file dalam **Code Igniter** yang menjadi pusat dan berperan sebagai pengendali dalam sebuah projek.
   1. Pertama, buka folder **application/controllers**, kemudian buat file baru bernama **_Admin.php__**.
      
      ![imgDokumentasi5](https://github.com/bagoesihsant/E41181277_SIPeternakan/blob/master/img_dokumentasi/Screenshot_5.png)
      
   2. Kemudian ketikkan baris kode dibawah ini :
      ```php
      <?php

          defined('BASEPATH') OR exit('No direct script access allowed');

          class Admin extends CI_Controller
          {

              public function __construct()
              {
                  parent::__construct();
              }


              //Sebagai Index atau halaman yang nanti pertama kali dibuka
              public function index()
              {
                  $this->load->view('template/header');
                  $this->load->view('pages/login');
                  $this->load->view('template/footer');
              }


              //Berfungsi untuk menampilkan view login dari folder view
              public function login()
              {
                  $this->load->view('template/header');
                  $this->load->view('pages/login');
                  $this->load->view('template/footer');
              }

              //Befungsi untuk melakukan proses login
              public function cekLogin()
              {
                  //Melakukan validasi form
                  $this->form_validation->set_rules('loginEmail','Email','trim|required|strip_tags|valid_email');
                  $this->form_validation->set_rules('loginPassword','Password','trim|required|strip_tags');

                  //Mengatur atau mengubah pesan dari aturan set_rules
                  $this->form_validation->set_message('required','Kolom %s tidak boleh kosong.');
                  $this->form_validation->set_message('trim','Kolom %s berisi karakter yang dilarang.');
                  $this->form_validation->set_message('strip_tags','Kolom %s berisi karakter yang dilarang.');
                  $this->form_validation->set_message('valid_email','Maaf email yang anda masukkan tidak benar.');

                  //Menjalankan form
                  if($this->form_validation->run() == false)
                  {
                      $this->login();
                  }else
                  {
                      //Menangkap isi dari input
                      $email = $this->input->post('loginEmail');
                      $password = $this->input->post('loginPassword');

                      //Membuat parameter untuk model
                      $where = array(
                          'email' => $email,
                          'password' => md5($password),
                          'status' => 1
                      );

                      //Mengambil data dari database
                      $hasilLogin = $this->m_admin->loginUser($where,'tb_user')->num_rows();

                      if($hasilLogin > 0)
                      {
                          //Apabila user ditemukan
                          $detailLogin = $this->m_admin->loginUser($where,'tb_user')->result();

                          //Menyimpan detail login yang ditemukan kedalam session
                          foreach($detailLogin as $row)
                          {
                              $data_session = array(
                                  'nama_depan' => $row->nama_depan,
                                  'nama_belakang' => $row->nama_belakang,
                                  'email' => $row->email,
                                  'statusLogin' => true
                              );

                              $this->session->set_userdata($data_session);

                              //Mengembalikan kehalaman utama
                              redirect('admin/home');

                          }

                      }else
                      {
                          //Apabila user tidak ditemukan
                          redirect('admin/login/userNotFound');
                      }

                  }

              }

              //Menampilkan view register
              public function register()
              {
                  $this->load->view('template/header');
                  $this->load->view('pages/register');
                  $this->load->view('template/footer');
              }

              //Berfungsi sebagai pendaftaran atau register user
              public function registerUser()
              {
                  //Melakukan validasi form
                  //Membuat peraturan untuk form
                  $this->form_validation->set_rules('registerFirstName','Nama Depan','trim|required|strip_tags');
                  $this->form_validation->set_rules('registerLastName','Nama Belakang','trim|required|strip_tags');
                  $this->form_validation->set_rules('registerEmail','Email','trim|required|valid_email|strip_tags|is_unique[tb_user.email]');
                  $this->form_validation->set_rules('registerPassword','Password','trim|required|strip_tags');
                  $this->form_validation->set_rules('registerRepeatPassword','Konfirmasi Password','trim|required|strip_tags');

                  //Mengatur atau mengubah pesan dari aturan set_rules
                  $this->form_validation->set_message('required','Kolom %s tidak boleh kosong.');
                  $this->form_validation->set_message('trim','Kolom %s mengandung karakter yang dilarang.');
                  $this->form_validation->set_message('valid_email','Email yang anda inputkan salah.');
                  $this->form_validation->set_message('is_unique','Maaf %s sudah terpakai.');

                  //Menjalankan form
                  if($this->form_validation->run() == false)
                  {
                      $this->register();
                  }else
                  {
                      //Mengambil nilai dari input
                      $firstName = $this->input->post('registerFirstName');
                      $lastName = $this->input->post('registerLastName');
                      $email = $this->input->post('registerEmail');
                      $password = $this->input->post('registerPassword');
                      $confPassword = $this->input->post('registerRepeatPassword');

                      //Mengambil data dari database
                      $jumlahUser = $this->m_admin->tampilUser()->num_rows();

                      if($password === $confPassword)
                      {

                          if($jumlahUser > 0)
                          {
                              //Membuat variabel berupa array yang akan digunakan untuk insert ke database
                              $userTerakhir = $this->m_admin->tampilUserTerakhir()->result();

                              foreach($userTerakhir as $row)
                              {
                                  //Memecah atau membuat increment untuk ID User apabila user lebih dari 1 
                                  $lastId = substr($row->id_user,3);
                                  $lastIdNumber = intval($lastId);

                                  if(strlen($lastIdNumber) == 1)
                                  {
                                      $newId = 'USR00'.($lastIdNumber + 1);
                                  }else if(strlen($lastIdNumber) == 2)
                                  {
                                      $newId = 'USR0'.($lastIdNumber + 1);
                                  }else if(strlen($lastIdNumber) == 3)
                                  {
                                      $newId = 'USR'.($lastIdNumber + 1);
                                  }

                                  //Menyimpan data yang diinputkan oleh user kedalam variabel array
                                  $data = array(
                                      'id_user' => $newId,
                                      'email' => $email,
                                      'nama_depan' => $firstName,
                                      'nama_belakang' => $lastName,
                                      'password' => md5($password),
                                      'token' => '',
                                      'status' => 1
                                  );

                                  //Menjalankan method
                                  if($this->m_admin->registerUser($data,'tb_user'))
                                  {
                                      //Apabila berhasil
                                      redirect('admin/login/successRegister');
                                  }else
                                  {
                                      //Apabila gagal
                                      redirect('admin/register/failedRegister');
                                  }

                              }

                          }else
                          {
                              //Membuat variabel berupa array yang akan digunakan untuk insert ke database apabila user kosong
                              $data = array(
                                  'id_user' => 'USR001',
                                  'email' => $email,
                                  'nama_depan' => $firstName,
                                  'nama_belakang' => $lastName,
                                  'password' => md5($password),
                                  'token' => '',
                                  'status' => 1
                              );

                              //Menjalankan method
                              if($this->m_admin->registerUser($data,'tb_user'))
                              {
                                  //Apabila berhasil
                                  redirect('admin/login/successRegister');
                              }else
                              {
                                  //Apabila gagal
                                  redirect('admin/register/failedRegister');
                              }
                          }

                      }else
                      {
                          redirect("admin/register/passwordNotMatch");
                      }

                  }

              }

              //Menampilkan view home
              public function home()
              {
                  //Menampilkan jumlah sapi yang sehat dari model
                  $jumlahSapiSehat = $this->m_admin->tampilSapi()->num_rows();
                  //Menampilkan jumlah sapi yang sakit dari model
                  $jumlahSapiSakit = $this->m_admin->tampilSapiSakit()->num_rows();
                  //Menampilkan jumlah kandang yang bagus dari model
                  $jumlahKandangBagus = $this->m_admin->tampilKandang()->num_rows();
                  //Menampilkan jumlah kandang yang rusak dari model
                  $jumlahKandangRusak = $this->m_admin->tampilKandangRusak()->num_rows();
                  //Menampilkan data terbatas dari tabel sapi melalui model
                  $previewKandang = $this->m_admin->tampilKandangPreview()->result();
                  //Menampilkan data terbatas dari tabel kandang melalui model
                  $previewSapi = $this->m_admin->tampilSapiPreview()->result();

                  //Menyimpan seluruh data tersebut kedalam sebuah variabel array
                  $data = array(
                      'jumlah_sapi_sehat' => $jumlahSapiSehat,
                      'jumlah_sapi_sakit' => $jumlahSapiSakit,
                      'jumlah_kandang_bagus' => $jumlahKandangBagus,
                      'jumlah_kandang_rusak' => $jumlahKandangRusak,
                      'preview_sapi' => $previewSapi,
                      'preview_kandang' => $previewKandang
                  );

                  //Menampilkan view home dan mengirimkan data yang sudah diambil diatas
                  $this->load->view('template/header');
                  $this->load->view('pages/home',$data);
                  $this->load->view('template/footer');
              }

              //Melakukan fungsi logout dengan menghancurkan session dari user
              public function logout()
              {
                  $this->session->sess_destroy();
                  redirect('admin/login');
              }

              //Menampilkan tampilan master sapi
              public function masterSapi()
              {
                  //Mengambil seluruh data dari tabel sapi
                  $dataSapi = $this->m_admin->tampilSapi()->result();

                  //Menyimpan data dari tabel sapi melalui model kedalam variabel array
                  $data = array(
                      'data_sapi' => $dataSapi
                  );

                  //Menampilkan view master sapi dan mengirimkan data yang sudah diambil diatas
                  $this->load->view('template/header');
                  $this->load->view('pages/data_sapi.php',$data);
                  $this->load->view('template/footer');

              }

              //Melakukan fungsi menambahkan data kedalam tabel sapi
              public function tambahSapi()
              {
                  //Melakukan validasi form
                  //Membuat aturan validasi

                  $this->form_validation->set_rules('jenisSapiTambah','Jenis Sapi','trim|required');
                  $this->form_validation->set_rules('beratSapiTambah','Berat Sapi','trim|required');
                  $this->form_validation->set_rules('jkSapiTambah','Jenis Kelamin','trim|required');
                  $this->form_validation->set_rules('usiaSapiTambah','Usia Sapi','trim|required');
                  $this->form_validation->set_rules('statusSapiTambah','Status Sapi','trim|required');

                  //Membuat pesan untuk hasil validasi form apabila salah
                  $this->form_validation->set_message('required','Kolom %s tidak boleh kosong.');
                  $this->form_validation->set_message('trim','Kolom %s mengandung karakter yang dilarang.');

                  //Menjalankan validasi form
                  if($this->form_validation->run() == false)
                  {
                      $this->masterSapi();
                  }else
                  {
                      //Menyimpan data kedalam variabel
                      $idSapi = $this->input->post('idSapiTambah');
                      $jenisSapi = $this->input->post('jenisSapiTambah');
                      $beratSapi = $this->input->post('beratSapiTambah');
                      $jkSapi = $this->input->post('jkSapiTambah');
                      $usiaSapi = $this->input->post('usiaSapiTambah');
                      $statusSapi = $this->input->post('statusSapiTambah');

                      //Membuat array berisikan data data
                      $data = array(
                          'id_sapi' => $idSapi,
                          'jenis' => $jenisSapi,
                          'berat' => $beratSapi,
                          'jenis_kelamin' => $jkSapi,
                          'usia' => $usiaSapi,
                          'status_kesehatan' => $statusSapi
                      );

                      //Menyimpan hasil dari menjalankan method kedalam variabel
                      $hasilInsert = $this->m_admin->tambahSapi($data,'tb_sapi');

                      //Jika method yang dijalankan berhasil
                      if($hasilInsert)
                      {
                          redirect('admin/masterSapi');
                      }else
                      {
                          //Jika method yang dijalankan gagal
                          redirect('admin/masterSapi/Error');
                      }

                  }

              }

              //Melakukan fungsi untuk mengubah data pada tabel sapi
              public function ubahSapi()
              {

                  //Melakukan validasi form
                  //Membuat aturan validasi
                  $this->form_validation->set_rules('jenisSapi','Jenis Sapi','required|trim');
                  $this->form_validation->set_rules('jkSapi','Jenis Kelamin Sapi','required|trim');
                  $this->form_validation->set_rules('usiaSapi','Usia Sapi','required|trim');
                  $this->form_validation->set_rules('beratSapi','Berat Sapi','required|trim');
                  $this->form_validation->set_rules('statusSapi','Status Sapi','required|trim');

                  //Membuat pesan untuk hasil validasi form apabila salah
                  $this->form_validation->set_message('required','Kolom %s tidak boleh kosong.');
                  $this->form_validation->set_message('trim','Kolom %s mengandung karakter yang dilarang.');

                  //Menjalankan validasi form
                  if($this->form_validation->run() == false)
                  {
                      $this->masterSapi();
                  }else
                  {
                      //Menyimpan data yang dikirim melalui form
                      $idSapi = $this->input->post('idSapi');
                      $jenisSapi = $this->input->post('jenisSapi');
                      $jkSapi = $this->input->post('jkSapi');
                      $usiaSapi = $this->input->post('usiaSapi');
                      $beratSapi = $this->input->post('beratSapi');
                      $statusSapi = $this->input->post('statusSapi');

                      //Menyimpan data diatas kedalam variabel array untuk dikirim ke method dalam model
                      $data = array(
                          'jenis' => $jenisSapi,
                          'berat' => $beratSapi,
                          'jenis_kelamin' => $jkSapi,
                          'usia' => $usiaSapi,
                          'status_kesehatan' => $statusSapi
                      );

                      //Menyimpan data diatas kedalam variabel array untuk dikirim ke method dalam model
                      $where = array(
                          'id_sapi' => $idSapi
                      );

                      //Menyimpan hasil menjalankan method kedalam variabel
                      $hasilUpdate = $this->m_admin->updateSapi($data,$where,'tb_sapi');

                      //Jika method berhasil dijalankan
                      if($hasilUpdate)
                      {
                          redirect('admin/masterSapi');
                      }else
                      {
                          //Jika method gagal dijalankan
                          redirect('admin/masterSapi/Error');
                      }

                  }


              }

              //Menjalankan fungsi untuk menghapus data dari tabel sapi
              public function hapusSapi($id)
              {

                  //Menyimpan parameter yang dikirimkan oleh user kedalam variabel array
                  $where = array(
                      'id_sapi' => $id
                  );

                  //Menyimpan hasil menjalankan method kedalam variabel
                  $hasilHapus = $this->m_admin->hapusSapi($where,'tb_sapi');

                  //Jika method berhasil dijalankan
                  if($hasilHapus)
                  {
                      redirect('admin/masterSapi');
                  }else
                  {
                      //Jika method gagal dijalankan
                      redirect('admin/masterSapi/Error');
                  }

              }

              //Berfungsi untuk menampilkan view master kandang
              public function masterKandang()
              {
                  //Mengambil seluruh data dari tabel kandang
                  $dataKandang = $this->m_admin->tampilKandang()->result();

                  //Menyimpan data dari tabel kandang kedalam variabel array untuk dikirim ke view
                  $data = array(
                      'data_kandang' => $dataKandang
                  );

                  //Menampilkan view data_kandang dan mengirimkan data berupa array
                  $this->load->view('template/header');
                  $this->load->view('pages/data_kandang',$data);
                  $this->load->view('template/footer');

              }

              //Menjalankan fungsi untuk menambahkan data kedalam tabel kandang
              public function tambahKandang()
              {
                  //Menjalankan validasi form
                  //Membuat aturan validasi form
                  $this->form_validation->set_rules('jumlahTampungTambah','Jumlah Tampung','trim|required');
                  $this->form_validation->set_rules('luasKandangTambah','Luas Kandang','trim|required');
                  $this->form_validation->set_rules('kondisiKandangTambah','Kondisi Kandang','trim|required');

                  //Membuat pesan validasi form
                  $this->form_validation->set_message('required','Kolom %s tidak boleh kosong.');
                  $this->form_validation->set_message('trim','Kolom %s mengandung karakter yang dilarang.');

                  //Menjalan form_validation
                  if($this->form_validation->run() == false)
                  {
                      $this->masterKandang();
                  }else
                  {
                      //Menyimpan data kedalam variabel
                      $idKandang = $this->input->post('idKandangTambah');
                      $jumlahTampung = $this->input->post('jumlahTampungTambah');
                      $luasKandang = $this->input->post('luasKandangTambah');
                      $kondisiKandang = $this->input->post('kondisiKandangTambah');

                      //Menyimpan variabel tersebut kedalam variabel array untuk dikirim ke model
                      $data = array(
                          'id_kandang' => $idKandang,
                          'jumlah_tampung' => $jumlahTampung,
                          'luas' => $luasKandang,
                          'kondisi_kandang' => $kondisiKandang
                      );

                      //Menyimpan hasil menjalankan method kedalam variabel
                      $hasilInsert = $this->m_admin->tambahKandang($data,'tb_kandang');

                      //Jika method berhasil dijalankan
                      if($hasilInsert)
                      {
                          redirect('admin/masterKandang');
                      }else
                      {
                          //Jika method gagal dijalankan
                          redirect('admin/masterKandang/Error');
                      }

                  }
              }

              //Menjalankan fungsi menghapus data dari tabel kandang
              public function hapusKandang($id_kandang)
              {
                  //Menyimpan parameter yang dikirim oleh user kedalam variabel array
                  $where = array(
                      'id_kandang' => $id_kandang
                  );

                  //Menyimpan hasil menjalankan method kedalam variabel
                  $hasilHapus = $this->m_admin->hapusKandang($where,'tb_kandang');

                  //Jika method berhasil dijalankan
                  if($hasilHapus)
                  {
                      redirect('admin/masterKandang');
                  }else
                  {
                      //Jika method gagal dijalankan
                      redirect('admin/masterKandang/Error');
                  }

              }

              //Berfungsi untuk mengubah data pada tabel kandang
              public function ubahKandang()
              {
                  //Membuat validasi form
                  //Membuat peraturan validasi form
                  $this->form_validation->set_rules('jumlahTampung','Jumlah Tampung','trim|required');
                  $this->form_validation->set_rules('luasKandang','Luas Kandang','trim|required');
                  $this->form_validation->set_rules('kondisiKandang','Kondisi Kandang','trim|required');

                  //Membuat pesan kustom
                  $this->form_validation->set_message('required','Kolom %s tidak boleh kosong.');
                  $this->form_validation->set_message('trim','Kolom %s mengandung karakter yang dilarang.');

                  //Menjalankan form_validation
                  if($this->form_validation->run() == false)
                  {
                      $this->masterKandang();
                  }else
                  {
                      //Menyimpan nilai kedalam variabel
                      $idKandang = $this->input->post('idKandang');
                      $jumlahTampung = $this->input->post('jumlahTampung');
                      $luasKandang = $this->input->post('luasKandang');
                      $kondisiKandang = $this->input->post('kondisiKandang');

                      //Menyimpan variabel kedalam array untuk dikirim ke model
                      $where = array(
                          'id_kandang' => $idKandang
                      );

                      //Menyimpan variabel kedalam array untuk dikirim ke model
                      $data = array(
                          'jumlah_tampung' => $jumlahTampung,
                          'luas' => $luasKandang,
                          'kondisi_kandang' => $kondisiKandang
                      );

                      //Menyimpan hasil menjalankan method kedalam variabel
                      $hasilUpdate = $this->m_admin->ubahKandang($data,$where,'tb_kandang');

                      //Jika method berhasil dijalankan
                      if($hasilUpdate)
                      {
                          redirect('admin/masterKandang');
                      }else
                      {
                          //Jika method gagal dijalankan
                          redirect('admin/masterKandang/Error');
                      }

                  }

              }

          }

      ?>
      ```
   3. Fungsi dari method **index** adalah menjadi fungsi pertama yang diakses ketika membuka website.
   4. Fungsi dari method **login** adalah menampilkan view / halaman **_login.php_** kepada user.
   5. Fungsi dari method **cekLogin** adalah melakukan proses pengecekan apakah _username_ dan _password_ yang dimasukkan ada dalam _database_.
   6. Fungsi dari method **register** adalah menampilkan view / halaman **_register.php_** kepada user.
   7. Fungsi dari method **registerUser** adalah melakukan proses pendaftaran / menambahkan data user kedalam _database_.
   8. Fungsi dari method **home** adalah menampilkan view / halaman **_home.php_** ditambah dengan data dari _database_.
   9. Fungsi dari method **logout** adalah menghapus _session_ dari user sehingga user keluar dari sisem ( logout ).
   10. Fungsi dari method **masterSapi** adalah menampilkan view / halaman **_data_sapi.php_** dengan data dari _database_ dan dilengkapi _form_ untuk proses CRUD.
   11. Fungsi dari method **tambahSapi** adalah menambahkan data dari user kedalam _database_.
   12. Fungsi dari method **ubahSapi** adalah mengubah data dalam _database_ berdasarkan input user.
   13. Fungsi dari method **hapusSapi** adalah menghapus data dalam _database_ berdasarkan input user.
   14. Fungsi dari method **masterKandang** adalah menampilkan view / halaman **_data_kandang.php_** dengan data dari _database_ dan dilengkapi _form_ untuk proses CRUD.
   15. Fungsi dari method **tambahKandang** adalah menambahkan data dari user kedalam _database_.
   16. Fungsi dari method **hapusKandang** adalah menghapus data dalam _database_ berdasarkan input user.
   17. Fungsi dari method **ubahKandang** adalah mengubah data dalam _database_ berdasarkan input user.
   
   ### 6. _M_Admin.php_
   File ini berfungsi sebagai **Model**.**Model** adalah file **Code Igniter** yang berfungsi sebagai media komunikasi **Code Igniter** dengan _database_.
   1. Pertama, buka folder **application/models**, kemudian buat file bernama **_M_Admin.php_**.
      
      ![imgDokumentasi6](https://github.com/bagoesihsant/E41181277_SIPeternakan/blob/master/img_dokumentasi/Screenshot_1.png)
      
   2. Kemudian ketikkan kode dibawah ini :
      ```php
      <?php

          defined('BASEPATH') OR exit('No direct script access allowed');

          class M_admin extends CI_Model
          {
              //Berfungsi untuk mengambil seluruh data dari tabel tb_sapi
              public function tampilSapi()
              {
                  return $this->db->get('tb_sapi');
              }

              //Berfungsi untuk mengambil seluruh data dari tabel tb_sapi
              //Dimana status_kesehatan sama dengan sakit atau karantina
              public function tampilSapiSakit()
              {
                  $data = array(
                      'status_kesehatan' => 'Sakit',
                      'status_kesehatan' => 'Karantina'
                  );
                  $this->db->where($data);
                  return $this->db->get('tb_sapi');
              }

              //Berfungsi untuk mengambil sebagian data dari tabel tb_sapi
              public function tampilSapiPreview()
              {
                  $this->db->limit(5);
                  return $this->db->get('tb_sapi');
              }

              //Berfungsi untuk mengambil seluruh data dari tabel tb_user
              public function tampilUser()
              {
                  return $this->db->get('tb_user');
              }

              //Berfungsi untuk mengambil seluruh data dari tabel tb_kandang
              public function tampilKandang()
              {
                  return $this->db->get('tb_kandang');
              }

              //Berfungsi untuk mengambil seluruh data dari tabel tb_kandang
              //Dimana kondisi_kandang sama dengan rusak atau kotor
              public function tampilKandangRusak()
              {
                  $data = array(
                      'kondisi_kandang' => 'Rusak',
                      'kondisi_kandang' => 'Kotor'
                  );
                  $this->db->where($data);
                  return $this->db->get('tb_kandang');
              }

              //Berfungsi untuk mengambil sebagian data dari tabel tb_kandang
              public function tampilKandangPreview()
              {
                  $this->db->limit(5);
                  return $this->db->get('tb_kandang');
              }

              //Berfungsi untuk mengambil 1 data dari tabel tb_user dan diurutkan dari yang paling besar
              public function tampilUserTerakhir()
              {
                  $this->db->order_by('id_user','DESC');
                  return $this->db->get('tb_user',1);
              }

              //Befungsi untuk menambahkan data kedalam tabel tb_user
              public function registerUser($data,$table)
              {
                  return $this->db->insert($table,$data);
              }

              //Befungsi untuk mengambil data dari tabel tb_user
              //Berdasarkan isi dari variabel where
              public function loginUser($where,$table)
              {
                  $this->db->where($where);
                  return $this->db->get($table);
              }

              //Befungsi untuk menambahkan data kedalam tabel tb_sapi
              public function tambahSapi($data,$table)
              {
                  return $this->db->insert($table,$data);
              }

              //Berfungsi untuk mengubah data dalam tabel tb_sapi sesuai input user
              //Berdasarkan id yang user pilih dalam variabel where
              public function updateSapi($data,$where,$table)
              {
                  $this->db->where($where);
                  return $this->db->update($table,$data);
              }

              //Berfungsi untuk menghapus data dari tabel tb_sapi sesuai pilihan user
              public function hapusSapi($where,$table)
              {
                  $this->db->where($where);
                  return $this->db->delete($table);
              }

              //Berfungsi untuk menambahkan data kedalam tabel tb_kandang
              public function tambahKandang($data,$table)
              {
                  return $this->db->insert($table,$data);
              }

              //Berfungsi untuk menghapus data dalam tabel tb_kandang
              //Berdasarkan parameter yang diberikan user
              public function hapusKandang($where,$table)
              {
                  $this->db->where($where);
                  return $this->db->delete($table);
              }

              //Berfungsi untuk mengubah data dalam tabel tb_kandang
              //Berdasarkan parameter yang diberikan user
              public function ubahKandang($data,$where,$table)
              {
                  $this->db->where($where);
                  return $this->db->update($table,$data);
              }

          }

      ?>
      ```
   3. Fungsi dari method **tampilSapi** adalah menampilkan seluruh data sapi dari database.
   4. Fungsi dari method **tampilSapiSakit** adalah menampilkan seluruh data sapi dari database dimana _status_kesehatan_ sama dengan Sakit atau Karantina.
   5. Fungsi dari method **tampilSapiPreview** adalah menampilkan data sapi dari database dalam jumlah tertentu.
   6. Fungsi dari method **tampilUser** adalah mengambil seluruh data user dari database.
   7. Fungsi dari method **tampilKandang** adalah menampilkan seluruh data kandang dari database.
   8. Fungsi dari method **tampilKandangRusak** adalah menampilkan seluruh data kandang dari database dimana _kondisi_kandang_ sama dengan Rusak atau Kotor.
   9. Fungsi dari method **tampilKandangPreview** adalah menampilkan data kandang dari database dalam jumlah tertentu.
   10. Fungsi dari method **tampilUserTerakhir** adalah menampilkan hanya satu user dan diurutkan berdasarkan entry terakhir.
   11. Fungsi dari method **registerUser** adalah menambahkan data user kedalam database.
   12. Fungsi dari method **loginUser** adalah memeriksa apakah _username_ dan _password_ yang dimasukkan oleh user berada dalam database.
   13. Fungsi dari method **tambahSapi** adalah menambahkan data masukan dari user kedalam database.
   14. Fungsi dari method **hapusSapi** adalah menghapus data sapi dalam database berdasarkan masukan dari user.
   15. Fungsi dari method **ubahSapi** adalah mengubah data sapi dalam database berdasarkan masukan dari user.
   16. Fungsi dari method **tambahKandang** adalah menambahkan data masukan dari user kedalam database.
   17. Fungsi dari method **hapusKandang** adalah menghapus data kandang dalam database berdasarkan masukan dari user.
   18. Fungsi dari method **ubahKandang** adalah mengubah data kandang dalam database berdasarkan masukan dari user.

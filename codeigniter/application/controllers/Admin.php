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
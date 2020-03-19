<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->load->view('template/header');
            $this->load->view('pages/login');
            $this->load->view('template/footer');
        }

        public function login()
        {
            $this->load->view('template/header');
            $this->load->view('pages/login');
            $this->load->view('template/footer');
        }

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
                    $detailLogin = $this->m_admin->loginUser($where,'tb_user')->result();

                    foreach($detailLogin as $row)
                    {
                        $data_session = array(
                            'nama_depan' => $row->nama_depan,
                            'nama_belakang' => $row->nama_belakang,
                            'email' => $row->email,
                            'statusLogin' => true
                        );

                        $this->session->set_userdata($data_session);

                        redirect('admin/home');

                    }

                }else
                {
                    redirect('admin/login/userNotFound');
                }

            }

        }

        public function register()
        {
            $this->load->view('template/header');
            $this->load->view('pages/register');
            $this->load->view('template/footer');
        }

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

                            $data = array(
                                'id_user' => $newId,
                                'email' => $email,
                                'nama_depan' => $firstName,
                                'nama_belakang' => $lastName,
                                'password' => md5($password),
                                'token' => '',
                                'status' => 1
                            );

                            if($this->m_admin->registerUser($data,'tb_user'))
                            {
                                redirect('admin/login/successRegister');
                            }else
                            {
                                redirect('admin/register/failedRegister');
                            }

                        }

                    }else
                    {
                        //Membuat variabel berupa array yang akan digunakna untuk insert ke database
                        $data = array(
                            'id_user' => 'USR001',
                            'email' => $email,
                            'nama_depan' => $firstName,
                            'nama_belakang' => $lastName,
                            'password' => md5($password),
                            'token' => '',
                            'status' => 1
                        );

                        if($this->m_admin->registerUser($data,'tb_user'))
                        {
                            redirect('admin/login/successRegister');
                        }else
                        {
                            redirect('admin/register/failedRegister');
                        }
                    }

                }else
                {
                    redirect("admin/register/passwordNotMatch");
                }

            }

        }

        public function home()
        {
            $jumlahSapiSehat = $this->m_admin->tampilSapi()->num_rows();
            $jumlahSapiSakit = $this->m_admin->tampilSapiSakit()->num_rows();
            $jumlahKandangBagus = $this->m_admin->tampilKandang()->num_rows();
            $jumlahKandangRusak = $this->m_admin->tampilKandangRusak()->num_rows();
            $previewKandang = $this->m_admin->tampilKandangPreview()->result();
            $previewSapi = $this->m_admin->tampilSapiPreview()->result();

            $data = array(
                'jumlah_sapi_sehat' => $jumlahSapiSehat,
                'jumlah_sapi_sakit' => $jumlahSapiSakit,
                'jumlah_kandang_bagus' => $jumlahKandangBagus,
                'jumlah_kandang_rusak' => $jumlahKandangRusak,
                'preview_sapi' => $previewSapi,
                'preview_kandang' => $previewKandang
            );

            $this->load->view('template/header');
            $this->load->view('pages/home',$data);
            $this->load->view('template/footer');
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('admin/login');
        }

        public function masterSapi()
        {
            $dataSapi = $this->m_admin->tampilSapi()->result();

            $data = array(
                'data_sapi' => $dataSapi
            );

            $this->load->view('template/header');
            $this->load->view('pages/data_sapi.php',$data);
            $this->load->view('template/footer');

        }

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

                $data = array(
                    'jenis' => $jenisSapi,
                    'berat' => $beratSapi,
                    'jenis_kelamin' => $jkSapi,
                    'usia' => $usiaSapi,
                    'status_kesehatan' => $statusSapi
                );

                $where = array(
                    'id_sapi' => $idSapi
                );

                $hasilUpdate = $this->m_admin->updateSapi($data,$where,'tb_sapi');

                if($hasilUpdate)
                {
                    redirect('admin/masterSapi');
                }else
                {
                    redirect('admin/masterSapi/Error');
                }

            }


        }

        public function hapusSapi($id)
        {
            $where = array(
                'id_sapi' => $id
            );

            $hasilHapus = $this->m_admin->hapusSapi($where,'tb_sapi');

            if($hasilHapus)
            {
                redirect('admin/masterSapi');
            }else
            {
                redirect('admin/masterSapi/Error');
            }

        }

        public function masterKandang()
        {

        }

    }

?>
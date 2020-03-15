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
                    'password' => md5($password)
                );

                //Mengambil data dari database
                $hasilLogin = $this->m_admin->loginUser($where,'tb_user')->num_rows();
                
                if($hasilLogin > 0)
                {
                    $detailLogin = $this->m_admin->loginUser($where,'tb_user')->result();

                    print_r($detailLogin);

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

    }

?>
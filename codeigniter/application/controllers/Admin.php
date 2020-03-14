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

        public function cekLogin()
        {
            $email = $this->input->post('loginEmail');
            $password = $this->input->post('loginPassword');
        }

        public function register()
        {
            $this->load->view('template/header');
            $this->load->view('pages/register');
            $this->load->view('template/footer');
        }

    }

?>
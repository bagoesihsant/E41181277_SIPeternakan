<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_admin extends CI_Model
    {
        public function tampilSapi()
        {
            return $this->db->get('tb_sapi');
        }

        public function tampilUser()
        {
            return $this->db->get('tb_user');
        }

        public function tampilUserTerakhir()
        {
            $this->db->order_by('id_user','DESC');
            return $this->db->get('tb_user',1);
        }

        public function registerUser($data,$table)
        {
            $this->db->insert($table,$data);
        }

    }

?>
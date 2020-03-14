<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_admin extends CI_Model
    {
        public function tampilSapi()
        {
            return $this->db->get('tb_sapi');
        }
    }

?>
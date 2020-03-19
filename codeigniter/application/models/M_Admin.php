<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_admin extends CI_Model
    {
        public function tampilSapi()
        {
            return $this->db->get('tb_sapi');
        }

        public function tampilSapiSakit()
        {
            $data = array(
                'status_kesehatan' => 'Sakit',
                'status_kesehatan' => 'Karantina'
            );
            $this->db->where($data);
            return $this->db->get('tb_sapi');
        }

        public function tampilSapiPreview()
        {
            $this->db->limit(5);
            return $this->db->get('tb_sapi');
        }

        public function tampilUser()
        {
            return $this->db->get('tb_user');
        }

        public function tampilKandang()
        {
            return $this->db->get('tb_kandang');
        }

        public function tampilKandangRusak()
        {
            $data = array(
                'kondisi_kandang' => 'Rusak',
                'kondisi_kandang' => 'Kotor'
            );
            $this->db->where($data);
            return $this->db->get('tb_kandang');
        }

        public function tampilKandangPreview()
        {
            $this->db->limit(5);
            return $this->db->get('tb_kandang');
        }

        public function tampilUserTerakhir()
        {
            $this->db->order_by('id_user','DESC');
            return $this->db->get('tb_user',1);
        }

        public function registerUser($data,$table)
        {
            return $this->db->insert($table,$data);
        }

        public function loginUser($where,$table)
        {
            $this->db->where($where);
            return $this->db->get($table);
        }

        public function updateSapi($data,$where,$table)
        {
            $this->db->where($where);
            return $this->db->update($table,$data);
        }

        public function hapusSapi($where,$table)
        {
            $this->db->where($where);
            return $this->db->delete($table);
        }   

    }

?>
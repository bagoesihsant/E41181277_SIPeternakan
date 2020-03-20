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
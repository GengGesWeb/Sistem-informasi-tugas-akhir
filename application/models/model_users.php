<?php
  class Model_users extends CI_Model {

    //mengambil tabel users
    public $table_user = 'tb_user';
    public $table_mahasiswa = 'tb_mahasiswa';
    public $table_dosen = 'tb_dosen';

    public function cekAkun($username, $password)
    {

      //cari username lalu lakukan validasi
      $this->db->where('id_user', $username);
      $query = $this->db->get($this->table_user)->row();

      //jika bernilai 1 maka user tidak ditemukan
      if (!$query) return 1;

      //jika bernilai 2 maka password salah
      $hash = $query->password;
      if (md5($password) != $hash) return 2;

      return $query;
    }

   



  }
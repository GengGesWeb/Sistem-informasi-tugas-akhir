<?php
class Model_grafik extends CI_Model {
	function jumlah_siswa(){
		$query = $this->db->query("SELECT count(distinct nim) as id FROM tb_mahasiswa");
		return $query->row();
	}
	function jumlah_usulan(){
		$query = $this->db->query("SELECT count(distinct nim) as id FROM tb_judul_usulan");
		return $query->row();
	}
	function belum_input(){
		$query = $this->db->query("SELECT tb_mahasiswa.nim,tb_mahasiswa.nama,tb_mahasiswa.prodi,tb_mahasiswa.golongan FROM `tb_mahasiswa` inner join tb_judul_usulan on tb_mahasiswa.nim != tb_judul_usulan.nim");
		return $query->result();
	}

}
?>
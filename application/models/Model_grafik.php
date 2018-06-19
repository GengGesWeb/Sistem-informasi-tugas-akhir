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
		$query = $this->db->query("SELECT * FROM tb_mahasiswa WHERE NOT EXISTS (SELECT * FROM tb_judul_usulan WHERE tb_mahasiswa.nim = tb_judul_usulan.nim)");
		return $query->result();
	}
	function t_judul_siswa(){
		$query = $this->db->query("SELECT count(nim) as id FROM `tb_judul_usulan`");
		return $query->row();
	}
	function t_judul_dosen(){
		$query = $this->db->query("SELECT count(id_dosen) as id FROM `tb_judul_dosen`");
		return $query->row();
	}
	function sebaran_dosen(){
		$query = $this->db->query("SELECT tb_dosen.nama ,  count(tb_judul_usulan.id_dosen_pembimbing) as total FROM `tb_judul_usulan` inner join tb_dosen on tb_judul_usulan.id_dosen_pembimbing = tb_dosen.id_dosen group by tb_judul_usulan.id_dosen_pembimbing order by total desc");
		return $query->result();
	}

}
?>
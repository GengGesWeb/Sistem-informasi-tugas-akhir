<?php
class Model_koordinator extends CI_Model {
	function data_kuota(){
		$query = $this->db->query("SELECT * FROM tb_dosen where kuota_bimbingan=0");
		return $query->result();
	}
	function update_kuota($data = array(),$id){
		$this->db->where('id_dosen',$id);
		return $this->db->update('tb_dosen',$data);
	}
	function data_kuota_isi(){
		$query = $this->db->query("SELECT * FROM tb_dosen where kuota_bimbingan>0");
		return $query->result();
	}
	function edit_kuota_isi($id){
		$query = $this->db->query("SELECT * FROM tb_dosen WHERE id_dosen = '$id'");
		return $query->result_array();
	}

	function edit_hak_akses($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function edit_akses($where){
        $this ->db ->select('*');
		$this ->db ->from('tb_dosen');
		$this ->db ->where('id_dosen',$where);
		$query = $this ->db ->get();
		return $query;
    }
 
	function update_hak_akses($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	
	function data_usulan(){
		$query = $this->db->query("SELECT tb_mahasiswa.nim,tb_mahasiswa.nama,tb_mahasiswa.prodi,tb_mahasiswa.golongan , tb_judul_usulan.judul,tb_judul_usulan.deskripsi,tb_judul_usulan.kategori,tb_dosen.nama as pembimbing FROM `tb_judul_usulan` inner join tb_mahasiswa on tb_mahasiswa.nim = tb_judul_usulan.nim inner join tb_dosen on tb_dosen.id_dosen=tb_judul_usulan.id_dosen_pembimbing ORDER BY `tb_judul_usulan`.`id_judul_usulan` ASC");
		return $query->result();
	}
	function data_usulan_fik(){
		$query = $this->db->query("SELECT tb_mahasiswa.nim,tb_mahasiswa.nama,tb_mahasiswa.prodi,tb_mahasiswa.golongan , tb_final.judul,tb_final.deskripsi,tb_final.kategori,tb_final.saran,tb_dosen.nama as pembimbing FROM `tb_final` inner join tb_mahasiswa on tb_mahasiswa.nim = tb_final.nim inner join tb_dosen on tb_dosen.id_dosen=tb_final.id_dosen ORDER BY `tb_final`.`id_final` ASC");
		return $query->result();
	}
	function pembimbing_fik($id){
		$query = $this->db->query("SELECT tb_pembimbing_fix.nim,tb_mahasiswa.nama,tb_mahasiswa.prodi,tb_mahasiswa.golongan,tb_dosen.nama as pembimbing FROM tb_pembimbing_fix inner join tb_mahasiswa on tb_pembimbing_fix.nim = tb_mahasiswa.nim inner join tb_dosen on tb_pembimbing_fix.id_dosen = tb_dosen.id_dosen where tb_pembimbing_fix.nim ='$id'");
		return $query->result();
	}
	public function get_jadwal(){
		return $this ->db ->get('tb_tanggal');
	}

	function pembimbing_mhs_ditolak(){
		 $query = $this->db->query("SELECT * FROM tb_mhs_ditolak");
		 return $query->result();
	}

	function nama_dospem(){
		 $query = $this->db->query("SELECT id_dosen,nama FROM tb_dosen");
		 return $query->result();
	}

	function input_dospem_mhs_tolak($inputdospem){
		$this->db->insert('tb_pembimbing_fix',$inputdospem);
	}
	function daftar_bimbingan(){
		$query = $this->db->query("SELECT tb_mahasiswa.*,tb_final.judul,tb_pembimbing_fix.id_dosen,tb_dosen.nama FROM `tb_final` join tb_mahasiswa on tb_final.nim=tb_mahasiswa.nim join tb_pembimbing_fix on tb_final.nim=tb_pembimbing_fix.nim join tb_dosen on tb_pembimbing_fix.id_dosen=tb_dosen.id_dosen");
		return $query->result();
	}
	function daftar_review(){
		$query = $this->db->query("SELECT * FROM tb_review order by id_judul_usulan");
		return $query->result();
	}

	function judul_review(){
		$query = $this->db->query("SELECT * FROM tb_review group by id_judul_usulan");
		return $query->result();
	}
	function tampil_review_kd(){
		$query = $this->db->query("SELECT tb_review.*,tb_judul_usulan.judul,tb_dosen.nama,tb_mahasiswa.nim FROM tb_review join tb_judul_usulan on tb_judul_usulan.id_judul_usulan=tb_review.id_judul_usulan join tb_dosen on tb_review.id_dosen=tb_dosen.id_dosen join tb_mahasiswa on tb_mahasiswa.nim=tb_judul_usulan.nim WHERE NOT EXISTS (SELECT * FROM tb_hasil WHERE tb_review.id_judul_usulan = tb_hasil.id_judul_usulan) ORDER BY `tb_review`.`id_judul_usulan` ASC");
		return $query->result();
	}
	function total_review_kd(){
		$query = $this->db->query("SELECT count(tb_review.id_dosen) as total,tb_review.id_judul_usulan FROM `tb_review` group by id_judul_usulan");
		return $query->result();
	}
	function unik_review_kd(){
		$query = $this->db->query("SELECT DISTINCT (tb_review.id_judul_usulan) FROM tb_review WHERE NOT EXISTS (SELECT NULL FROM tb_hasil WHERE tb_review.id_judul_usulan=tb_hasil.id_judul_usulan)");
		return $query->result();
	}
	function is_review($id){
		$this->db->insert('tb_hasil',$id);
	}
	



	}
?>
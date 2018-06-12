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
}

?>
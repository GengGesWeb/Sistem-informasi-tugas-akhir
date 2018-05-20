<?php
class Model_Mahasiswa extends CI_Model {
	
	function get_table(){
        return $this->db->get("tm_mahasiswa");
    }
    
	function get_data(){
		$query = $this->db->query("SELECT nim, nama, prodi, golongan from tm_mahasiswa, tm_prodi, tm_gol where
		tm_mahasiswa.tm_prodi_id = tm_prodi.id and tm_mahasiswa.tm_gol_id=tm_gol.id");
		return $query->result();
	}
	
	function get_prodi(){
		$query = $this->db->query("SELECT * FROM tm_prodi");
		return $query->result();
	}
	
	function get_gol(){
		$query = $this->db->query("SELECT * FROM tm_gol");
		return $query->result();
	}
	
	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM tm_mahasiswa where nim='$id' ");
		return $query->result_array();
	}
	
	function input($data = array()){
		return $this->db->insert('tm_mahasiswa',$data);
	}
	
	function delete($id){
		$this->db->where('nim', $id);
        return $this->db->delete('tm_mahasiswa');
	}
	
	function update($data =array(), $id){
		$this->db->where('nim', $id);
        return $this->db->update('tm_mahasiswa',$data);
	}
	
}
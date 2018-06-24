<?php
class M_usulan extends CI_Model{
	
	public function show_usulan(){
		$hasil=$this->db->query("SELECT * FROM tb_judul_usulan");
		return $hasil;
	}
	
}
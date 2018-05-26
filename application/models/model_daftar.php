<?php
/**
* 
*/
class model_daftar extends CI_model
{
	
	public function input_user($signup_user){
		$this->db->insert('tb_user',$signup_user);
	}

	public function input_mahasiswa($signup_mahasiswa){
		$this->db->insert('tb_mahasiswa',$signup_mahasiswa);
	}
}
?>
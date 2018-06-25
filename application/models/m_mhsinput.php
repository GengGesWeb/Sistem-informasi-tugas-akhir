<?php
/**
* 
*/
class m_mhsinput extends CI_model
{
	
	public function input_judul($inputjudul){
		$this->db->insert('tb_judul_usulan',$inputjudul);
	}

	public function input_judulfinal($inputjudul){
		$this->db->insert('tb_final',$inputjudul);
	}
	
	public function inputusulanpemb($inputusulan){
		$this->db->insert('tb_usulan_pembimbing',$inputusulan);
	}
}
?>
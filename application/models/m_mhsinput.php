<?php
/**
* 
*/
class m_mhsinput extends CI_model
{
	
	public function input_judul($inputjudul){
		$this->db->insert('tb_judul_usulan',$inputjudul);
	}

}
?>
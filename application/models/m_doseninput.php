<?php
/**
* 
*/
class m_doseninput extends CI_model
{
	
	public function input_judul($inputjudul){
		$this->db->insert('tb_judul_dosen',$inputjudul);
	}

}
?>
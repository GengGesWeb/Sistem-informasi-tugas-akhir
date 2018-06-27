<?php

class model_bimbingan extends CI_model
{

	function tampil_data($where){
		$this->db->where($where);
		return $this->db->get('tb_usulan_pembimbing');
	}
}
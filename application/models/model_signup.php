<?php
 /**
 * 
 */
 class model_signup extends CI_Model
 {
 	public $table = 'tb_mahasiswa';

 	public function cekNIM($NIM)
 	{
 		$this->db->where('NIM',$NIM);
 		$query = $this->db->get($this->table)->row();

 		if ($query) return 1;

 		return $query;
 	}
 	
 }
?>
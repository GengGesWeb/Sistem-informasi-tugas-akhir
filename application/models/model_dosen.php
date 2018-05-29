<?php
 /**
 * 
 */
 class model_dosen extends CI_Model
 {
 	public $table = 'tb_dosen';

 	 public function datadosen($id_user)
    {
      $this->db->where('id_user',$id_user);
      $query = $this->db->get($this->table)->row();
      return $query;
    }

    
 	
 }
?>
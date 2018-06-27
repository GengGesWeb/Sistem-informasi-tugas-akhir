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

    public function tampil_data(){												//BERANDA
		$this->db->select('tb_judul_dosen.judul_dosen, tb_judul_dosen.prodi, tb_judul_dosen.kuota, tb_dosen.nama') -> join('tb_dosen', 'tb_dosen.id_dosen=tb_judul_dosen.id_dosen');
    
		return $this->db->get('tb_judul_dosen');
	}
  
  public function data_dosen(){
    return $this->db->get('tb_dosen');
  }

  public function data_usulan(){
    return $this->db->get('tb_judul_usulan');
  }


	

 	
 }
?>
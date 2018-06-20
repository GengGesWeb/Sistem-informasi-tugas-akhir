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

    public function get_datadosen()
 	{
 		$result = $this->db->select('id_user, nama')->get('tb_dosen')->result_array(); 
 
        $nama = array(); 
        foreach($result as $r) { 
            $nama[$r['id_user']] = $r['nama']; 
        } 
        $nama[''] = 'Select job position...'; 
        return $nama;
 	}

    function tampil_data(){
		return $this->db->get('tb_dosen');
	}

 	
 }
?>
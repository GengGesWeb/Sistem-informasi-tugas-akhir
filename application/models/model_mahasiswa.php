<?php
 /**
 * 
 */
 class model_mahasiswa extends CI_Model
 {
 	public $table = 'tb_mahasiswa';

 	public function cekNIM($NIM)
 	{
 		$this->db->where('NIM',$NIM);
 		$query = $this->db->get($this->table)->row();

 		if ($query) return 1;

 		return $query;
 	}

 	public function cekuser($id_user)
 	{
 		$this->db->where('id_user',$id_user);
 		$query = $this->db->get($this->table)->row();
 		return $query;
 	}
 	
 	public function get_datadosen()
 	{
 		$query = $this->db->query('Select * from tb_dosen');
 		$result =  $query->result_array();
 		return $result;
 	}

 	public function input_proposal($inputproposal){
		$this->db->insert('tb_proposal',$inputproposal);
	}


	public function inputjudulmhs ($data = array()){					//INPUT JUDUL MAHASISWA
		$this->load->database();
		return $this->db->insert("tb_judul_usulan", $data);
	}


	public function tampil_data(){												//BERANDA
		return $this->db->get('tb_judul_dosen');
	}
	

 }
?>
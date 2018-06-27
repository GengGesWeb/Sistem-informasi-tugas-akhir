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

	public function get_jadwal_awal($main){
        $this ->db ->select('tgl_awal');
		$this ->db ->from('tb_tanggal');
		$this ->db ->where('keterangan',$main);

		$query = $this ->db ->get()->row_array();

		return $query;
    }

    public function get_jadwal_akhir($main){
        $this ->db ->select('tgl_akhir');
		$this ->db ->from('tb_tanggal');
		$this ->db ->where('keterangan',$main);

		$query = $this ->db ->get()->row_array();

		return $query;
    }


	public function inputjudulmhs ($data = array()){					//INPUT JUDUL MAHASISWA
		$this->load->database();
		return $this->db->insert("tb_judul_usulan", $data);
	}


	public function tampil_data(){												//BERANDA
		$this->db->select('tb_judul_dosen.judul_dosen, tb_judul_dosen.prodi, tb_judul_dosen.kuota, tb_dosen.nama')
			->join('tb_dosen', 'tb_dosen.id_dosen=tb_judul_dosen.id_dosen');
		return $this->db->get('tb_judul_dosen');
	}
	

	public function hasilreview ($NIM){					//HASIL REVIEW
		$this->db->select('tb_hasil.status, tb_hasil.saran, tb_judul_usulan.judul')
			->join('tb_judul_usulan', 'tb_judul_usulan.id_judul_usulan=tb_hasil.id_judul_usulan');
			$this->db->where('tb_hasil.NIM', $NIM);
		return $this->db->get('tb_hasil');
		
	}
	public function usulan ($NIM){
        $this ->db ->select('*');
		$this ->db ->from('tb_judul_usulan');
		$this ->db ->where('NIM',$NIM);
		$query = $this ->db ->get()->result();
		return $query;
    
	}
	public function cek_review($id){
		$this ->db ->select('*');
		$this ->db ->from('tb_review');
		$this->db->where('id_judul_usulan', $id);
      	$query = $this->db->get()->row();
      	//jika bernilai 1 maka user tidak ditemukan
      	if (!$query) return 1;
	}

	public function ambil_usulan($id){
		$this ->db ->select('*');
		$this ->db ->from('tb_judul_usulan');
		$this ->db ->where('id_judul_usulan',$id);
		$query = $this ->db ->get()->row_array();
		return $query;	
	}

	public function update_hak_akses($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	


 }
?>
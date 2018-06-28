<?php
class Dosen extends MY_Controller{

 public function __construct(){
  parent::__construct();
  $this->cekLogin();
  $this->load->database();
  $this->load->model('model_bimbingan');
  $this->load->model('Model_koordinator');
  $this->load->model('Model_grafik');

  //memanggil function dari controller MY_Controller
  $this->load->model('model_dosen');
  $id_user = $this->session->userdata('username');
  $dosen = $this->model_dosen->datadosen($id_user);
  $data_dosen = array(
    'NIP' =>$dosen->id_dosen ,
    'nama'=>$dosen->nama,
    'hak_akses' =>$dosen->hak_akses,
    'kuota' =>$dosen->kuota_bimbingan
     );
  $this->session->set_userdata($data_dosen);
  return TRUE;

 

  //validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
    if ($this->session->userdata('status') == "mahasiswa") {
      redirect('mahasiswa/mahasiswa');
 }
}

  public function index()
  {
    $this->load->view('Dosen/header',array('active' => "index"));
    $data['judul_dosen'] = $this->model_dosen->tampil_data()->result();
    $this->load->view('Dosen/Beranda', $data);
    $this->load->view('Dosen/footer');
  }



   public function formjudul()
      {
        $this->load->view('Dosen/header');
        $this->load->view('Dosen/v_formjudul'); 
        $this->load->view('Dosen/footer');
      }

      //Controller TerimaTolak
      public function lihat_bimbingan(){
  
        $where = $this->session->userdata('NIP');
        $data['bimbingan'] = $this->model_bimbingan->tampil_data($where);
        
        $this->load->view('Dosen/header');
        $this->load->view('dosen/bimbingan',$data);
        $this->load->view('Dosen/footer');
       
      }

      public function terima(){
        $data = array(
            'NIM' => $this->uri->segment(4),
            'id_dosen' => $this ->session ->userdata('NIP'),
        );
        $id= $this->uri->segment(4);
        $this ->db ->insert('tb_pembimbing_fix',$data);
        $this ->db ->where_in('NIM',$id);
        $this ->db ->delete('tb_usulan_pembimbing');
        redirect('dosen/dosen/lihat_bimbingan');
      }

      public function tolak(){
        $data = array(
            'NIM' => $this->uri->segment(4),
            'judul' => $this->uri->segment(5),
        );
        $id= $this->uri->segment(4);
        $this ->db ->insert('tb_mhs_ditolak',$data);
        $this ->db ->where_in('NIM',$id);
        $this ->db ->delete('tb_usulan_pembimbing');
        redirect('dosen/dosen/lihat_bimbingan');
      }

//===================================================Controller CO==============================================
     
	  /*public function bimbingan()
  {
    $this->load->view('Dosen/header');
    $this->load->view('Dosen/bimbingan');
    $this->load->view('Dosen/footer');
  }*/

//===================================================Controller CO==============================================
  
      
    public function dosen()
          {
            $hak_akses=$this->session->userdata('hak_akses');
            if($hak_akses == "koordinator") {
              $where = $this->uri->segment(4);
              $data['user'] = $this->model_dosen->data_dosen()->result();
              $data['dosen'] = $this->Model_koordinator->edit_akses($where);
              $this->load->view('Dosen/header');
              $this->load->view('Dosen/koordinator', $data); 
              $this->load->view('Dosen/footer');
            }else{
              $this->load->view('dosen/header');
              $this->load->view('dosen/peringatan',array('pesan' => " Halaman Ini hanya bisa diakses oleh koordinator"));
              $this->load->view('dosen/footer');
              } 
    }     

    

	 
  function edit_hak_akses(){
  $where = $this->uri->segment(4);
  $data['tb_dosen'] = $this->Model_koordinator->edit_hak_akses($where,'tb_dosen')->result();
  $this->load->view('v_edit_hak_akses',$data);
}
   function update_hak_akses(){
  $id_dosen = $this->input->post('id_dosen');
  $nama = $this->input->post('nama');
  $hak_akses = $this->input->post('hak_akses');
  $kuota = $this->input->post('kuota_bimbingan');
 
  $data = array(
    'id_dosen' => $id_dosen,
    'nama' => $nama,
    'hak_akses' => $hak_akses,
    'kuota_bimbingan' => $kuota
  );
 
  $where = array(
    'id_dosen' => $id_dosen
  );
 
  $this->Model_koordinator->update_hak_akses($where,$data,'tb_dosen');
  redirect('Dosen/dosen/dosen');
}
  
  public function lihat_usulan(){
          $hak_akses=$this->session->userdata('hak_akses');
            if($hak_akses == 'koordinator' || $hak_akses ==  'reviewer'){
            $data['user'] = $this->model_dosen->data_usulan()->result();
            $this->load->view('Dosen/header');
            $this->load->view('Dosen/v_usulan_mahasiswa', $data); 
            $this->load->view('Dosen/footer');
  }else{
            $this->load->view('dosen/header');
            $this->load->view('dosen/peringatan',array('pesan' => " Halaman Ini hanya bisa diakses oleh koordinator dan Reviewer"));
            $this->load->view('dosen/footer'); 
  }
}


  function review_judul(){
  $where = $this->uri->segment(4);
  $data['tb_dosen'] = $this->Model_koordinator->edit_hak_akses($where,'tb_dosen')->result();
  $this->load->view('v_review_judul',$data);
  }

  function proses_review(){
  $data = array(
  'id_dosen'=> $this->input->post('id_dosen'),
  'id_judul_usulan' => $this ->input->post('id_judul_usulan'),
  'status'=> $this->input->post('status'),
  'saran'=> $this->input->post('saran')
 );
 $this ->db ->insert('tb_review',$data);
 redirect('dosen/dosen/lihat_usulan');
}

               
//==========================================PROSES INPUT JUDUL DOSEN ======================================

    public function proses_inputjudul()
  {
    if ($this->input->post('submit'))
    {
        $inputjudul= array(
          'id_dosen' => $this->input->post('username') , 
          'judul_dosen' => $this->input->post('judul_dosen'),
          'prodi' => $this->input->post('prodi'),
          'kuota' => $this->input->post('kuota')
        );

        $this ->load-> model('m_doseninput');
        $this ->m_doseninput->input_judul($inputjudul);
        
          $this->load->view('Dosen/header');
          $this->load->view('Dosen/v_alerts');
          $this->load->view('Dosen/v_formjudul'); 
          $this->load->view('Dosen/footer');
      }
      else {
       	  $this->load->view('Dosen/header');
          $this->load->view('Dosen/v_alerts_gagal');
          $this->load->view('Dosen/v_formjudul'); 
          $this->load->view('Dosen/footer');
      }
    
    }
	
		//==========================================PROSES mengatur jumlah kuota pembimbing ======================================
	public function kuotadosen()
      {
    $hak_akses=$this->session->userdata('hak_akses');
    if($hak_akses == "koordinator") {    
		$data = array(
				'list_kuota'=>$this->Model_koordinator->data_kuota(),
				'list_data'=>$this->Model_koordinator->data_kuota_isi(),
				'edit_data'=>$this->Model_koordinator->edit_kuota_isi(@$_GET['id'])
				);
        $this->load->view('Dosen/header');
		if(isset($_GET['id']) && isset($_GET['r']) && $_GET['r'] =='1'){
				$this->load->view('Dosen/v_edit_kuotadosen',$data); 
		}elseif(isset($_GET['id']) && isset($_GET['r']) && $_GET['r'] =='0'){
				$insert = $this->Model_koordinator->update_kuota(array(
				'kuota_bimbingan' => 0
            ), $_GET['id']);
			redirect('Dosen/dosen/kuotadosen');
		}
		else{
			$this->load->view('Dosen/v_kuotadosen',$data); 
        }
		$this->load->view('Dosen/v_isi_kuotadosen',$data); 
        $this->load->view('Dosen/footer');
      }else{
    $this->load->view('dosen/header');
    $this->load->view('dosen/peringatan',array('pesan' => " Halaman Ini hanya bisa diakses oleh koordinator"));
    $this->load->view('dosen/footer');  
    } }


	  public function isi_kuotadosen()
      {
       if(isset($_POST['submit'])){
			$id = $this->input->post('nama');
			$insert = $this->Model_koordinator->update_kuota(array(
				'kuota_bimbingan' => $this->input->post('jumlah_kuota')
            ), $id);
			redirect('Dosen/dosen/kuotadosen');
		}
		else{
			echo"gagal";
		}
      }
	  public function edit_kuotadosen(){
		if(isset($_POST['submit'])){
			$id = $this->input->post('idya');
			$insert = $this->Model_koordinator->update_kuota(array(
				'kuota_bimbingan' => $this->input->post('jumlah_kuota')
            ), $id);
			redirect('Dosen/dosen/kuotadosen');
		}
		else{
			echo"gagal";
		}
	  }
	//==========================================grafik total usulan ======================================
	
	function grafik(){
    $hak_akses=$this->session->userdata('hak_akses');
    if($hak_akses == "koordinator") {

		$data = array(
				'jumlah_siswa'=>$this->Model_grafik->jumlah_siswa(),
				'jumlah_usulan'=>$this->Model_grafik->jumlah_usulan(), 
				'belum_input'=>$this->Model_grafik->belum_input() 
				);
			//var_dump($data['jumlah_siswa']);
		$this->load->view('dosen/header');
		//$this->load->view('grafik/beranda');
		$this->load->view('grafik/grafik_usulan',$data);
		$this->load->view('grafik/footer');

    }else{

    $this->load->view('dosen/header');
    $this->load->view('dosen/peringatan',array('pesan' => " Halaman Ini hanya bisa diakses oleh koordinator"));
    $this->load->view('dosen/footer');  
    }		
	}
//==========================================grafik total judul ======================================
  function grafik_judul(){
    $hak_akses=$this->session->userdata('hak_akses');
    if($hak_akses == "koordinator") {

    $isi = array (
      'jumlah_siswa'=>$this->Model_grafik->t_judul_siswa(),
      'jumlah_dosen'=>$this->Model_grafik->t_judul_dosen()
    );
    $this->load->view('dosen/header');
    $this->load->view('grafik/grafik_total_judul',$isi);
    $this->load->view('grafik/footer');

    }else{

    $this->load->view('dosen/header');
    $this->load->view('dosen/peringatan',array('pesan' => " Halaman Ini hanya bisa diakses oleh koordinator"));
    $this->load->view('dosen/footer');  
    }   
  }
  
  //==========================================grafik sebaran dosen ======================================

  function grafik_dosen(){
    $hak_akses=$this->session->userdata('hak_akses');
    if($hak_akses == "koordinator") {
    $isi = array (
      'dosen'=>$this->Model_grafik->sebaran_dosen()
    );
    $this->load->view('dosen/header');
    $this->load->view('grafik/sebaran_dosen',$isi);
    $this->load->view('grafik/footer');

    }else{

    $this->load->view('dosen/header');
    $this->load->view('dosen/peringatan',array('pesan' => " Halaman Ini hanya bisa diakses oleh koordinator"));
    $this->load->view('dosen/footer');  
    }   
  
  }
//============================================Halaman Koordinator========================================
  public function jadwal(){
    $hak_akses=$this->session->userdata('hak_akses');
    if($hak_akses == "koordinator") {

    $list = $this ->Model_koordinator ->get_jadwal()->result();
    $data = array(
                "list" => $list
        );
    $this->load->view('dosen/header');
    $this->load->view('dosen/tgl_proposal');
    $this->load->view('dosen/listjadwal',$data);
    $this->load->view('dosen/footer');

    }else{

    $this->load->view('dosen/header');
    $this->load->view('dosen/peringatan',array('pesan' => " Halaman Ini hanya bisa diakses oleh koordinator"));
    $this->load->view('dosen/footer');  
    }   

  }
  public function save_tglInput(){
        $data = array(
            'tgl_awal' => $this ->input ->post('tanggal_awal'),
            'tgl_akhir' => $this ->input ->post('tanggal_akhir'),
            'keterangan' => $this ->input ->post('ket')
        );

        $this ->db ->insert('tb_tanggal',$data);
        redirect('dosen/dosen/jadwal');
    }

  public function delJadwal(){
        $id = $this ->uri ->segment(4);
        $this ->db ->where_in('id',$id);
        $this ->db ->delete('tb_tanggal');
        redirect('dosen/dosen/jadwal');
    }  

public function koordinator() 
  {
   $hak_akses=$this->session->userdata('hak_akses');
    if($hak_akses == "koordinator") {
 
  	$tampil = array (
			'judul'=>$this->Model_koordinator->pembimbing_mhs_ditolak(),
			'nama'=>$this->Model_koordinator->nama_dospem()
		);
        

        $pemfix = $this->db->get('tb_mhs_ditolak');
        $namados = $this->db->get('tb_dosen');
        $data['result'] = $pemfix->result_array();
        $data['result2'] = $namados->result_array();
        $data['num_rows'] = $pemfix->num_rows();
        $this->load->view('dosen/header');
        $this->load->view('dosen/v_bimbing_mhs_tolak', $data);
        $this->load->view('dosen/footer');
    }else{

    $this->load->view('dosen/header');
    $this->load->view('dosen/peringatan',array('pesan' => " Halaman Ini hanya bisa diakses oleh koordinator"));
    $this->load->view('dosen/footer');  
    }   
  }


  public function mhs_ditolak_diterima(){
    $data = array(
            'nim' => $this ->input ->post('nim'),
            'id_dosen' => $this ->input ->post('id_dosen'),
        );
    $nim = $this ->input ->post('nim');
    $this ->db ->insert('tb_pembimbing_fix',$data);
    $this ->db ->where_in('nim',$nim);
    $this ->db ->delete('tb_mhs_ditolak');

        redirect('dosen/dosen/koordinator');
  }

  public function final_review(){
    $hak_akses=$this->session->userdata('hak_akses');
    if($hak_akses == "koordinator") {
	$data = array(
            'list' => $this->Model_koordinator->tampil_review_kd(),
            'jumlah' => $this->Model_koordinator->total_review_kd(),
            'unik' => $this->Model_koordinator->unik_review_kd(),
        );
		$this->load->view('dosen/header');
		$this->load->view('dosen/final_review',$data);
		$this->load->view('dosen/footer');  
  }else{
    $this->load->view('dosen/header');
    $this->load->view('dosen/peringatan',array('pesan' => " Halaman Ini hanya bisa diakses oleh koordinator"));
    $this->load->view('dosen/footer');  
    }   
  }
  public function ksp_review(){
  $hak_akses=$this->session->userdata('hak_akses');
    if($hak_akses == "koordinator") {  
	if(isset($_GET['r'])){
		$data = array(
          'id_judul_usulan' => $this->input->get('id') , 
          'nim' => $this->input->get('r'),
		  );
		$this->load->view('dosen/header');
		$this->load->view('dosen/kesimpulan_review',$data);
		$this->load->view('dosen/footer');  
	}
	if(isset($_POST['submit'])){
		$insert = $this->Model_koordinator->is_review(array(
				'NIM' => $this->input->post('nim'),
				'status' => $this->input->post('status'),
				'saran' => $this->input->post('saran'),
				'id_judul_usulan' => $this->input->post('id')
            ), $id);
			redirect('Dosen/dosen/final_review');
	}
  }else{
    $this->load->view('dosen/header');
    $this->load->view('dosen/peringatan',array('pesan' => " Halaman Ini hanya bisa diakses oleh koordinator"));
    $this->load->view('dosen/footer');  
  }
}

  

  
}
  
  
?>
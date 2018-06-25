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
    'hak_akses' =>$dosen->hak_akses
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
    $this->load->view('Dosen/header');
    $this->load->view('Dosen/Beranda');
    $this->load->view('Dosen/footer');
  }

   public function formjudul()
      {
        $this->load->view('Dosen/header');
        $this->load->view('Dosen/v_formjudul'); 
        $this->load->view('Dosen/footer');
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

           $data['user'] = $this->model_dosen->tampil_data()->result();
            $this->load->view('Dosen/header');
            $this->load->view('Dosen/koordinator', $data); 
            $this->load->view('Dosen/footer');
          }

	 public function lihat_bimbingan(){
	
		$where = $this->session->userdata('username');
		$data['bimbingan'] = $this->model_bimbingan->tampil_data($where);
		
		$this->load->view('Dosen/header');
		$this->load->view('dosen/bimbingan',$data);
		$this->load->view('Dosen/footer');
       
}
  function edit_hak_akses(){
  $where = array('id_dosen' => $id_dosen);
  $data['tb_dosen'] = $this->Model_koordinator->edit_hak_akses($where,'tb_dosen')->result();
  $this->load->view('v_edit_hak_akses',$data);
}
   function update_hak_akses(){
  $id_dosen = $this->input->post('id_dosen');
  $nama = $this->input->post('nama');
  $hak_akses = $this->input->post('hak_akses');
 
  $data = array(
    'id_dosen' => $id_dosen,
    'nama' => $nama,
    'hak_akses' => $hak_akses
  );
 
  $where = array(
    'id_dosen' => $id_dosen
  );
 
  $this->Model_koordinator->update_hak_akses($where,$data,'tb_dosen');
  redirect('Dosen/dosen/dosen');
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
        $data['exist']=$exist;
        $this->load->view('dosen/v_formjudul',$data);
      }
    
    }
	
		//==========================================PROSES mengatur jumlah kuota pembimbing ======================================
	public function kuotadosen()
      {
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
      }
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
	}
//==========================================grafik total judul ======================================
  function grafik_judul(){
    $isi = array (
      'jumlah_siswa'=>$this->Model_grafik->t_judul_siswa(),
      'jumlah_dosen'=>$this->Model_grafik->t_judul_dosen()
    );
    $this->load->view('dosen/header');
    $this->load->view('grafik/grafik_total_judul',$isi);
    $this->load->view('grafik/footer');
  }
  
  //==========================================grafik sebaran dosen ======================================

  function grafik_dosen(){
    $isi = array (
      'dosen'=>$this->Model_grafik->sebaran_dosen()
    );
    $this->load->view('dosen/header');
    $this->load->view('grafik/sebaran_dosen',$isi);
    $this->load->view('grafik/footer');
  
  }
//============================================Halaman Koordinator========================================
  public function jadwal(){
    $list = $this ->Model_koordinator ->get_jadwal()->result();
    $data = array(
                "list" => $list
        );
    $this->load->view('dosen/header');
    $this->load->view('dosen/tgl_proposal');
    $this->load->view('dosen/listjadwal',$data);
    $this->load->view('dosen/footer');

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



  
}
  
  
?>
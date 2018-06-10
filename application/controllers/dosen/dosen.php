<?php
class Dosen extends MY_Controller{

 public function __construct(){
  parent::__construct();
  $this->cekLogin();
  $this->load->database();
  $this->load->model('model_bimbingan');
  $this->load->model('Model_koordinator');

 

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
     
	  public function bimbingan()
  {
    $this->load->view('Dosen/header');
    $this->load->view('Dosen/bimbingan');
    $this->load->view('Dosen/footer');
  }


	 public function lihat_bimbingan(){
	
		$where = array('id_dosen' =>$this->session->userdata('username'));
		$data['bimbingan'] = $this->model_bimbingan->tampil_data($where)->result();
		
		
		$this->load->view('dosen/bimbingan',$data);
       
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
	
}
	
  
?>
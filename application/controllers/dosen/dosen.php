<?php
class Dosen extends MY_Controller{

 public function __construct(){
  parent::__construct();

  //memanggil function dari controller MY_Controller
  $this->cekLogin();
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
               
//==============================================PROSES INPUT=======================================================

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
  }
?>
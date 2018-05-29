<?php
class Mahasiswa extends MY_Controller{

 public function __construct(){
  parent::__construct();
  $this->load->helper(array('form', 'url')); 

  $this->load->model('model_signup');
  $id_user = $this->session->userdata('username');
  $mahasiswa = $this->model_signup->cekuser($id_user);
  $data_mahasiswa = array(
    'NIM' =>$mahasiswa->NIM ,
    'nama'=>$mahasiswa->Nama,
    'prodi' =>$mahasiswa->prodi,
    'golongan' =>$mahasiswa->golongan
     );
  $this->session->set_userdata($data_mahasiswa);
  return TRUE;
  //memanggil function dari controller MY_Controller
  $this->cekLogin();

  //validasi jika session dengan level dosen mengakses halaman ini maka akan dialihkan ke halaman manager
    if ($this->session->userdata('status') == "dosen") {
      redirect('dosen/dosen');
 }
}

  public function index()
  {
    $this->load->view('Mahasiswa/Header');
    $this->load->view('Mahasiswa/Beranda');
    $this->load->view('Mahasiswa/Footer');
  }

public function ujianproposal()
  {
    $this->load->view('Mahasiswa/Header');
    $this->load->view('Mahasiswa/ujianprop', array('error' => '' )); 
    $this->load->view('Mahasiswa/Footer');
    
    $config['upload_path']   = './uploads/'; 
      $config['allowed_types'] = 'pdf'; 
      $config['max_size']      = 1024;
      $this->load->library('upload', $config);


      if ( ! $this->upload->do_upload('image')) {
         $error = array('error' => $this->upload->display_errors()); 
         
      }else { 

        $data = array('upload' => $this->upload->data());
        

         //print_r('Image Uploaded Successfully.');
         
      } 
   }

}
    
 


?>
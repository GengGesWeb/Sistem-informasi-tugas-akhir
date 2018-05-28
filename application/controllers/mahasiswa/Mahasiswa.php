<?php
class Mahasiswa extends MY_Controller{

 public function __construct(){
  parent::__construct();
  $this->load->helper(array('form', 'url')); 


  //memanggil function dari controller MY_Controller
  $this->cekLogin();

  //validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
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
      $config['allowed_types'] = 'gif|jpg|png|pdf'; 
      $config['max_size']      = 1024;
      $this->load->library('upload', $config);


      if ( ! $this->upload->do_upload('image')) {
         $error = array('error' => $this->upload->display_errors()); 
         
      }else { 

        $data = array('upload' => $this->upload->data());
        $this->load->view('Mahasiswa/ujianprop', $data);

         //print_r('Image Uploaded Successfully.');
         
      } 
   }

}
    
 


?>
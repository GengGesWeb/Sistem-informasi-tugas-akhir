<?php
class Mahasiswa extends MY_Controller{

 public function __construct(){
  parent::__construct();

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
    $this->load->view('Mahasiswa/ujianprop');
    $this->load->view('Mahasiswa/Footer');
  }

}
?>
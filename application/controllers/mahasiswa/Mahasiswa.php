<?php
class Mahasiswa extends MY_Controller{

 public function __construct(){
  parent::__construct();
  $this->load->helper(array('form', 'url')); 

  $this->load->model('model_mahasiswa');
  $this->load->model('model_dosen');
  $id_user = $this->session->userdata('username');
  $mahasiswa = $this->model_mahasiswa->cekuser($id_user);
  $data_mahasiswa = array(
    'NIM' =>$mahasiswa->NIM ,
    'nama'=>$mahasiswa->Nama,
    'prodi' =>$mahasiswa->prodi,
    'golongan' =>$mahasiswa->golongan
     );
  $this->session->set_userdata($data_mahasiswa);

  $data_dosen = $this->model_dosen->get_datadosen();


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
    $this->load->view('Mahasiswa/Header',array('active' => "index"));
    $this->load->view('Mahasiswa/Beranda');
    $this->load->view('Mahasiswa/Footer');
  }

  public function ujianproposal()
  { 
    if($this->input->post('submit_proposal'))
     {
      $inputproposal = array (
          'NIM' => $this->input->post('NIM') , 
          'id_dosen' => $this->input->post('dospem'),
          'judul' => $this->input->post('judul'),
          'file' => $this->session->userdata('proposal')
      );
      $this->model_mahasiswa->input_proposal($inputproposal);
      $dosen['tb_dosen'] = $this->model_dosen->get_datadosen(); 
      $this->load->view('Mahasiswa/Header',array('active'=>"proposal"));
      $this->load->view('Mahasiswa/alert',array('pesan' => "Proposal berhasil di upload"));
      $this->load->view('Mahasiswa/ujianprop',array('error' => '' )); 
      $this->load->view('Mahasiswa/Footer',$dosen);


     }

     else { 

                if ($this->input->post('filesubmit'))
                {
                  $config['upload_path']   = './uploads/'; 
                  $config['allowed_types'] = 'pdf'; 
                  $config['max_size']      = 1024;
                  $this->load->library('upload', $config);


                  if (!$this->upload->do_upload('file')) {
                     $dosen['tb_dosen'] = $this->model_dosen->get_datadosen(); 
                     $error = array('error' => $this->upload->display_errors());
                     $this->load->view('Mahasiswa/Header',array('active'=>"proposal"));
                     $this->load->view('Mahasiswa/ujianprop',$error);
                     $this->load->view('Mahasiswa/Footer',$dosen);
                     
                  } else { 
                    $dosen['tb_dosen'] = $this->model_dosen->get_datadosen(); 
                    $data = array('upload_data' => $this->upload->data());
                    $nama = $this->upload->data('file_name');
                    $data_file = array (
                      'proposal'=>$nama);
                    $this->session->set_userdata($data_file);
                    $this->load->view('Mahasiswa/Header',array('active'=>"proposal"));
                    $this->load->view('Mahasiswa/ujianprop',array('error' => "File Telah di Upload"));
                    $this->load->view('Mahasiswa/Footer',$dosen);                
                  }  
                }
                else 
                {
                  $dosen['tb_dosen'] = $this->model_dosen->get_datadosen(); 
                  $this->load->view('Mahasiswa/Header',array('active'=>"proposal"));
                  $this->load->view('Mahasiswa/ujianprop',array('error' => '' )); 
                  $this->load->view('Mahasiswa/Footer',$dosen);
                }
                }
          }     
    



} //class
?>
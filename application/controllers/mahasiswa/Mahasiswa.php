<?php
class Mahasiswa extends MY_Controller{

 public function __construct(){
  parent::__construct();
  $this->load->helper(array('form', 'url')); 

  $this->load->model('model_mahasiswa');
  $id_user = $this->session->userdata('username');
  $mahasiswa = $this->model_mahasiswa->cekuser($id_user);
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
    $this->load->view('Mahasiswa/Header',array('active' => "index"));
    $this->load->view('Mahasiswa/Beranda');
    $this->load->view('Mahasiswa/Footer');
  }

public function inputjudulmhs(){         /////////////////////////////////INPUT JUDUL MAHASISWA
$this->load->helper("form");
$this->load->view('Mahasiswa/Header',array('active' => "inputjdl"));
$this->load->view('Mahasiswa/formjudulmhs');
$this->load->view('Mahasiswa/Footer');
}



public function proses_inputjudulmhs()
  {
    if ($this->input->post('submit'))
    {
        $inputjudul= array(
          'NIM' => $this->input->post('NIM') , 
          'usulan_pembimbing1' => $this->input->post('judul_dosen'),
          'usulan_pembimbing2' => $this->input->post('usulan_pembimbing2'),
          'judul' => $this->input->post('judul'),
          'dosen_pengusul' => $this->input->post('dosen_pengusul'),
          'ringkasan' => $this->input->post('ringkasan'),
          'kategori' => $this->input->post('kategori')
        );

        $this ->load-> model('m_mhsinput');
        $this ->m_mhsinput->input_judul($inputjudul);
        
          $this->load->view('Mahasiswa/Header', array('active' => "inputjdl"));
          $this->load->view('Mahasiswa/v_alerts');
          $this->load->view('Mahasiswa/formjudulmhs'); 
          $this->load->view('Mahasiswa/footer');
      }
      else {
        $data['exist']=$exist;
        $this->load->view('Mahasiswa/formjudulmhs',$data);
      }
    
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
      $dosen = array('data_dosen' => $this->model_mahasiswa->get_datadosen());
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
                     $dosen= array('data_dosen' => $this->model_mahasiswa->get_datadosen());
                     $error = array('error' => $this->upload->display_errors());
                     $this->load->view('Mahasiswa/Header',array('active'=>"proposal"));
                     $this->load->view('Mahasiswa/ujianprop',$error);
                     $this->load->view('Mahasiswa/Footer',$dosen);
                     
                  } else { 
                    $dosen = array('data_dosen' => $this->model_mahasiswa->get_datadosen());
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
                  $dosen = array('data_dosen' => $this->model_mahasiswa->get_datadosen());
                  $this->load->view('Mahasiswa/Header',array('active'=>"proposal"));
                  $this->load->view('Mahasiswa/ujianprop',array('error' => '' )); 
                  $this->load->view('Mahasiswa/Footer',$dosen);
                }
                }
          }     
    



} //class
?>
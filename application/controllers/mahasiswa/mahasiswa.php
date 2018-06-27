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

  public function index(){
    $this->load->view('Mahasiswa/Header',array('active' => "index"));
    $data['judul_dosen'] = $this->model_mahasiswa->tampil_data()->result();
    $this->load->view('Mahasiswa/Beranda', $data);
    $this->load->view('Mahasiswa/Footer');
  }


public function hasilreview(){         /////////////////////////////////HASIL REVIEW 
  $NIM = $this->session->userdata('NIM');
$this->load->view('Mahasiswa/Header',array('active' => "hasilreview"));  
 $data['h_review'] = $this->model_mahasiswa->hasilreview($NIM)->result();
    $this->load->view('Mahasiswa/hasilreview', $data);
    $this->load->view('Mahasiswa/Footer');
}

public function inputjudulmhs(){         /////////////////////////////////INPUT JUDUL MAHASISWA
  $main="usulan";
    $tgl_awal = $this ->model_mahasiswa->get_jadwal_awal($main);
    $tgl_akhir =$this ->model_mahasiswa->get_jadwal_akhir($main);
    date_default_timezone_set('Asia/Jakarta');
            $y = date("Y");
            $m=date("m");
            $d=date("d");
            $akhir = explode('-',$tgl_akhir['tgl_akhir']);
            $awal = explode('-',$tgl_awal['tgl_awal']);
            
            if(($y-$awal[0]==0 && $m-$awal[1]==0 && $d-$awal[2]>=0)&&($y-$akhir[0]==0 && $m-$akhir[1]==0 && $d-$akhir[2]<=0)){
              $l=1;
$dosen = array('data_dosen' => $this->model_mahasiswa->get_datadosen(),'active'=>"inputjdl");
$this->load->view('Mahasiswa/Header',$dosen);
$this->load->view('Mahasiswa/formjudulmhs');
$this->load->view('Mahasiswa/Footer');
}
else {
                $this->load->view('Mahasiswa/Header',array('active'=>'inputjdl'));
                $this ->load->view('Mahasiswa/peringatan',array('pesan'=>' Belum waktunya upload Judul Usulan'));
                $this->load->view('Mahasiswa/Footer');
        }    

}

public function inputjudulfinal(){         /////////////////////////////////INPUT JUDUL MAHASISWA
$main="final";
    $tgl_awal = $this ->model_mahasiswa->get_jadwal_awal($main);
    $tgl_akhir =$this ->model_mahasiswa->get_jadwal_akhir($main);
    date_default_timezone_set('Asia/Jakarta');
            $y = date("Y");
            $m=date("m");
            $d=date("d");
            $akhir = explode('-',$tgl_akhir['tgl_akhir']);
            $awal = explode('-',$tgl_awal['tgl_awal']);
            
            if(($y-$awal[0]==0 && $m-$awal[1]==0 && $d-$awal[2]>=0)&&($y-$akhir[0]==0 && $m-$akhir[1]==0 && $d-$akhir[2]<=0)){
              $l=1;  
$dosen = array('data_dosen' => $this->model_mahasiswa->get_datadosen(),'active'=>"inputjdl");
$this->load->view('Mahasiswa/Header',$dosen);
$this->load->view('Mahasiswa/formjudulfinal');
$this->load->view('Mahasiswa/Footer');
            }
      else {
                $this->load->view('Mahasiswa/Header',array('active'=>'inputjdl'));
                $this ->load->view('Mahasiswa/peringatan',array('pesan'=>' Belum waktunya upload Judul Final'));
                $this->load->view('Mahasiswa/Footer');
        }      
}



public function proses_inputjudulmhs()
  {
    if ($this->input->post('submit'))
    {
        $inputjudul= array(
          'NIM' => $this->input->post('NIM') , 
          'judul' => $this->input->post('judul'),
          'id_dosen_pengusul' => $this->input->post('dosen_pengusul'),
          'ringkasan' => $this->input->post('ringkasan'),
          'id_dosen_pembimbing' => $this->input->post('usulan_pembimbing1'),         
          'kategori' => $this->input->post('kategori1')
        );

        $this ->load-> model('m_mhsinput');
        $this ->m_mhsinput->input_judul($inputjudul);
        
          $this->load->view('Mahasiswa/Header', array('active' => "inputjdl"));
          $this->load->view('Mahasiswa/notif_input');
          $this->load->view('Mahasiswa/formjudulmhs'); 
          $this->load->view('Mahasiswa/footer');
      }
      else {
        $data['exist']=$exist;
        $this->load->view('Mahasiswa/formjudulmhs',$data);
      }
    
    }

  public function proses_inputjudulfinal()
  {
    
    if ($this->input->post('submit'))
    {
        $inputjudul= array(
          'NIM' => $this->input->post('NIM') , 
          'judul' => $this->input->post('judul'),
          'id_dosen' => $this->input->post('dosen_pembimbing'),
          'deskripsi' => $this->input->post('ringkasan'),
          'kategori' => $this->input->post('kategori1'), 
          'saran' => $this->input->post('saran')
        );
        $inputusulan = array(
          'NIM' =>$this->input->post('NIM') ,
          'id_dosen' =>$this->input->post('dosen_pembimbing'),
          'judul' =>$this->input->post('judul') 
        );

        $this ->load-> model('m_mhsinput');
        $this ->m_mhsinput->input_judulfinal($inputjudul);
        $this ->m_mhsinput->inputusulanpemb($inputusulan);
        
          $this->load->view('Mahasiswa/Header', array('active' => "inputjdl"));
          $this->load->view('Mahasiswa/notif_input');
          $this->load->view('Mahasiswa/formjudulfinal'); 
          $this->load->view('Mahasiswa/footer');
      }
      else {
        $data['exist']=$exist;
        $this->load->view('Mahasiswa/formjudulfinal',$data);
      }

    
    
    
    }


  public function ujianproposal()
  { 
    $main="proposal";
    $tgl_awal = $this ->model_mahasiswa->get_jadwal_awal($main);
    $tgl_akhir =$this ->model_mahasiswa->get_jadwal_akhir($main);
    date_default_timezone_set('Asia/Jakarta');
            $y = date("Y");
            $m=date("m");
            $d=date("d");
            $akhir = explode('-',$tgl_akhir['tgl_akhir']);
            $awal = explode('-',$tgl_awal['tgl_awal']);
            
            if(($y-$awal[0]==0 && $m-$awal[1]==0 && $d-$awal[2]>=0)&&($y-$akhir[0]==0 && $m-$akhir[1]==0 && $d-$akhir[2]<=0)){
              $l=1;
            
            

    if($this->input->post('submit_proposal'))
     {
      $inputproposal = array (
          'NIM' => $this->input->post('NIM') , 
          'id_dosen' => $this->input->post('dospem'),
          'judul' => $this->input->post('judul'),
          'file' => $this->session->userdata('proposal')
      );
      $this->model_mahasiswa->input_proposal($inputproposal);
      $dosen = array('data_dosen' => $this->model_mahasiswa->get_datadosen(),'active'=>"proposal");
      $this->load->view('Mahasiswa/Header',$dosen);
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
                     $dosen = array('data_dosen' => $this->model_mahasiswa->get_datadosen(),'active'=>"proposal");
                     $error = array('error' => $this->upload->display_errors());
                     $this->load->view('Mahasiswa/Header',$dosen);
                     $this->load->view('Mahasiswa/ujianprop',$error);
                     $this->load->view('Mahasiswa/Footer',$dosen);
                     
                  } else { 
                    $dosen = array('data_dosen' => $this->model_mahasiswa->get_datadosen(),'active'=>"proposal");
                    $data = array('upload_data' => $this->upload->data());
                    $nama = $this->upload->data('file_name');
                    $data_file = array (
                      'proposal'=>$nama);
                    $this->session->set_userdata($data_file);
                    $this->load->view('Mahasiswa/Header',$dosen);
                    $this->load->view('Mahasiswa/ujianprop',array('error' => "File Telah di Upload"));
                    $this->load->view('Mahasiswa/Footer',$dosen);                
                  }  
                }
                else 
                {
                  $dosen = array('data_dosen' => $this->model_mahasiswa->get_datadosen(),'active'=>"proposal");
                  $this->load->view('Mahasiswa/Header',$dosen);
                  $this->load->view('Mahasiswa/ujianprop',array('error' => '' )); 
                  $this->load->view('Mahasiswa/Footer',$dosen);
                }
                }
          }
          else {
                $this->load->view('Mahasiswa/Header',array('active'=>'proposal'));
                $this ->load->view('Mahasiswa/peringatan',array('pesan'=>'Belum waktunya upload proposal'));
                $this->load->view('Mahasiswa/Footer');
        }
        }

        public function list_usulan(){
          $NIM = $this->session->userdata('NIM');
          $data['usulan'] = $this->model_mahasiswa->usulan($NIM);

          $this->load->view('Mahasiswa/Header',array('active'=>'inputjdl'));
          $this->load->view('Mahasiswa/v_usulan',$data);
          $this->load->view('Mahasiswa/Footer');
        }

        public function edit_usulan(){
          $id= $this->uri->segment(4);
          $ctr= $this->model_mahasiswa->cek_review($id);
          //bisa edit
          if($ctr===1){
          $data['tb_usulan'] = $this->model_mahasiswa->ambil_usulan($id);
          $data = array('data_dosen' => $this->model_mahasiswa->get_datadosen(),
                        'active'=>"inputjdl",
                        'tb_usulan'=>  $this->model_mahasiswa->ambil_usulan($id)
                      );  
          $this->load->view('Mahasiswa/Header',array('active'=>'inputjdl'));
          $this->load->view('Mahasiswa/v_edit_usulan',$data);
          $this->load->view('Mahasiswa/Footer');
          }else{
            $error="Usulan ini tidak dapat diedit lagi";
            $NIM = $this->session->userdata('NIM');
            $data['usulan'] = $this->model_mahasiswa->usulan($NIM);
            $data['error'] = $error;
            $this->load->view('Mahasiswa/Header',array('active'=>'inputjdl'));
            $this->load->view('Mahasiswa/peringatan',array('pesan'=>'Usulan judul anda tidak dapat diedit lagi'));
            $this->load->view('Mahasiswa/v_usulan',$data);
            $this->load->view('Mahasiswa/Footer');
          }
          
        }

        public function update_judul(){
          $id_judul_usulan = $this->input->post('id_judul_usulan');
          
        
          $data= array(
          'id_judul_usulan' => $this->input->post('id_judul_usulan'),
          'NIM' => $this->input->post('NIM') , 
          'judul' => $this->input->post('judul'),
          'id_dosen_pengusul' => $this->input->post('dosen_pengusul'),
          'ringkasan' => $this->input->post('ringkasan'),
          'id_dosen_pembimbing' => $this->input->post('usulan_pembimbing'),         
          'kategori' => $this->input->post('kategori1')
        );
         
          $where = array(
            'id_judul_usulan' => $id_judul_usulan
          );
         
          $this->model_mahasiswa->update_hak_akses($where,$data,'tb_judul_usulan');
          redirect('mahasiswa/mahasiswa/list_usulan');
        }


} //class
?>
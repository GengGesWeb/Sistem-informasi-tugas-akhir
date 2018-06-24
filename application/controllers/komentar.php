<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class komentar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('M_komentar');
		$this->data['hasil'] = $this->M_komentar->getReview('tb_judul_usulan');
		$this->load->view('v_komentar', $this->data);
	}
	public function form_terima(){
		$this->load->view('form_terima');

	}
	
	
	public function insert(){
		$idusulan = $_POST['id_judul_usulan'];
		$iddosen = $_POST['id_dosen'];
		$namadosen = $_POST['nama_dosen'];
		$status = $_POST['status'];
		$saran = $_POST['saran'];
		$this->load->model('M_komentar');
		$data  = array('id_judul_usulan' => $idusulan , 'id_dosen' => $iddosen, 'nama_dosen' => $namadosen, 'saran' => $saran, 'status' => $status);
		$terima = $this->M_komentar->terima('tb_review', $data);
		if ($terima > 0) {
			redirect(base_url('komentar'));
		}else{
			echo "gagal menyimpan";
		}
	}
	public function tolak(){
		$this->load->model('M_komentar');
		
		$idusulan = $_POST['id_judul_usulan'];
		$iddosen = $_POST['id_dosen'];
		$dosenpenolak = $_POST['dosen_penolak'];
		$saran = $_POST['saran'];
		$data  = array('id_judul_usulan' => $idusulan , 'id_dosen' => $iddosen, 'dosen_penolak' => $namadosen, 'saran' => $saran);

		if ($tolak > 0) {
			redirect('view/v_komentar');
		}else{
			echo "gagal menyimpan";
		}
	}
	}


<?php

class Entri extends CI_Controller{
	public function index(){
		$this->load->model('Mahasiswa_model');
		$model = $this->Mahasiswa_model;
		
		if (isset($_POST['btnSubmit'])){
			$model = array(
				'nim' => $this->input->post("nim"),
				'nama' => $this->input->post("nama"),
				'prodi' => $this->input->post("prodi"),
				);
			
			//$model->nim = $_POST['nim'];
			//$model->nama = $_POST['nama'];
			//$model->prodi = $_POST['prodi'];
			$this->db->insert('mahasiswa',$model);
			//$this->load->view('entri_respon_view',['model'=>$model]);
		}else{
			$this->load->view('entri_from_view',['model'=>$model]);
		}
	}
}

?>
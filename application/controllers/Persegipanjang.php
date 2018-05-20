<?php

class Persegipanjang extends CI_Controller{
	public function index(){
		if(isset($_POST['btnSubmit'])){
	//pemanggilan atau pembuatan model
	$this->load->model('Persegipanjang_model');
	$model = $this->Persegipanjang_model;
	
	
	//pengambilan nilai panjang & lebar (inputan)
	//$model -> set_panjang(4);
	//$model -> set_lebar(5);
	$panjang = $_POST['p'];
	$lebar = $_POST['l'];
	
	//set nilai panjang dan lebar dengan fungsi set_...
	$model -> set_panjang($panjang);
	$model -> set_lebar($lebar);
	
	//pemanggilan ke view
	$this -> load -> view('Persegipanjangview', array ('model'=> $model));
	}else{
		//menampilkan form
		$this->load->view('Persegipanjangfromview');
	
}
	}
}
?>
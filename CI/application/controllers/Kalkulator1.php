<?php

	class Kalkulator1 extends CI_Controller {
		private $model = NULL;
		
		public function __construct(){
			parent::__construct();
			
			$this->load->helper('form');
			
			$this->load->model('Kalkulator_model');
			$this->model = $this->Kalkulator_model;
		}
		
		public function index() {
		if(isset($_POST['btnSubmit'])){
			$this->model->var1 = $_POST['var1'];
			$this->model->var2 = $_POST['var2'];
			$this->model->operator = $_POST['operator'];
			$this->load->view('Kalkulator_respon_view',['model'=>$this->model]);
		}else{
			$this->load->view('Kalkulator1_form_view',['model'=>$this->model]);
		}
	}
}

?>
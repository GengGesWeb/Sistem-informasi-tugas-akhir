<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usulan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_usulan');
	}
	
	public function index(){
		$x['data']=$this->M_usulan->show_usulan();
		$this->load->view('dosen/v_usulan',$x);
	}
}
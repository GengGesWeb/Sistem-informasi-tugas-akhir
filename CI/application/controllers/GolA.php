<?php
//nama controller dan class harus sama

class GolA extends CI_Controller{
	
	public function index(){
		//echo "Selamat Pagi!";
		$this->load->view("helloA"); //UNTUK VIEW
		
	}
}
?>
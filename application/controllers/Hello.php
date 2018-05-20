<?php
//nama controller dan class harus sama

class Hello extends CI_Controller{
	
	public function index(){
		//echo "Selamat Pagi!";
		
		//membuat model Hello_model
		$this->load->model('Hello_model');
		
		//pengembalian objek dari class Hello_model dan dimuat di var $model
		$model = $this->Hello_model;
		
		//mengambil data dari model
		$a = $model->txt;
		
		//membuat data yang akan dikirim ke view
		$data['teks'] = $a;
		
		//memanggil file view
		$this->load->view('helloview', $data); //UNTUK VIEW
		
	}
}
?>
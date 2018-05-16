<?php

class Mahasiswa_model extends CI_Model{
	public $nim;
	public $nama;
	public $prodi;
	
	public $labels = [];
	
	public function __construct(){
		parent::__construct();
		$this->labels=$this->attribute_labels();
		$this->load->database();
	}
	
	public function get_table_name(){
		return 'product';
	}
	
	public function insert(){
		$this->db->insert($this->get_table_name().$this);
	}
	
	public function update(){
		$this->db->update($this->get_table_name(). $this, ['nim'=>$this->nim]);
	}
	
	public function attribute_labels(){
		return['nim'=>'NIM:','nama'=>'Nama Mahasiswa:', 'prodi'=>'Prodi:'];
	}
}

?>
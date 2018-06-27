<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_komentar extends CI_Model {

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
	public function getReview($table_name)
	{
		$get_review = $this->db->get($table_name);
		return $get_review->result_array();
	}
	public function terima($table_name, $data){
		$terima = $this->db->insert($table_name, $data);
		return $terima;

	}
	
}

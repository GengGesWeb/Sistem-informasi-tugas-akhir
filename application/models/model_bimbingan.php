<?php

class model_bimbingan extends CI_model
{

	function tampil_data($id){
		$query = $this-> db->query ("SELECT tb_mahasiswa.Nama, tb_usulan_pembimbing.* FROM `tb_usulan_pembimbing` join tb_mahasiswa on tb_mahasiswa.NIM = tb_usulan_pembimbing.nim where tb_usulan_pembimbing.id_dosen='$id'");
		return $query->result();
	}

	public function input_diterima($inputterima){
		$this->db->insert('tb_pembimbing_fix',$inputterima);
	}
}
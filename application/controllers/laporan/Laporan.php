<?php
	Class Laporan extends CI_Controller{
		function __construct() {
        parent::__construct();
        $this->load->library('pdf');
		$this->load->model('Model_koordinator');
		}
		
		function daftar_bimbingan(){
			$data = $this->Model_koordinator->daftar_bimbingan();
		//echo $data[0]->nama;
		$pdf = new FPDF('p','mm','A4');
		// membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',14);
		// mencetak string 
        $pdf->Cell(190,7,'Daftar Bimbingan',0,1,'C');
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(10,6,' NO',1,0);
		$pdf->Cell(20,6,'     NIM',1,0);
		$pdf->Cell(29,6,'Nama',1,0);
		$pdf->Cell(12,6,'Prodi',1,0);
		$pdf->Cell(9,6,'Gol',1,0);
		$pdf->Cell(50,6,'Pembimbing',1,0);
		$pdf->Cell(65,6,' Usulan Judul Tugas Akhir',1,1);
		$t=1;
		foreach($data as $row){
			$pdf->Cell(10,6,$t,1,0);
		$pdf->Cell(20,6,$row->NIM,1,0);
		$pdf->Cell(29,6,$row->Nama,1,0);
		$pdf->Cell(12,6,$row->prodi,1,0);
		$pdf->Cell(9,6,$row->golongan,1,0);
		$pdf->Cell(50,6,$row->nama,1,0);
		$pdf->Cell(65,6,$row->judul,1,1);
		$t++;
		}
		$pdf->Output();
		
		
		}
		function usulan(){
			header("Content-type:application/vnd.ms-excel");
			header("Content-disposition:attachment; filename=daftar_usulan_judul.xls");
			$data = $this->Model_koordinator->data_usulan();
			echo"<table align='center' cellspacing='0px' border='1px'>
			<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Prodi - Golongan</th>
			<th>Usulan Judul</th>
			<th>Deskripsi</th>
			<th>Kategori</th>
			<th>Dosen Pembimbing</th>
			</tr>
			";
			$a=1;
			foreach($data as $row){
				echo"
					<tr>
					<td>$a</td>
					<td>$row->nim</td>
					<td>$row->nama</td>
					<td>$row->prodi - $row->golongan</td>
					<td>$row->judul</td>
					<td>$row->deskripsi</td>
					<td>$row->kategori</td>
					<td>$row->pembimbing</td>
					</tr>
				";
				$a++;
			}
			echo"</table>";
		} 
		function usulan_fik(){
			header("Content-type:application/vnd.ms-excel");
			header("Content-disposition:attachment; filename=daftar_usulan_judul_fik.xls");
			$data = $this->Model_koordinator->data_usulan_fik();
			echo"<table align='center' cellspacing='0px' border='1px'>
			<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Prodi - Golongan</th>
			<th>Usulan Judul</th>
			<th>Deskripsi</th>
			<th>Kategori</th>
			<th>Saran</th>
			<th>Dosen Pembimbing</th>
			</tr>
			";
			$a=1;
			foreach($data as $row){
				echo"
					<tr>
					<td>$a</td>
					<td>$row->nim</td>
					<td>$row->nama</td>
					<td>$row->prodi - $row->golongan</td>
					<td>$row->judul</td>
					<td>$row->deskripsi</td>
					<td>$row->kategori</td>
					<td>$row->saran</td>
					<td>$row->pembimbing</td>
					</tr>
				";
				$a++;
			}
			echo"</table>";
		}
		function kartu(){
		$a = $this->session->userdata('username');
		//echo $a;
		$data = $this->Model_koordinator->pembimbing_fik($a);
		//echo $data[0]->nama;
		$pdf = new FPDF('p','mm','A4');
		// membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',14);
		// mencetak string 
        $pdf->Cell(190,7,'Kartu Bimbingan',0,1,'C');
		$pdf->SetFont('Arial','',12);
		$pdf->Write(10,'
		NIM : '.$data[0]->nim.'
		Nama : '.$data[0]->nama.'
		Prodi : '.$data[0]->prodi.'
		Golongan : '.$data[0]->golongan.'
		Pembimbing : '.$data[0]->pembimbing.'');
		$pdf->Cell(19,6,'',0,1);
		$pdf->Cell(19,6,'',0,1);
		$pdf->Cell(10,6,' NO',1,0);
		$pdf->Cell(29,6,'     Tanggal',1,0);
		$pdf->Cell(119,6,'                                          Kegiatan',1,0);
		$pdf->Cell(29,6,'        TTD',1,1);
		for($w=1;$w<=30;$w++){
		$pdf->Cell(10,6,'',1,0);
		$pdf->Cell(29,6,'',1,0);
		$pdf->Cell(119,6,'',1,0);
		$pdf->Cell(29,6,'',1,1);
		}
		
		$pdf->Output();
		}
		
	
	}
?>
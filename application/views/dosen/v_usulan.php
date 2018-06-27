<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Usulan</title>
	<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
</head>
<body>

<div class="container">
	<h1>Data <small>Usulan</small></h1>
	<table class="table table-bordered table-striped" id="mydata">
		<thead>
			<tr>
				<td>Id Judul Usulan</td>
				<td>NIM</td>
				<td>Judul</td>
				<td>deskripsi</td>
				<td>Id Dosen Pembimbing</td>
				<td>Kategori</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($data->result_array() as $i):
					$Id_judul_usulan=$i['Id_judul_usulan'];
					$NIM=$i['NIM'];
					$Judul=$i['Judul'];
					$deskripsi=$i['deskripsi'];
					$Id_Dosen_Pembimbing=$i['Id_Dosen_Pembimbing'];
					$Kategori=$i['Kategori'];
			?>
			<tr>
				<td><?php echo $Id_judul_usulan;?></td>
				<td><?php echo $NIM;?></td>
				<td><?php echo $Judul;?></td>
				<td><?php echo $deskripsi;?></td>
				<td><?php echo $Id_Dosen_Pembimbing;?></td>
				<td><?php echo $Kategori;?></td>

			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	
</div>

<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
<script>
	$(document).ready(function(){
		$('#mydata').DataTable();
	});
</script>
</body>
</html>
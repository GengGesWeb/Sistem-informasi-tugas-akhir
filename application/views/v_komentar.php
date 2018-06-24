<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
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
				$no = 1;
			foreach($hasil as $i ) {?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $i['id_judul_usulan']?></td>
				<td><?php echo $i['NIM']?></td>
				<td><?php echo $i['judul']?></td>
				<td><?php echo $i['deskripsi']?></td>
				<td><?php echo $i['id_dosen_pembimbing']?></td>
				<td><?php echo $i['kategori']?></td>
				<td><a href="<?php echo site_url('komentar/form_terima')?>">komentar judul</a>
				</td>

			</tr>
			<?php }?>
		</tbody>
	</table>
	
</div>


	
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>1
</body>
</html>
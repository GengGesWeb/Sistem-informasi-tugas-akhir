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

	
	
<div id="container">
	<h1>Review Judul Usulan</h1>

	<div id="body">
		<form name="form1" method="POST" action="<?php echo site_url('komentar/insert')?>">
	<table align="center">
	<td colspan="3" align="center">form komentar judul usulan</td>
	<tr>
		<td>Id Judul Usulan</td>
		<td>:</td>
		<td><input type="text" name="id_judul_usulan" placeholder="input id judul usulan"></input></td>
	</tr>
	<tr>
		<td>Id Dosen</td>
		<td>:</td>
		<td><input type="text" name="id_dosen" placeholder="input id dosen"></input></td>
	</tr>
	<tr>
		<td>Nama Dosen </td>
		<td>:</td>
		<td><input type="text" name="nama_dosen" placeholder="input nama dosen"></input></td>
	</tr>
	<tr>
		<td>Status judul</td>
		<td>:</td>
		<td><input type="text" name="status" placeholder="terima/terima dengan perbaikan/tolak"></input></td>
	</tr>
	
	<tr>
		<td>Saran</td>
		<td>:</td>
		<td><textarea name="saran" rows="6" cols="60"></textarea></td>
	</tr>
<tr>
		
		<td colspan="3" align="center"><input type="submit" name="kirim" value="kirim"></input></td>
	</tr>
	</table>

</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
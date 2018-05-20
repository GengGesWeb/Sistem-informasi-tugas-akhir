<html>
<head>
<title>Demo Model</title>
</head>

<body>
<h2> Entri Data Sukses </h2>
<p> Bars data berikut telah ditambahkan ke tabel</p>

<table border="1">
<tr>
	<th>Kode</th>
	<th>Nama Produk</th>
	<th>Harga</th>
</tr>
<tr>
	<td><?php echo $model->nim; ?></td>
	<td><?php echo $model->nama; ?></td>
	<td><?php echo $model->prodi; ?></td>
</tr>
</body>
</html>
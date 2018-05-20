<html>
<head>
<title>Demo Model</title>
</head>

<body>

<h2>Entri Data Sukses</h2>

<form action="http://localhost/CI/entri" method="POST">
<?php echo $model->labels['nim']; ?><br>
<input type="text" name="nim"><br><br>

<?php echo $model->labels['nama']; ?><br>
<input type="text" name="nama"><br><br>

<?php echo $model->labels['prodi']; ?><br>
<input type="text" name="prodi"><br><br>

<input type="submit" name="btnSubmit" value="Simpan">

</form>
</body>
</html>
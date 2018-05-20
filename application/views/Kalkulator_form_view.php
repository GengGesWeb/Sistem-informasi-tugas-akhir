<html>
<head>
	<title>DEMO FORM</title>
</head>
<body>

<form action="http://localhost/CI/index.php/kalkulator" method="POST">
	
	<?php echo $model->labels['var1']; ?><br>
	<input type="text" name="var1"><br><br>
	
		<?php echo $model->labels['operator']; ?><br>
		<select name="operator" size="1">
		<option value="+">Tambah</option>
		<option value="-">Kurang</option>
		<option value="*">Perkalian</option>
		<option value="/">Pembagian</option>
		<option value="^">Pangkat</option>
		</select><br><br>
		
			<?php echo $model->labels['var2']; ?><br>
			<input type="text" name="var2"><br><br>
	
<input type="submit" name="btnSubmit" value="Hitung">
</form>
	
	
</body>
</html>
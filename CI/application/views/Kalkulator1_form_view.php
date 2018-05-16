<html>
<head>
	<title>DEMO FORM WITH HELPER</title>
</head>
<body>

<?php
	echo form_open('kalkulator1/index');
	echo form_label($model->labels['var1']);
	echo '</br>';
	echo form_input ('var1');
	echo '<br/>';
	
	echo form_label($model->labels['operator']);
	echo '</br>';
	$opsi = ['+'=>'Tambah','-'=>'Kurang','*'=>'kali','/'=>'Bagi','^'=>'Pangkat'];
	echo form_dropdown ('operator',$opsi);
	echo '<br/>';
	
	
	echo form_label($model->labels['var2']);
	echo '</br>';
	echo form_input ('var2');
	echo '<br/>';
	
	echo form_open('btnSubmit','Hitung');
	echo form_close();	
?>	
<input type="submit" name="btnSubmit" value="Hitung">
	
</body>
</html>
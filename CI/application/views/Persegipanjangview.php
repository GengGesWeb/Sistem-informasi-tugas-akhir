<html>
<head>
<title>Latihan Model</title>
</head>

	<h1>Model Persegi Panjang</h1>
	
	<!--Pemanggilan metode get_panjang dan get_lebar-->
	Nilai panjang: <?php echo $model->get_panjang(); ?></br>
	Nilai lebar: <?php echo $model->get_lebar(); ?></br>
	
	<!--Pemanggilan metode hitung luas-->
	Luas Persegi Panjang: <?php echo $model->hitung_luas(); ?></br>
	<!--Pemanggilan metode hitung_keliling-->
	Keliling Persegi Panjang: <?php echo $model->hitung_keliling(); ?></br>
	
	</body>
	</html>
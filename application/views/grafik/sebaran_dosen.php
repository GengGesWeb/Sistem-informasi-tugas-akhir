<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: ""
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}",
		dataPoints: [
			<?php 
				foreach ($dosen as $data){
			?>
			{ y: <?= $data->total ?>, label: "<?= $data->nama ?>" },
			<?php } ?>
			
		]
	}]
});
chart.render();

}
</script>
</head>
<body>

<div class="main">
  
  <div class="main-inner">

      <div class="container">
        
       <div class="row">
          
          <div class="span12">
        
          <div class="info-box">

            <div class="row-fluid stats-box">
			
			<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
			<br><br><br>
			<h3>Data Sebaran Dosen Pembimbing</h3>
			<table class="table table-sm">
			  <thead>
				<tr>
				  <th scope="col">No</th>
				  <th scope="col">Nama</th>
				  <th scope="col">Total</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php
			  $no=1;
			  foreach ($dosen as $data1){
				echo"<tr>
				  <td>$no</td>
				  <td>$data1->nama</td>
				  <td>$data1->total</td>
				  </tr>";
				$no++;
				}
				?>
	</table>
            </div>
         </div>
         </div>
        </div>
      </div>
  </div>
</div>    
   
	<script src="<?php echo base_url('assets/js/canvasjs.min.js')?>"></script>
  </body>
</html>



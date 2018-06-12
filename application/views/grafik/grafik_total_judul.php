<!DOCTYPE HTML>
<html>
<head>  
<meta charset="UTF-8">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Jumlah Total Judul Tugas Akhir <?= $jumlah_siswa->id + $jumlah_dosen->id?>"
	},
	axisY: {
		//title: "Reserves(MMbbl)"
	},
	data: [{        
		type: "column",  
		showInLegend: false, 
		//legendMarkerColor: "grey",
		//legendText: "MMbbl = one million barrels",
		dataPoints: [      
			{ y: <?= $jumlah_siswa->id ?>, label: "Jumlah Total Judul Siswa" },
			{ y: <?= $jumlah_dosen->id?>,  label: "Jumlah Total Judul Dosen" },
			
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
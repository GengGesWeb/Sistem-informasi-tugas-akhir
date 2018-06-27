
<div class="main">
  
  <div class="main-inner">

      <div class="container">
        
       <div class="row">
          
          <div class="span12">
        
          <div class="info-box">

            <div class="row-fluid stats-box">

      <center>
      
        <h2>Hasil Review Judul Tugas Akhir</h2><br />

<table  class="table table-striped table-bordered table-hover" >
  <tr>
    <th>Judul Usulan</th>
    <th>Status</th>
    <th>Saran</th>
  </tr>

  <?php
  foreach ($h_review as $row){       
  ?>

  <tr>
  <td><?php echo $row->judul ?></td>
  <td><?php echo $row->status ?></td>
  <td><?php echo $row->saran ?></td>
</tr>

<?php
  }
  ?>
  
</table>


       
      </center>
            </div>
         </div>
         </div>
        </div>
      </div>
  </div>
</div>    
    </form>
  </body>
</html>
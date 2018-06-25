
<div class="main">
  
  <div class="main-inner">

      <div class="container">
        
       <div class="row">
          
          <div class="span12">
        
          <div class="info-box">

            <div class="row-fluid stats-box">

      <center>
      
        <h2>Daftar Usulan Judul Tugas Akhir Dosen</h2><br />

<table  class="table table-striped table-bordered table-hover" >
  <tr>
    <th>Nama Dosen</th>
    <th>Judul Usulan</th>
    <th>Prodi</th>
    <th>Kuota</th>
  </tr>

  <?php
  foreach ($judul_dosen as $row){       
  ?>

  <tr>
  <td><?php echo $row->nama ?></td>
  <td><?php echo $row->judul_dosen ?></td>
  <td><?php echo $row->prodi ?></td>
  <td><?php echo $row->kuota ?></td>
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
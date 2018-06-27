
<div class="main">
  
  <div class="main-inner">

      <div class="container">
        
       <div class="row">
          
          <div class="span12">
        
          <div class="widget">
            <div class="widget-header">
                        <i class="icon-list"></i>
                        <h3>LIST Usulan Judul dari dosen</h3>
                    </div> <!-- /widget-header -->
                  <div class="widget-content">
                    <div class="tabbable">

            

      <center>
      

<table  class="table table-striped table-bordered table-hover" >
  <tr>
    <th>Judul</th>
    <th>Nama Review Dosen</th>
    <th>Status</th>
    <th>Saran</th>
    <th>Kesimpulan</th>
  </tr>

  <?php
  foreach ($list as $row){       
  ?>
  <tr>
  <td ><?php echo $row->judul ?></td>
  <td><?php echo $row->nama ?></td>
  <td><?php echo $row->status ?></td>
  <td><?php echo $row->saran ?></td>
  <td><a href="<?php echo"ksp_review/?id=$row->id_judul_usulan&r=$row->nim" ?>">Kesimpulan</a></td>
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
</div>    
    </form>
  </body>
</html>
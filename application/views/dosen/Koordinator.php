<?php
/**
 * View untuk menampilkan daftar/list data (Read)
 * beserta dengan form yang memungkinkan pencarian data spesifik dengan kata kunci
 * 
 */
?>
<div class="main">
  
  <div class="main-inner">

    <div class="container">
        
       <div class="row">
          
          <div class="span12">
            <div class="widget">

                    <div class="widget-header">
                        <i class="icon-signin"></i>
                        <h3>LIST DOSEN PEMBIMBING</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                    <div class="tabbable">
                    <ul class="nav nav-tabs">
                    <table class="table table-striped table-bordered ">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Dosen</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
       <?php 
                        $no = 1;
                        foreach($user as $row){ 
                        ?>
                        <tr>
                        <td><?php echo $no++ ?> </td>
                        <td><?php echo $row->id_dosen ?></td>
                        <td><?php echo $row->nama ?></td>
                        <td><?php echo $row->hak_akses ?></td>
                        <td>
                  <?php echo anchor('crud/edit/'.$row->id_dosen,'Edit'); ?>
            </td>
                        </tr>
                        <?php } ?>
    </table>
                        

 <br />                  
                      
                   
     </form>
</div>
</div>
</div>
</div>
</div>
</div> 
</div>
</div>
</div> 

    
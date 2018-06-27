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
                        <?php echo anchor('dosen/dosen/edit_hak_akses/'.$row->id_dosen,'<button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal">Edit</button>'); ?>
            </td>
                        </tr>
                        <?php } ?>
    </table>
                        

 <br />                  
                      
                   
     </form>
       <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Silahkan Edit</h4>
        </div>
        <div class="modal-body">
          <p>
          <?php $this->load->view('dosen/v_edit_hak_akses');?>
          
     </p>
        </div>
        </div>
      
    </div>
  </div>
  
     
</div>
</div>
</div>
</div>
</div>
</div> 
</div>
</div>
</div> 

    
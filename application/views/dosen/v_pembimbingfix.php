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
                        <h3>Permintaan menjadi pembimbing</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                    <div class="tabbable">
                    <ul class="nav nav-tabs">

                        <fieldset>
                             <div class="form-group">                                         
                              <label class="form-label" for="username">NIP</label>
                                            <div class="form">
                                <input type="text" class="span6 disabled" id="username" value="<?php echo $this->session->userdata('username');?>" disabled>
                                <p class="help-block">Your NIP is for logging in and cannot to be changed.</p>

                                            </div> <!-- /controls -->               
                                        </div> <!-- /control-group --> 

    <br>

<!--
<div class="row">
                    <div class="col-lg-8">
                    <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="40px" style="text-align: center ;">No</th>
                            <th width="40px" style="text-align: center ;">Action</th>
                            <th width="40px" style="text-align: center ;">id_usulan_pemb</th>
                            <th width="40px" style="text-align: center ;">NIM</th>
                            <th width="40px" style="text-align: center ;">id_dosen</th>
                            <th width="40px" style="text-align: center ;">Judul</th>
                        </tr>
                        <?php 
                        $no = 1;
                        foreach($bimbingan as $row){ 
                        ?>
                        <tr>
                            <td><?php echo $no++ ?> </td>
                            <td>
                                <?php echo anchor(''.$row-> id_dosen,'Terima');?>
                                <?php echo anchor(''.$row-> id_dosen,'Tolak');?>
                            </td>
                        <td><?php echo $row->id_usulan_pemb ?></td>
                        <td><?php echo $row->NIM ?></td>
                        <td><?php echo $row->id_dosen ?></td>
                        <td><?php echo $row->judul ?></td>
                        </tr>
                        <?php } ?>
                        </thead>
                        
                        </table> -->
                        </div>
                        </div>
                        </div>
                        </div>

 <br />                  
                      
                   
        </fieldset>
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

    
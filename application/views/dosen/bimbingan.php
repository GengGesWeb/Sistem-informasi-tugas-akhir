<div class="main">
  
  <div class="main-inner">

    <div class="container">
        
       <div class="row">
          
          <div class="span12">
        
            <div class="widget ">
              
              <div class="widget-header">
               
                <h3>Penentuan Mahasiswa Bimbingan</h3>
              </div> <!-- /widget-header -->
          
<div class="widget-content">
          <div class="info-box">
            <div class="row-fluid stats-box">
    <form action="<?php echo site_url('dosen/dosen/proses_terimatolak'); ?>" method="post">
      <fieldset>

                  <div class="form-group">                     
                    <label class="form-label" for="username">NIP</label>
                      <div class="form">
                        <input type="text" class="span6 disabled" id="username" value="<?php echo $this->session->userdata('username'); ?>" disabled>
                        <p class="help-block">Your NIP is for logging in and cannot be changed.</p>
                      </div> <!-- /form -->       
                  </div> <!-- /form-group -->

<br > 
					
						<table class="table table-striped table-bordered table-hover">
						<thead>
						<tr>
							
							<th name="action" style="text-align: center ;">Action</th>
							<th name="nama" style="text-align: center ;">Nama</th>
							<th name="NIM" style="text-align: center ;">NIM</th>
							<th nama="judul" style="text-align: center ;">Judul</th>
						</tr>
						<?php 
						$no = 1;
						foreach($bimbingan as $row){ 
						?>
						<tr>
							
							<td>
						<?php 
                        echo anchor('dosen/dosen/terima/'.$row->NIM,'Terima','id="btnTest" type="button" class="btn btn-bordered waves-effect w-md waves-light " '); ?>
                        <?php
                        echo anchor('dosen/dosen/tolak/'.$row->NIM.'/'.$row->judul,'Tolak','id="btnTest" type="button" class="btn btn-danger waves-effect w-md waves-light " '); ?>				
              
						</td>
						<td name="nama"><?php echo $row->Nama ?></td>
						<td name="NIM"><?php echo $row->NIM ?></td>
						<td name="judul"><?php echo $row->judul ?></td>
						</tr>
						<?php } ?>
						</thead>
						
						</table>
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

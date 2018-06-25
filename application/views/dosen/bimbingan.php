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
    <form action="<?php echo site_url('dosen/dosen/lihat_bimbingan'); ?>" method="post">
      <fieldset>

                  <div class="form-group">                     
                    <label class="form-label" for="username">NIP</label>
                      <div class="form">
                        <input type="text" class="span6 disabled" id="username" value="<?php echo $this->session->userdata('username'); ?>" disabled>
                        <p class="help-block">Your NIP is for logging in and cannot be changed.</p>
                      </div> <!-- /form -->       
                  </div> <!-- /form-group -->

<br > 
					<div class="row">
					<div class="col-lg-8">
					<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-striped table-bordered table-hover">
						<thead>
						<tr>
							
							<th width="40px" style="text-align: center ;">Action</th>
							<th width="40px" style="text-align: center ;">Nama</th>
							<th width="40px" style="text-align: center ;">NIM</th>
							<th width="40px" style="text-align: center ;">id_dosen</th>
							<th width="40px" style="text-align: center ;">Judul</th>
						</tr>
						<?php 
						$no = 1;
						foreach($bimbingan as $row){ 
						?>
						<tr>
							
							<td>
								<?php echo anchor(''.$row-> id_dosen,'Terima');?>
								<?php echo anchor(''.$row-> id_dosen,'Tolak');?>
							</td>
						<td><?php echo $row->Nama ?></td>
						<td><?php echo $row->NIM ?></td>
						<td><?php echo $row->id_dosen ?></td>
						<td><?php echo $row->judul ?></td>
						</tr>
						<?php } ?>
						</thead>
						
						</table>
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

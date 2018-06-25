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
					<div class="row">
					<div class="col-lg-8">
					<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-striped table-bordered table-hover">
						<thead>
						<tr>
							
							<th width="40px" name="action" style="text-align: center ;">Action</th>
							<th width="40px" name="nama" style="text-align: center ;">Nama</th>
							<th width="40px" name="NIM" style="text-align: center ;">NIM</th>
							<th width="40px" nama="id_dosen" style="text-align: center ;">id_dosen</th>
							<th width="40px" nama="judul" style="text-align: center ;">Judul</th>
						</tr>
						<?php 
						$no = 1;
						foreach($bimbingan as $row){ 
						?>
						<tr>
							
							<td>
								
                 <button class="btn" name="Terima" value="proses_terimatolak">Terima</button> 
                 <button class="btn" name="Tolak" value="proses_terimatolak">Tolak</button>
              
							</td>
						<td name="nama"><?php echo $row->Nama ?></td>
						<td name="NIM"><?php echo $row->NIM ?></td>
						<td name="id_dosen"><?php echo $row->id_dosen ?></td>
						<td name="judul"><?php echo $row->judul ?></td>
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

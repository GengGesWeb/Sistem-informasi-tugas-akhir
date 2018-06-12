<!DOCTYPE html>
<html lang="en">
  

<body>


<div class="main">
<div class="main-inner">
<div class="container">
<div class="row">
<div class="span12">      		
<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-list-alt"></i>
	      				<h3>Pendaftaran Ujian Proposal</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						  
						
										<fieldset>
											<div class="control-group">											
											<label class="control-label" for="">Upload file proposal Tugas Akhir (format : NIM_nama maks 1MB)</label>
											<div class="controls">


											<?php echo $error;?> 
  											<?php echo form_open_multipart('mahasiswa/mahasiswa/ujianproposal');?> 
										    <input type="file" name="file" size="1024" />
										    <input type="submit" name="filesubmit" value="upload"/> 
											</form>
  											

											</div> <!-- /controls -->				
										</div> <!-- /control-group --> 
										
					<form action="<?php echo site_url('mahasiswa/mahasiswa/ujianproposal'); ?>" method="post">		
										<div class="control-group">											
											<label class="control-label" for="NIM">NIM</label>
											<div class="controls">
												<input type="text" class="span4" id="NIM" name="NIM" value="<?php echo $this->session->userdata('NIM'); ?>" readonly>
												
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="nama">Nama</label>
											<div class="controls">
												<input type="text" class="span4" id="nama" name="nama" value="<?php echo $this->session->userdata('nama') ?>" placeholder="Nama" disabled>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="form-group">                     
				                       <label class="form-label" for="prodi">Program Studi</label>
				                          <div class="controls">
				                             <input type="text" class="span4" id="prodi" name="prodi" value="<?php echo $this->session->userdata('prodi') ?>" placeholder="prodi" disabled>
				                        </div> <!-- /form -->       
				                    </div> <!-- /form-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="golongan">Golongan</label>
											<div class="controls">
												<input type="text" class="span1" id="golongan" name="golongan" value="<?php echo $this->session->userdata('golongan'); ?>" placeholder="golongan" disabled>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
									
										
										<div class="control-group">											
											<label class="control-label" for="judul">Judul Proposal</label>
											<div class="controls">
												<input type="text" class="span6" id="judul" name="judul" value="" placeholder="Judul Proposal" required>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										
										
										
										<div class="form-group">                     
                       					 <label class="form-label">Dosen Pembimbing</label>
                          				  <div class="form">
                             				<select class="dropdown span3" name="dospem" required>
                                 				<option value"pilih">Pilih Dosen Pembimbing</option>
                                  				<?php foreach ($data_dosen as $row) { ?>
                                  				<option value="<?php echo $row['id_user']; ?>"> <?php echo $row['nama']; ?></option>';
                             	  			<?php } ?>
                                   			</select>
                                  		  </div>
                                  		</div>
                                          
                            
                         
										<br>


										
           
            
									
										 <br />
										
											
										<div class="form-actions">
											<button type="submit" name="submit_proposal" class="btn btn-primary" value="daftar">Kirim</button> 
											<button class="btn">Cancel</button>
										</div> <!-- /form-actions -->
						</form>				
									</fieldset>
																
									</fieldset>
									
								</div>
								
							</div>
						  
						  
						</div>
						
						
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->

    
</div> <!-- /main -->



  </body>

</html>

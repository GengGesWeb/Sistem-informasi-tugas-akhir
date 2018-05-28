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
	      				<i class="icon-user"></i>
	      				<h3>Pendaftaran Ujian Proposal</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						  
						
										<fieldset>
										
										<div class="control-group">											
											<label class="control-label" for="username">NIM</label>
											<div class="controls">
												<input type="text" class="span6 disabled" id="NIM" value="<?php echo $this->session->userdata('username'); ?>" disabled>
												
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="firstname">Nama</label>
											<div class="controls">
												<input type="text" class="span6" id="Nama" value="" placeholder="Nama">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="form-group">                     
				                       <label class="form-label">Program Studi</label>
				                          <div class="form">
				                             <select class="dropdown">
				                                 <option value"pilih">Program Studi</option>
				                                  <option value"1">Manjemen Informatika (MIF)</option>
				                                   <option value"2">Teknik Komputer (TKK)</option>  
				                                   <option value"3">Teknik Informatika (TIF)</option>      
				                            </select>
				                        </div> <!-- /form -->       
				                    </div> <!-- /form-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="email">Golongan</label>
											<div class="controls">
												<input type="text" class="span6" id="Nama" value="" placeholder="Golongan">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
									
										
										<div class="control-group">											
											<label class="control-label" for="password1">Judul Proposal</label>
											<div class="controls">
												<input type="text" class="span6" id="Nama" value="" placeholder="Judul Proposal">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="form-group">                     
                       <label class="form-label">Dosen Pembimbing</label>
                          <div class="form">
                             <select class="dropdown">
                                 <option value"pilih">Pilih Dosen Pembimbing</option>
                                  <option value"1">Wahyu Kurnia Dewanto S.Kom, M.Kom</option>
                                   <option value"2">Betty Etikasari S.Pd, M.Pd</option>        
                            </select>
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->

										<br>


										<div class="control-group">											
											<label class="control-label" for="password1">Upload file proposal Tugas Akhir</label>
											<div class="controls">


												<?php echo $error;?> 
  <?php echo form_open_multipart('image-upload/post');?> 
     <input type="file" name="image" size="20" />
     <input type="submit" value="upload" /> 
  </form> 

											</div> <!-- /controls -->				
										</div> <!-- /control-group --> 
           
            
									
										 <br />
										
											
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Kirim</button> 
											<button class="btn">Cancel</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								
										</fieldset>
									</form>
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
 

<script src="js/jquery-1.7.2.min.js"></script>
	
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>


  </body>

</html>

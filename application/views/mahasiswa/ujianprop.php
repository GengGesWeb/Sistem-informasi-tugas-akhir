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
										
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Program Studi</label>
											<div class="controls">
												<input type="text" class="span6" id="Nama" value="" placeholder="Program Studi">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
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
										
										
										<div class="control-group">											
											<label class="control-label" for="password2">Dosen Pembimbing</label>
											 <div class="control-group">											
											
                                              <div class="btn-group">
                                              <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> Dosen Pembimbing</a>
                                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                              <ul class="dropdown-menu">
                                                <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                                <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                                <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="i"></i> Make admin</a></li>
                                              </ul>
                                            </div>
                                              </div>	<!-- /controls -->			
										</div> <!-- /control-group -->

										<br>


										<div class="control-group">											
											<label class="control-label" for="password1">Upload file proposal Tugas Akhir</label>
											<div class="controls">


												<?php
												echo form_open_multipart('mahasiswa/mahasiswa/upload');
												 ?>
												 <input type="file" name="file">
												 <button type="submit"> Upload File</button>
												 <?php form_close(); ?>

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
    
    
    
 
<div class="extra">

	<div class="extra-inner">

		<div class="container">

			<div class="row">
                    <div class="span3">
                        <h4>
                            About Free Admin Template</h4>
                        <ul>
                            <li><a href="javascript:;">EGrappler.com</a></li>
                            <li><a href="javascript:;">Web Development Resources</a></li>
                            <li><a href="javascript:;">Responsive HTML5 Portfolio Templates</a></li>
                            <li><a href="javascript:;">Free Resources and Scripts</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Support</h4>
                        <ul>
                            <li><a href="javascript:;">Frequently Asked Questions</a></li>
                            <li><a href="javascript:;">Ask a Question</a></li>
                            <li><a href="javascript:;">Video Tutorial</a></li>
                            <li><a href="javascript:;">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Something Legal</h4>
                        <ul>
                            <li><a href="javascript:;">Read License</a></li>
                            <li><a href="javascript:;">Terms of Use</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Open Source jQuery Plugins</h4>
                        <ul>
                            <li><a href="http://www.egrappler.com">Open Source jQuery Plugins</a></li>
                            <li><a href="http://www.egrappler.com;">HTML5 Responsive Tempaltes</a></li>
                            <li><a href="http://www.egrappler.com;">Free Contact Form Plugin</a></li>
                            <li><a href="http://www.egrappler.com;">Flat UI PSD</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                </div> <!-- /row -->

		</div> <!-- /container -->

	</div> <!-- /extra-inner -->

</div> <!-- /extra -->


    
    
<div class="footer">
	
	<div class="footer-inner">
		
		<div class="container">
			
			<div class="row">
				
    			<div class="span12">
    				&copy; 2013 <a href="http://www.egrappler.com/">Bootstrap Responsive Admin Template</a>.
    			</div> <!-- /span12 -->
    			
    		</div> <!-- /row -->
    		
		</div> <!-- /container -->
		
	</div> <!-- /footer-inner -->
	
</div> <!-- /footer -->
    


<script src="js/jquery-1.7.2.min.js"></script>
	
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>


  </body>

</html>

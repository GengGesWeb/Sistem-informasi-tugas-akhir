

<div class="main">
  
  <div class="main-inner">

      <div class="container">
        
       <div class="row">
          
          <div class="span12">
        
          <div class="info-box">

            <div class="row-fluid stats-box">
    <form>
      <fieldset>

                  <div class="form-group">                     
                    <label class="form-label" for="username">Username</label>
                      <div class="form">
                        <input type="text" class="span6 disabled" id="username" value="<?php echo $this->session->userdata('username'); ?>" disabled>
                        <p class="help-block">Your username is for logging in and cannot be changed.</p>
                      </div> <!-- /form -->       
                  </div> <!-- /form-group -->

 <br > 

                    <div class="form-group">                     
                      <label class="form-label" for="judul_usulan">Judul Usulan</label>
                        <div class="form">
                          <input type="text" class="span6" id="judul_usulan">
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->

 <br > 

                    <div class="form-group">                     
                      <label class="form-label">Program Studi</label>
                         <div class="form">
                                            <label class="checkbox inline">
                                              <input type="checkbox"> Manajemen Informatika
                                            </label>

                                            <label class="checkbox inline">
                                              <input type="checkbox"> Teknik Komputer
                                            </label>
                                            
                                            <label class="checkbox inline">
                                              <input type="checkbox"> Teknologi Informatika
                                            </label>
                         </div> <!-- /form -->       
                    </div> <!-- /form-group -->

 <br > 

                    <div class="form-group">                     
                       <label class="form-label">Kuota Mahasiswa</label>
                          <div class="form">
                             <div class="dropdown">
                           <a class="btn btn-primary" href="#">Pilih</a>
                                           <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                            </ul>
                            </div> 
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->


 <br />                  
                      
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Save</button> 
                      <button class="btn">Cancel</button>
                    </div> <!-- /form-actions -->
        </fieldset>
     </form>
  </div>
</div>
</div>
</div>
</div>
</div>

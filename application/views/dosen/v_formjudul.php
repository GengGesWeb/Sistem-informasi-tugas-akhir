<div class="main">
  
  <div class="main-inner">

    <div class="container">
        
       <div class="row">
          
          <div class="span12">
        
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Input Judul Usulan</h3>
              </div> <!-- /widget-header -->
          
<div class="widget-content">
          <div class="info-box">
            <div class="row-fluid stats-box">
    <form action="<?php echo site_url('dosen/dosen/proses_inputjudul'); ?>" method="post">
      <fieldset>


                    <div class="form-group">                     
                      <label class="form-label" for="namadosen">Nama Dosen</label>
                        <div class="form">
                          <input type="text" class="span6" id="namadosen"  value="<?php echo $this->session->userdata('nama') ?>" placeholder="Nama Dosen" disabled>
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->
 <br > 
                  <div class="form-group">                     
                    <label class="form-label" for="username">NIP</label>
                      <div class="form">
                        <input type="text" class="span6 disabled" id="username" name="username" value="<?php echo $this->session->userdata('NIP'); ?>">
                        <p class="help-block">NIP Tidak Bisa Diubah</p>
                      </div> <!-- /form -->       
                  </div> <!-- /form-group -->

 <br > 

                    <div class="form-group">                     
                      <label class="form-label" for="judul_dosen">Judul Usulan</label>
                        <div class="form">
                          <input type="text" class="span6" id="judul_dosen" name="judul_dosen"  value="" placeholder="Judul Usulan">
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->

 <br > 

                    <div class="form-group">                     
                      <label class="form-label" for="prodi">Program Studi</label>
                         <div class="form" id="prodi" name="prodi">
                                            <label class="checkbox inline">
                                              <input type="checkbox" id="prodi" name="prodi" value="Manajemen Informatika"> Manajemen Informatika
                                            </label>

                                            <label class="checkbox inline">
                                              <input type="checkbox" id="prodi" name="prodi" value="Teknik Komputer"> Teknik Komputer
                                            </label>
                                            
                                            <label class="checkbox inline">
                                              <input type="checkbox" id="prodi" name="prodi" value="Teknik Informatika"> Teknik Informatika
                                            </label>
                         </div> <!-- /form -->       
                    </div> <!-- /form-group -->

 <br > 

                    <div class="form-group">                     
                      <label for="kuota">Kuota Mahasiswa</label>
                          <div class="form">
                             <select class="dropdown" id="kuota" name="kuota">
                           <!--<a class="btn btn-primary" href="#">Pilih</a>
                           <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>-->
                                 <option value"pilih">Pilih Jumlah Kuota</option>
                                  <option value"1">1</option>
                                   <option value"2">2</option>
                                    <option value"3">3</option>
                                     <option value"4">4</option>          
                            </select>
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->


 <br />                  
                  <div class="form-actions">
                 <button type="submit" class="btn btn-primary" name="submit" value="proses_inputjudul">Save</button> 
                 <button class="btn btn-danger">Cancel</a></button>
              </div> <!-- /form-actions -->
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

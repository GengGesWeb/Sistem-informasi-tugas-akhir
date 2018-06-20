<div class="main">
  
  <div class="main-inner">

    <div class="container">
        
       <div class="row">
          
          <div class="span12">
        
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Form Usulan Judul Tugas Akhir</h3>
              </div> <!-- /widget-header -->
          
<div class="widget-content">
          <div class="info-box">
            <div class="row-fluid stats-box">
    <form action="<?php echo site_url('mahasiswa/mahasiswa/proses_inputjudulmhs'); ?>" method="post">
      <fieldset>

<p class="help-block">* Wajib</p>

 <div class="form-group">                     
                    <label class="form-label" for="NIM">NIM *</label>
                      <div class="form">
                        <input type="text" class="span6 disabled" id="NIM" name="NIM" value="<?php echo $this->session->userdata('NIM'); ?>" placeholder="NIM" disabled>
                      </div> <!-- /form -->       
                  </div> <!-- /form-group -->

 <br > 

                    <div class="form-group">                     
                      <label class="form-label" for="namamahasiswa">Nama Mahasiswa *</label>
                        <div class="form">
                          <input type="text" class="span6 disabled" id="namamahasiswa"  value="<?php echo $this->session->userdata('nama') ?>" placeholder="Nama Mahasiswa" disabled>
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->
 <br > 
                 

 <div class="form-group">                     
                      <label class="form-label" for="usulan_pembimbing1">Usulan Pembimbing 1 *</label>
                        <div class="form">
                          <select class="dropdown span3" name="usulan_pembimbing1" required>
                                        <option value"pilih">Pilih</option>
                                          <?php foreach ($data_dosen as $row) { ?>
                                          <option value="<?php echo $row['id_user']; ?>"> <?php echo $row['nama']; ?></option>';
                                      <?php } ?>
                                        </select>
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->
 <br > 



                    <div class="form-group">                     
                      <label class="form-label" for="judul">Judul *</label>
                        <div class="form">
                          <input type="text" class="span6" id="judul" name="judul" >
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->

 <br > 

 <div class="form-group">                     
                      <label class="form-label" for="dosen_pengusul">Dosen Pengusul Judul/Topik</label>
                        <div class="form">
                          <select class="dropdown span3" name="dosen_pengusul" required>
                                        <option value"pilih">Pilih</option>
                                          <?php foreach ($data_dosen as $row) { ?>
                                          <option value="<?php echo $row['id_user']; ?>"> <?php echo $row['nama']; ?></option>';
                                      <?php } ?>
                                        </select>
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->
 <br > 

                    <div class="form-group">                     
                      <label class="form-label" for="ringkasan">Ringkasan *</label>

                      <?php
                      echo form_textarea('Ringkasan');
                      ?>

                      <!--  <div class="form">
                          <input type="text" class="span6" id="ringkasan" name="ringkasan" >
                        </div>   -->      

                    </div> <!-- /form-group -->

 <br > 


                    <div class="form-group">                     
                      <label class="form-label" for="kategori">Individual/Kelompok *</label>
                         <div class="form" id="kategori" name="kategori">
                                            <label class="checkbox inline">
                                              <input type="checkbox" id="individual" name="individual" value="Individual"> Individual
                                            </label>

                                            <label class="checkbox inline">
                                              <input type="checkbox" id="kelompok" name="kelompok" value="Kelompok">Kelompok
                                            </label>
                                          
                         </div> <!-- /form -->       
                    </div> <!-- /form-group -->

 <br > 

                    
                  <div class="form-actions">
                 <button type="submit" class="btn btn-primary" name="submit" value="proses_inputjudulmhs">Save</button> 
                 <button class="btn"><a href='<?php echo site_url('mahasiswa/mahasiswa/index') ?>'>Cancel</a></button>
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

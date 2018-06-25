<div class="main">
  
  <div class="main-inner">

    <div class="container">
        
       <div class="row">
          
          <div class="span12">
        
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Form Usulan Judul Final</h3>
              </div> <!-- /widget-header -->
          
<div class="widget-content">
          <div class="info-box">
            <div class="row-fluid stats-box">
    <form action="<?php echo site_url('mahasiswa/mahasiswa/proses_inputjudulfinal'); ?>" method="post">  

    <!-- inputan tidak terlihat -->
    <input type="hidden" id="NIM" name="NIM" value="<?php echo $this->session->userdata('NIM'); ?>">
    <input type="hidden" id="namamahasiswa"  name="nama_mhs" value="<?php echo $this->session->userdata('nama') ?>">

      <fieldset>

<p class="help-block">* Wajib</p>

 <div class="form-group">                     
                    <label class="form-label" for="NIM">NIM *</label>
                      <div class="form">
                        <input type="text" id="NIM" value="<?php echo $this->session->userdata('NIM'); ?>" placeholder="NIM" disabled>
                      </div> <!-- /form -->       
                  </div> <!-- /form-group -->

 <br > 

                    <div class="form-group">                     
                      <label class="form-label" for="namamahasiswa">Nama Mahasiswa *</label>
                        <div class="form">
                            <!-- inputan dengan atribut disabled tidak bisa mengirim data -->
                          <input type="text" id="namamahasiswa" value="<?php echo $this->session->userdata('nama') ?>" placeholder="Nama Mahasiswa" disabled>
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->
 <br > 
                 

 <div class="form-group">                     
                      <label class="form-label" for="dosen_pembimbing">Dosen Pembimbing *</label>
                        <div class="form">
                          <select class="dropdown span3" name="dosen_pembimbing" required="required">
                                        <option value="-">Pilih</option>
                                          <?php foreach ($data_dosen as $row) { ?>
                                          <option value="<?php echo $row['id_user']; ?>"> <?php echo $row['nama']; ?></option>';
                                      <?php 
                                    } ?>
                                        </select>
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->
 <br > 


                    <div class="form-group">                     
                      <label class="form-label" for="judul">Judul *</label>
                        <div class="form">
                          <input type="text" required="required" class="span6" id="judul" name="judul" >
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->

 <br > 

 

                    <div class="form-group">                     
                      <label class="form-label" for="ringkasan">Ringkasan *</label>
                      <textarea name="ringkasan" required="required"></textarea>
                     

                      <!--  <div class="form">
                          <input type="text" class="span6" id="ringkasan" name="ringkasan" >
                        </div>   -->      

                    </div> <!-- /form-group -->

 <br > 

                    <div class="form-group">                     
                      <label class="form-label" for="kategori">Kategori *</label>
                       
                      
                        <!-- iki disamakan karo type data enum e itu lho -->
                        <input type="radio"  name="kategori1" value="individu"/> &nbsp; Individu &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio"  name="kategori1" value="kelompok">&nbsp;Kelompok
                        
                    </div> <!-- /form-group -->

 <br > 


  <div class="form-group">                     
                      <label class="form-label" for="saran">Saran *</label>
                      <textarea name="saran" required="required"></textarea>
                     

                      <!--  <div class="form">
                          <input type="text" class="span6" id="ringkasan" name="ringkasan" >
                        </div>   -->      

                    </div> <!-- /form-group -->

 <br > 
                    
                  <div class="form-actions">
                 <button type="submit" class="btn btn-primary" name="submit" value="inputjudulfinal">Save</button> 
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

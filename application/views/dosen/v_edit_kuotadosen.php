<div class="main">
  
  <div class="main-inner">

    <div class="container">
        
       <div class="row">
          
          <div class="span12">
        
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Kuota Dosen</h3>
              </div> <!-- /widget-header -->
          
<div class="widget-content">
          <div class="info-box">
            <div class="row-fluid stats-box">
    <form action="<?php echo base_url('dosen/dosen/edit_kuotadosen')?>" method="post">
      <fieldset>


                     <div class="form-group">                     
                      <label class="form-label" for="judul_dosen">Nama Dosen</label>
                        <div class="form">
                          <input type="text" disabled class="span6" id="jumlah_kuota" name="jumlah_kuota"  value="<?= $edit_data[0]['nama']?>" >
                        </div> <!-- /form -->       
                    </div>
					<input type="hidden" name="idya" value="<?= $edit_data[0]['id_dosen']?>">
                 <br /> 

                    <div class="form-group">                     
                      <label class="form-label" for="judul_dosen">Jumlah Kuota</label>
                        <div class="form">
                          <input type="number" class="span6" id="jumlah_kuota" name="jumlah_kuota" max="9" min="1" value="<?=$edit_data[0]['kuota_bimbingan'] ?>">
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->

 <br > 


                  <div class="form-actions">
                 <button type="submit" class="btn btn-primary" name="submit" value="proses_inputjudul">Save</button> 
                 <button class="btn"><a href='<?php echo site_url('dosen/dosen/index') ?>'>Cancel</a></button>
              </div> <!-- /form-actions -->
        </fieldset>
     </form>
	 


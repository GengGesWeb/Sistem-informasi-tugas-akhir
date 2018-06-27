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
    <form action="<?php echo base_url('dosen/dosen/ksp_review')?>" method="post">
      <fieldset>


                     <div class="form-group">                     
                      <label for="nama">Status</label>
                          <div class="form">
                             <select class="dropdown" id="status" name="status">
                           <!--<a class="btn btn-primary" href="#">Pilih</a>
                           <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>-->
								<option value="Terima">Terima</option>
								<option value="Ditolak">Ditolak</option>
                            </select>
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->
                 <br /> 
					<input type="hidden" name="id" value="<?= $id_judul_usulan?>">
					<input type="hidden" name="nim" value="<?= $nim?>">
                    <div class="form-group">                     
                      <label class="form-label" for="judul_dosen">Jumlah Kuota</label>
                        <div class="form">
                          <textarea class="span6" id="jumlah_kuota" name="saran" placeholder="Saran"></textarea>
                        </div> <!-- /form -->       
                    </div> <!-- /form-group -->

 <br > 


                  <div class="form-actions">
                 <button type="submit" class="btn btn-primary" name="submit" value="save">Save</button> 
                 <button class="btn"><a href='<?php echo site_url('dosen/dosen/index') ?>'>Cancel</a></button>
              </div> <!-- /form-actions -->
        </fieldset>
     </form>
	 


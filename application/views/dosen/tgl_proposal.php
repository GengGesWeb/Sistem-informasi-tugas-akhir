<div class="main">
  
  <div class="main-inner">

    <div class="container">
        
       <div class="row">
          
          <div class="span4">
            <div class="widget">

                    <div class="widget-header">
                        <i class="icon-time"></i>
                        <h3>Ubah jadwal input</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                      <?php echo form_open('dosen/dosen/save_tglInput','class="form-horizontal" role="form"');?>
                      <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Tanggal Awal </label>
                            <div class="col-md-10">
                                <input type="date" name="tanggal_awal" class="form-control" id="exampleInputEmail1" required>
                            </div>
                         </div>
                        <div class="form-group">
                             <label class="col-md-2 control-label" for="exampleInputEmail1">Tanggal Akhir </label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_akhir" class="form-control" id="exampleInputEmail1" required>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Keterangan</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="ket">
                                        <option value="usulan">Input Usulan Judul</option>
                                        <option value="final">Input Judul Final</option>
                                        <option value="Proposal">Input Proposal</option>
                                    </select>
                            <br>
                            <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md" onClick="return confirm('Anda Yakin ?')">Submit</button>
                                </div>
                        </div>
                    </div>  


            </div>
          </div>           
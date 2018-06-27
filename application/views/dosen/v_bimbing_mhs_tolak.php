<div class="main">
  
  <div class="main-inner">

    <div class="container">
        
       <div class="row">
          
          <div class="span12">
        
            <div class="widget ">
          
          <div class="alert alert-info">Ditemukan data dalam jumlah <strong><?php echo $num_rows ?></strong></div>    
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Penentuan Dosen Pembimbing</h3>
              </div> <!-- /widget-header -->


<div class="widget-content">
    <div class="card">
     <?php echo form_open('dosen/dosen/mhs_ditolak_diterima','class="form-horizontal" role="form"'); ?>
            <table class="table table-bordered">
                <tr>
                  <th>ID</th>
                  <th>NIM</th>
                  <th>Judul</th>
                  <th>Dosen Pembimbing</th>
                  <th>Action</th>
                </tr>
                <div class="form-group">
                <?php foreach ($result as $r) {
                    echo '<tr>';
                    echo '<td>'.$r['id_mhs_ditolak'].'</td>';
                    echo '<td>'.$r['NIM'].'</td>';
                    $nim = $r['NIM'];
                    echo '<td>'.$r['judul'].'</td>';
                     ?>
                <input type="hidden" name="nim" class="form-control" id="nim" value="<?php echo $nim; ?>">
                </div>     
                     <td>
                     <div class="form-group">   
                     <select class="dropdown span3" id="id_dosen" name="id_dosen" required>
                                        <option value"pilih">Pilih</option>
                                          <?php foreach ($result2 as $row) { ?>
                                          <option id="id_dosen" name="id_dosen" value="<?php echo $row['id_dosen']; ?>"> <?php echo $row['nama']; ?> </option>';
                                      <?php } ?>
                                        </select>
                      </div>                  
                       </td> 
                      <td>
                     <button type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md" onClick="return confirm('Anda Yakin ?')">Submit</button> </td>
                     <?php } ?>
            
            </table>
     
                                   
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
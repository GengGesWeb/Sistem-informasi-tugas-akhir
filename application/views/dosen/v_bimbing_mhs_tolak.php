<?php
/**
 * View untuk menampilkan daftar/list data (Read)
 * beserta dengan form yang memungkinkan pencarian data spesifik dengan kata kunci
 * 
 */
?>
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
        <form method="get" action="<?php echo site_url('/dosen/dosen/koordinator/') ?>" class="form-inline">
    
            <table class="table table-bordered">
                <tr>
                  <th>ID</th>
                  <th>NIM</th>
                  <th>Judul</th>
                  <th>Dosen Pembimbing</th>
                  <th>Action</th>
                </tr>

                <?php foreach ($result as $r) {
                    echo '<tr>';
                    echo '<td>'.$r['id_mhs_ditolak'].'</td>';
                    echo '<td>'.$r['NIM'].'</td>';
                    echo '<td>'.$r['judul'].'</td>';
                     ?>
                     <td>
                        <form action="<?php echo site_url('dosen/dosen/proses_inputpemfix'); ?>" method="post">
                     <select class="dropdown span3" name="usulan_pembimbing1" required>
                                        <option value"pilih">Pilih</option>
                                          <?php foreach ($result2 as $row) { ?>
                                          <option id="id_dosen" name="id_dosen" value="<?php echo $row['id_dosen']; ?>"> <?php echo $row['nama']; ?></option>';
                                      <?php } ?>
                                        </select>
                       </td> 
                     <?php

                        echo '<td><button type="submit" class="btn btn-primary" id="submit" name="submit" value="proses_inputpemfix">Submit</button></td>';
                    echo '</tr>';
                }
                ?>
            </form>
            </table>
     
                                   
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

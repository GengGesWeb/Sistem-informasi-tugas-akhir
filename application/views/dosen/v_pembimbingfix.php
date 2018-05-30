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
        

    <div class="card">
        <div class="card-body">
            <form method="get" action="<?php echo site_url('/dosen/dosen/pembimbingfix') ?>" class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Kata Kunci Pencarian">
                  </div>  
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>

    <div class="alert alert-info">Ditemukan data dalam jumlah <strong><?php echo $num_rows ?></strong></div>
    <table class="table table-bordered">
       
        <tr>
            <th>NIM</th>
            <th>Judul Tugas Akhir</th>
            <th>NIP</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th style="width: 1%;"> </th><th style="width: 1%;"> </th>
        </tr>
        <?php foreach ($result as $r) {
            echo '<tr>';
            echo '<td>'.$r['NIM'].'</td><td>'.$r['judul'].'</td><td>'.$r['id_dosen'].'</td><td>'.$r['deskripsi'].'</td><td>'.$r['kategori'].'</td>';
            echo '<td><a href="'.site_url('/dosen/dosen/form_terima/'.$r['NIM']).'" class="btn btn-primary">Terima</a></td>';
            echo '<td><a href="'.site_url('/dosen/dosen/form_tolak/'.$r['NIM']).'" class="btn btn-danger">Tolak</a></td>';
            echo '</tr>';
        }
        ?>
    </table>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
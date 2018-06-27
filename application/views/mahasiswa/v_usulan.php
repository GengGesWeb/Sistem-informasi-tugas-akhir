<?php
/**
 * View untuk menampilkan daftar/list data (Read)
 * beserta dengan form yang memungkinkan pencarian data spesifik dengan kata kunci
 * 
 */
?>
<?php
        //menampilkan error menggunakan alert javascript
        if(isset($error)){
        echo '<script>
        alert("'.$error.'");
        </script>';
        }
        ?>
<div class="main">
  
  <div class="main-inner">

    <div class="container">
        
       <div class="row">
          
          <div class="span12">
            <div class="widget">

                    <div class="widget-header">
                        <h3>LIST USULAN JUDUL ANDA</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                    <div class="tabbable">
                    <ul class="nav nav-tabs">
                    <table class="table table-striped table-bordered ">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Ringkasan</th>
            <th>Kategori</th>
            <th>Action</th>
        </tr>
       <?php 
                        $no = 1;
                        foreach($usulan as $row){ 
                        ?>
                        <tr>
                        <td><?php echo $no++ ?> </td>
                        <td><?php echo $row->judul ?></td>
                        <td><?php echo $row->ringkasan ?></td>
                        <td><?php echo $row->kategori ?></td>
                        <td>
                        <?php echo anchor('mahasiswa/mahasiswa/edit_usulan/'.$row->id_judul_usulan,'<button type="button" value="submit" class="btn btn-lg">Edit</button>'); ?>
                        <?php } ?>
    </table>
                        

 <br />                  
                      
                   
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

    


    <div class="container">
        
       <div class="row">
          
          <div class="span7">
            <div class="widget">

                    <div class="widget-header">
                        <i class="icon-time"></i>
                        <h3>Jadwal</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                      
                      <div class="card-box table-responsive">
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row row-centered">
                    
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 55px;">Tanggal Awal
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 55px;">Tanggal Akhir
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 67px;">Keterangan
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 20px;">Opsi
                    </th>
      
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        $no =1;
                        foreach($list as $data){ 
                        $data->id ?>
                        
                        <td><?php echo $data->tgl_awal ?></td>
                        <td><?php echo $data->tgl_akhir ?></td>
                        <td><?php 
                        if($data->keterangan=='Proposal'){
                            echo "Input Proposal";
                        }
                        else if($data->keterangan=='usulan'){
                            echo "Input Judul Usulan";
                        }
                        else{
                            echo "Input Judul Tugas Akhir Final";
                        } ?></td>
                        <td><?php 
                        echo anchor('dosen/dosen/delJadwal/'.$data->id,'Hapus','id="btnTest" type="button" class="btn btn-danger btn-bordered waves-effect w-md waves-light"'); ?></td>
                    </tr>
                        <?php $no++; }?>
            </tbody>
        </table>
    </div>
</div>
</div>


                    </div>  


            </div>
          </div>
        </div>
      </div> 
      </div>
      </div>  
      </div>
      </div>            
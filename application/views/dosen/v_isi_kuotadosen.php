<table class="table table-sm">
			  <thead>
				<tr>
				  <th scope="col">No</th>
				  <th scope="col">NIP</th>
				  <th scope="col">Nama</th>
				  <th scope="col">Kuota Bimbingan</th>
				  <th scope="col">Setting</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php
			  $no=1;
			  foreach ($list_data as $data1){
				echo"<tr>
				  <td>$no</td>
				  <td>$data1->id_dosen</td>
				  <td>$data1->nama</td>
				  <td>$data1->kuota_bimbingan</td>
				  <td><a href='kuotadosen/?id=$data1->id_dosen&r=1'>Edit</a> | <a href='kuotadosen/?id=$data1->id_dosen&r=0'>Hapus</a></td>
				</tr>";
				$no++;
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
</div>
</div>
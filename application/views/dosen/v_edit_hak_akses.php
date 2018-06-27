
          <?php foreach($user as $u){ ?>
    <form action="<?php echo base_url(). 'dosen/dosen/update_hak_akses'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>NIP</td>
                <td>
                    <input type="hidden" name="id_dosen" value="<?php echo $u->id_dosen ?>">
                    <input type="text" name="id_user" value="<?php echo $u->id_user ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
               
            </tr>
            <tr>
                <td>Status</td>
                <td><select name="hak_akses">
        <option value=""></option>
        <option value="koordinator">Koordinator</option>
        <option value="reviewer">Reviewer</option>
        <option value="default">Default</option>
        </select></td>
            </tr>
            <tr>
                <td>Kuota Bimbingan</td>
                <td><select name="kuota_bimbingan">
                    <option value="<?php echo $u->kuota_bimbingan ?>"><?php echo $u->kuota_bimbingan ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>

                </select></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form> 
    <?php } ?>
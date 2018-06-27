
          <?php foreach($user as $u){ ?>
    <form action="<?php echo base_url(). 'dosen/dosen/proses_review'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" name="NIM" value="<?php echo $u->NIM; ?>" disabled >
                    <input type="hidden" name='id_dosen' value="<?php echo $this->session->userdata('NIP'); ?>">
                    <input type="hidden" name='id_judul_usulan' value="<?php echo $u->id_judul_usulan; ?>" >
                </td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" value="<?php echo $u->judul ?>" disabled></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori" value="<?php echo $u->kategori ?>" disabled></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><select name="status" required="D">
        <option value=""></option>
        <option value="Diterima">Diterima</option>
        <option value="Ditolak">Ditolak</option>
        </select></td>
            </tr>
            <tr>
                <td>Saran</td>
                <td>
                    <input type="textarea" name="saran">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form> 
    <?php } ?>
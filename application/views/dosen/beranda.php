<html>
  <head>
    <title>Halaman Dosen</title>
  </head>
  <body>
      <center>
        <h1>Silahkan replace file ini jika sudah punya desain</h1><br />
        <h2>SELAMAT DATANG ANDA TELAH BERHASIL LOGIN SEBAGAI Dosen</h2>
        <h3> Username Anda Adalah <?php echo $this->session->userdata('username'); ?></h3><br /><br />
        <a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
    </form>
  </body>
</html>
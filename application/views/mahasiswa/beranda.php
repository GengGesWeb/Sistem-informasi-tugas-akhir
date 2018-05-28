
<div class="main">
  
  <div class="main-inner">

      <div class="container">
        
       <div class="row">
          
          <div class="span12">
        
          <div class="info-box">

            <div class="row-fluid stats-box">
      <center>
        <h1>Silahkan replace file ini jika sudah punya desain</h1><br />
        <h2>SELAMAT DATANG ANDA TELAH BERHASIL LOGIN SEBAGAI Mahasiswa</h2>
        <h3> Username Anda Adalah <?php echo $this->session->userdata('username'); ?></h3><br /><br />
        <a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
            </div>
         </div>
         </div>
        </div>
      </div>
  </div>
</div>    
    </form>
  </body>
</html>
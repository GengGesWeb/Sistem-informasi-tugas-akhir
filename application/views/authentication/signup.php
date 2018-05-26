<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Signup - Bootstrap Admin Template</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" >
<link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css')?>" rel="stylesheet" type="text/css" >

<link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" type="text/css"/>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/pages/signin.css')?>" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand">
				<img src="<?php echo base_url('assets/img/logo2.png')?>" width='400' />
								
			</a>	
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="">						
						<a href="<?php echo site_url('authentication/auth/login') ?>" class="">
							Sudah Punya Akun? Masuk Sekarang
						</a>
						
					</li>
					<li class="">						
						<a href="index.html" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container register">
	
	<div class="content clearfix">
		
		<form action="<?php echo site_url('authentication/auth/proses_signup'); ?>" method="post">
		
			<h1>Pendaftaran khusus mahasiswa</h1>			
			
			<div class="login-fields">
				
				<p>Isi dengan data yang benar</p>
				
				<div class="field">
					<label for="NIM">NIM:</label>
					<input type="text" id="NIM" name="NIM" value="" placeholder="NIM" class="login" required />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="Nama">Nama:</label>	
					<input type="text" id="Nama" name="Nama" value="" placeholder="Nama" class="login" required />
				</div> <!-- /field -->

				<div class="select">
					<label for="prodi">Program Studi:</label>
					<select name="prodi">
						<option value="MIF" selected="selected">MIF</option>
						<option value="TKK">TKK</option>
						<option value="TIF">TIF</option>
					</select>
				</div>
				
				
				<div class="field">
					<label for="golongan">Golongan:</label>
					<input type="text" id="golongan" name="golongan" value="" placeholder="golongan" class="login" required />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login" required/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="confirm_password">Ulangi password:</label>
					<input type="password" id="confirm_password" name="confirm_password" value="" placeholder="Confirm Password" class="login" required />
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				
				<button class="button btn btn-primary btn-large" type="submit" name="submit" value="proses_signup">Daftar</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Sudah punya akun? <a href='<?php echo site_url('authentication/auth/login') ?>'>Masuk ke akun anda</a>
</div> <!-- /login-extra -->


<script src="<?php echo base_url('assets/js/jquery-1.7.2.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>

<script src="<?php echo base_url('assets/js/signin.js')?>"></script>
<script src="<?php echo base_url('assets/js/passwordvalidation.js')?>"></script>
</body>

 </html>

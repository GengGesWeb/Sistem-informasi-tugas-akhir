<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Sistem informasi tugas akhir</title>

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
						<a href="signup.html" class="">
							Don't have an account?
						</a>
						
					</li>
					
					<li class="">						
						<a href="index.html" class="">
							Back to Homepage
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		<form method="post" action="<?php echo base_url('authentication/auth/login'); ?>" role="login">
		<?php
      	//menampilkan error menggunakan alert javascript
        if(isset($error)){
        echo '<script>
        alert("'.$error.'");
        </script>';
        }
      	?>
		
			<h1>Login</h1>		
			
			<div class="login-fields">
				
				<p>Masukkan Username dan password anda</p>
				
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" placeholder="Username" class="login username-field" required/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" placeholder="Password" class="login password-field" required/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>
									
				<button class="button btn btn-success btn-large" name="submit" type="submit" value="login">Sign In</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->



<div class="login-extra">
	<a href="#">Reset Password</a>
</div> <!-- /login-extra -->


<script src="<?php echo base_url('assets/js/jquery-1.7.2.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>

<script src="<?php echo base_url('assets/js/signin.js')?>"></script>

</body>

</html>
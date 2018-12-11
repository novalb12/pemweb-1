
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("<?php echo base_url() ?>assets/images/download.jpg");
  
  /* Add the blur effect */
  filter: blur(10px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 80%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgba(0,0,0, 0); /* Fallback color */
  background-color: rgba(0,0,0, 0); /* Black w/opacity/see-through */
  color: white;	
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  text-align: center;
  margin-top: 50px;
}
</style>
<div class="bg-image"></div>

<div class="bg-text">
	<div class="container box-login">
		<div class="row form-login">
			<div class="col-md-12">
				<form action="<?php echo base_url('login/aksi_login'); ?>" method="post" class="text-center">
					<input type="text" name="username" class="uname" placeholder="Username" require><br>
					<input type="password" name="password" class="password" placeholder="Password" require><br>
					<input type="submit" name="login" class="login" value="Login">
				</form>
				<form action="<?php echo base_url('login/daftar');?>">
					<input type="submit" class="register" value="Signup">
				</form>
			</div>
		</div>
	</div>
</div>




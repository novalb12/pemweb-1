
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
    border: 3px solid black;
  background-color: rgba(0,0,0, 0); /* Fallback color */
  background-color: rgba(0,0,0, 0); /* Black w/opacity/see-through */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  text-align: center;
  margin-top: 20px;
}
</style>
<div class="bg-image"></div>
<div class="bg-text">
    <div class="container box-daftar" >
        <div class="text-center">
            <h2>Register</h2>
        </div>
        <div class="text-center">
            <form action="<?php echo base_url(). 'login/tambah_aksi'; ?>" method="post">
                <input type="text" name="nama" class="btn-daftar" placeholder="Nama"> <br>
                <label for="tgl_lahir">Tanggal Lahir</label> <br>
                <input type="date" name="tgl_lahir" class="btn-daftar" placeholder="Tanggal Lahir">    
                <input type="text" name="username" class="btn-daftar" placeholder="Username">    
                <input type="password" name="password" class="btn-daftar" placeholder="Password"> <br>    
                <input type="submit" name="Submit" class="register" value="Save">
            </form>
        </div>
    </div>
</div>
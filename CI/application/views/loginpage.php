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



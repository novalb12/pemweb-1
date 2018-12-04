<div class="container">
    <div class="row form-login">
        <div class="col-md-12">
            <form action="<?php echo base_url('login/aksi_login'); ?>" method="post" class="text-center">
                <input type="text" name="username" class="uname" placeholder="Username" require><br>
                <input type="password" name="password" class="password" placeholder="Password" require><br>
                <input type="submit" name="login" class="login" value="Login">
            </form>
            <input type="submit" name="register" class="register" value="Register" onclick="alert('Test')" >
        </div>
    </div>
</div>
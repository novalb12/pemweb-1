<div class="container box-daftar">
    <div class="text-center">
        <h2>Edit Profile</h2>
    </div>
    <?php foreach($user as $u){ ?>
    <div class="text-center">
        <form action="<?php echo base_url(). 'Daftar/update'; ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $u->id ?>">
            <input type="text" name="nama" class="btn-daftar"  value="<?php echo $u->nama ?>"> <br>
            <label for="tgl_lahir">Tanggal Lahir</label> <br>
            <input type="date" name="tgl_lahir" class="btn-daftar" value="<?php echo $u->tgl_lahir ?>">    
            <input type="text" name="username" class="btn-daftar" value="<?php echo $u->username ?>">    
            <input type="password" name="password" class="btn-daftar" placeholder="Password">  <br>    
            <input type="submit" name="Submit" class="register" value="Simpan">
        </form>
    </div>
    <?php } ?>
</div>
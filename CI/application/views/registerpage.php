<div class="container box-daftar">
    <div class="text-center">
        <h2>Daftar</h2>
    </div>
    <div class="text-center">
        <form action="<?php echo base_url(). 'login/tambah_aksi'; ?>" method="post">
            <input type="text" name="nama" class="btn-daftar" placeholder="Nama"> <br>
            <label for="tgl_lahir">Tanggal Lahir</label> <br>
            <input type="date" name="tgl_lahir" class="btn-daftar" placeholder="Tanggal Lahir">    
            <input type="text" name="username" class="btn-daftar" placeholder="Username">    
            <input type="password" name="password" class="btn-daftar" placeholder="Password"> <br>    
            <input type="submit" name="Submit" class="register" value="Daftar">
        </form>
    </div>
</div>
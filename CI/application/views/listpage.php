<body class="daftar-box">
	<table class="tabel-daftar"  border="1">
		<tr>
            <th>No</th>
            <th>ID</th>
			<th>Name</th>
			<th>Username</th>
			<th>Date Birth</th>
            <th>Password</th>
            <th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->id ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->username ?></td>
			<td><?php echo $u->tgl_lahir ?></td>
			<td><?php echo $u->password ?></td>
			<td>
			    <?php echo anchor('Daftar/edit/'.$u->id,'Edit'); ?>
                <?php echo anchor('Daftar/hapus/'.$u->id,'Delete'); ?>
			</td>
		</tr>
		<?php } ?>
    </table>
    <div >
    <center><a style="color: white" href="<?php echo base_url('login/daftar');?>">Tambah Data</a></center>
    </div>
</body>
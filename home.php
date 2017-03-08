<?php
session_start();
if (isset($_SESSION['username'])) {
	# code...
	include "koneksi.php";
	$query = "SELECT * FROM data_saudara";
	$sql = mysql_query($query, $koneksi);
	$jumlah_baris = mysql_num_rows($sql);
	echo "Selamat datang : ".$_SESSION['username'];
	echo "<br><br>";
	echo "Jumlah data : ".$jumlah_baris;
	?>
	<table border=1 cellspacing=0 width="80%">
		<tr>
			<td>Nomor</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Usia</td>
			<td>Aksi</td>
		</tr>
		<?php if($jumlah_baris==0): ?>
		<tr><td colspan=3>Tidak ada Pesan</td></tr>
		<?php else: ?>
		
		<tr>
			<?php while($data = mysql_fetch_object($sql)): ?>
			<td><?php echo $data->id;?></td>
			<td><?php echo $data->nama;?></td>
			<td><?php echo $data->alamat;?></td>
			<td><?php echo $data->usia;?></td>
				<td>
					<a href="update.php?id=<?php echo $data->id;?>">update</a>  
					<a href="delete.php?id=<?php echo $data->id;?>">delete</a></td>
				</tr>
			<?php endwhile;?>
			<?php endif; ?>
	</table>
	<br>
	<a href="logout.php"><button>Logout</button></a>
	<a href="tambah.php"><button>Tambah</button></a>
	<?php
}else
{
	?>Anda tidak boleh mengakses halaman ini!<a href="form_admin.php">Login Dulu Gan</a><?php
}
?>



	
	
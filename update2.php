<?php
session_start();
include "koneksi.php";

$idnew=$_POST['id'];
$namanew=$_POST['nama'];
$alamatnew=$_POST['alamat'];
$usianew=$_POST['usia'];
$query = "UPDATE data_saudara SET nama = '$newnama', alamat = '$newalamat' , usia = '$newusia' WHERE id = '$idnew'" ;
$hasil  = mysql_query($query);
if ($hasil) {
echo "<script>
		alert('Selamat anda berhasil mengupdate data');
		window.location.assign('home.php');
	</script>";
}
?>
<?php
include 'dblink.php';

$no_matrik=$_POST['no_matrik'];
$nama=$_POST['nama'];
$umur=$_POST['umur'];
$jantina=$_POST['jantina'];

$query="insert into data (no_matrik,nama,umur,jantina)
	values ('$no_matrik','$nama','$umur','$jantina')";

if (mysqli_query($con,$query)) {
	echo " Data berjaya direkod";
	header('location: index.php');
}
else{
	echo " Data tidak berjaya dihantar";
}
?>


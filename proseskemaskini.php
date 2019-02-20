<?php
include 'dblink.php';
$no_matrik=$_POST['no_matrik'];
$nama=$_POST['nama'];
$umur=$_POST['umur'];
$jantina=$_POST['jantina'];

$query="update data set no_matrik= '$no_matrik', nama= '$nama' , umur= '$umur'
		, jantina= '$jantina' where no_matrik= '$no_matrik' ";

if ($result=mysqli_query($con,$query)) {
	echo " Data berjaya direkodkan";
	header("location: index.php");
}else{
	echo " Data tidak berjaya dikemaskini";
}

?>
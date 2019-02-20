<?php
include 'dblink.php';
$no_matrik=$_GET['no_matrik'];

$query="delete from data where no_matrik='$no_matrik' ";

if ($result=mysqli_query($con,$query)) {
	echo " Data berjaya dipadam";
	header('location: index.php');
}else{
	echo " Data tidak berjaya dipadam";
}

?>
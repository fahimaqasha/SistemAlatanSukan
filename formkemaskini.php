<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include 'dblink.php';
$no_matrik=$_GET['no_matrik'];

$pelajar=mysqli_query($con,"select * from data where no_matrik='$no_matrik'");
$row=mysqli_fetch_array($pelajar);
?>

<form method="POST" action="proseskemaskini.php">
<h3 align="center">Borang Pendaftaran Pelajar</h3>
<table width="500" align="center" cellspacing="0" cellpadding="0" border="1" bgcolor="red">

<tr>
<td height="40">NO MATRIK</td>
<td>:<input type="text" name="no_matrik" value="<?php
	echo $row['no_matrik'];?>"></td>
</tr>

<tr>
<td height="40">NAMA</td>
<td>:<input type="text" name="nama" value="<?php
	echo $row['nama'];?>"></td>
</tr>

<tr>
<td height="40">UMUR</td>
<td>:<input type="text" name="umur" value="<?php
	echo $row['umur'];?>"></td>
</tr>

<tr>
<td height="40">JANTINA</td>
<td>:<input type="text" name="jantina" value="<?php
	echo $row['jantina'];?>"></td>
</tr>

</table><br>
<center> <input type="submit" name="submit" value="Update Data"> </center>
</body>
</html>
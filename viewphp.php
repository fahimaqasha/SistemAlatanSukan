<?php
include 'dblink.php';

$query="select no_matrik,nama,umur,jantina from data";
$result=mysqli_query($con,$query);
?>
<table align="center">
<p align="center">Senarai Nama Pelajar</p>
	<td align="center" bgcolor="red">No Matrik</td>
	<td align="center" bgcolor="yellow">Nama</td>
	<td align="center" bgcolor="blue">Umur</td>
	<td align="center" bgcolor="gree">Jantina</td>
	<td align="center" bgcolor="purple">Update</td>
	<td align="center" bgcolor="orange">Delete</td>

<?php
while($data=mysqli_fetch_array($result)){
	$no_matrik=$data["no_matrik"];

echo "<tr>";
echo "<td>".$data["no_matrik"]."</td>";
echo "<td>".$data["nama"]."</td>";
echo "<td>".$data["umur"]."</td>";
echo "<td>".$data["jantina"]."</td>";
echo "<td>","<a href=\"formkemaskini.php?no_matrik=$no_matrik\">
	Kemaskini</a>";
echo "<td>","<a href=\"prosesdelete.php?no_matrik=$no_matrik\">
	Padam</a>";

echo "</tr>";
}
echo "</table>";
?>

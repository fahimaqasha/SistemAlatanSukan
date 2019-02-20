<?php
$host="localhost";
$user="root";
$password="123456";
$dbname="pelajar";

$con=mysqli_connect($host,$user,$password,$dbname);

if (!$con) {
	echo "Databases Not Connect";
}else{
	echo "Databases Connected";
}
?>
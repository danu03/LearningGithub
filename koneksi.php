<?php 
$server	= 'localhost';
$username = 'root';
$password = '';
$database = 'berita_0024';

$con = mysqli_connect($server,$username,$password,$database);

if (mysqli_connect_errno())
{
	echo "Failed to connect MySQL".mysqli_connect_errno();
}else{
	//echo "koneksi sukses !";
}

 ?>

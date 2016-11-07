<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "tugas3fundametal";
	
	//Membuka koneksi antara PHP dan MySQL
	$con = mysql_connect ($host,$user,$pass)
			or die ("Koneksi ke MySQL tidak dapat dibentuk");
	
	//Memilih basis data yang digunakan
	mysql_select_db($db, $con)
		or die("Basis data tidak ditemukan");
?>
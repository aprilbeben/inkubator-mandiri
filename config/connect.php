<?php
$host = "localhost";
$username = "root";
$password = "";

//mulai koneksi mysql
$conn=mysql_connect($host,$username,$password) or die ("Koneksi Mysql Gagal!");

//nama database yang akan digunakan
$nama_db= "db_inkubator";

//mulai koneksi ke database
mysql_select_db($nama_db) or die ("Koneksi Database Gagal!");
?>

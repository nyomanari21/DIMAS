<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "inventaris_darussalam";

$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno())
{
	echo "Koneksi database gagal".mysqli_connect_error();
}

?>
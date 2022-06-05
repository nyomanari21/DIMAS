<?php

include("config.php");
include("Functions/function_pinjam.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

if($_SESSION['identifier'] == "jamaah")
{
    $data_peminjaman = show_peminjaman();
}
else
{
    $data_peminjaman = lihat_peminjaman();
}

require_once("Pages/peminjaman.php");

?>


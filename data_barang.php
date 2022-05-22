<?php

session_start();
include("config.php");
include("Functions/function_inventaris.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}   

$data_barang = show_barang();
// print_r($data_barang);
require_once("Pages/data_barang.php");

?>
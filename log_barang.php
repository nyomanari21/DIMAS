<?php

session_start(); // Start session.
include("config.php");
include("Functions/function_log_barang.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

// $data_log_barang = show_log_barang();
require_once("Pages/log_barang.php");

?>
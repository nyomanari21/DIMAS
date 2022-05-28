<?php

session_start(); // Start session.
include("config.php");
include("Functions/function_pemeliharaan.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

// $data_pemeliharaan = show_pemeliharaan();
require_once("Pages/pemeliharaan.php");

?>
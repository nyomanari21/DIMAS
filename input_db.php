<?php

session_start(); // Start session.
include("config.php");
include("Functions/function_ruangan.php");
include("Functions/function_kondisi.php");
include("Functions/function_Sumber.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

// ambil data ruangan
$data_ruangan = show_ruangan();

// ambil data kondisi
$data_kondisi = show_kondisi();

// ambil data sumber
$data_sumber = show_sumber();

require_once("Pages/input_db.php");

?>
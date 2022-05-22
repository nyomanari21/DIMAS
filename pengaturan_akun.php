<?php

session_start(); // Start session.
include("config.php");
include("Functions/function_akun.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

$data_pengurus = show_pengurus();
$data_jamaah = show_jamaah();

require_once("Pages/pengaturan_akun.php");

?>
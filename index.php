<?php

session_start(); // Start session.
include("config.php");
include("Functions/function_notifikasi.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

require_once("Pages/index.php");

?>

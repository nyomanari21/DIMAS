<?php

session_start(); // Start session.
include("config.php");
include("Functions/function_ruangan.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

$data_ruangan = show_ruangan();
require_once("Pages/ruangan.php");

?>
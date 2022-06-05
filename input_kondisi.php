<?php

session_start(); // Start session.
include("config.php");
include("Functions/function_kondisi.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

$data_kondisi = show_kondisi();
require_once("Pages/input_kondisi.php");
?>

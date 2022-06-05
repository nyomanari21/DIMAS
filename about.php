<?php

session_start(); // Start session.
include("config.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}
    require_once("Pages/about.php");
?>


<?php

session_start(); // Start session.
include("config.php");
include("Functions/function_sumber.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

$data_sumber = show_sumber();

require_once("Pages/input_sumber.php");

?>
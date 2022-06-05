<?php
    require("config.php");
    require("Functions/function_barang.php");

    $data_barang = show_barang();
    require_once("Pages/export.php");
?>


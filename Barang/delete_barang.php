<?php

include("../config.php");
include("../Functions/function_inventaris.php");

$kode = $_GET["kode_barang"];

if(delete_sumber($kode) > 0 ) 
{
    echo "
    <script>
        alert('Data barang berhasil dihapus!');
        window.location.href = '../input_barang.php'
    </script>
    ";
} 

?>
<?php

include("../config.php");
include("../Functions/function_barang.php");

$kode = $_GET["kode_barang"];

if(delete_barang($kode) > 0 ) 
{
    echo "
    <script>
        alert('Data barang berhasil dihapus!');
        window.location.href = '../data_barang.php'
    </script>
    ";
}
else{
    echo "
    <script>
        alert('Data barang gagal dihapus!');
        window.location.href = '../data_barang.php'
    </script>
    ";
}

?>
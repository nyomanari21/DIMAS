<?php

include("../config.php");
include("../Functions/function_kondisi.php");

$kode = $_GET["kode_kondisi"];

if(delete_kondisi($kode) > 0 ) 
{
    echo "
    <script>
        alert('Data kondisi berhasil dihapus!');
        window.location.href = '../input_kondisi.php'
    </script>
    ";
} 
else 
{
    echo "
    <script>
        alert('Data kondisi gagal dihapus!');
        window.location.href = '../input_kondisi.php'
    </script>
    ";
}
?>
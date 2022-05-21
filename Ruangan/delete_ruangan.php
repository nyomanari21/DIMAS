<?php

include("../config.php");
include("../Functions/function_ruangan.php");

$kode = $_GET["kode_ruangan"];

if(delete_ruangan($kode) > 0 ) 
{
    echo "
    <script>
        alert('Data ruangan berhasil dihapus!');
        window.location.href = '../input_ruangan.php'
    </script>
    ";
} 
else 
{
    echo "
    <script>
        alert('Data ruangan gagal dihapus!');
        window.location.href = '../input_ruangan.php'
    </script>
    ";
}
?>